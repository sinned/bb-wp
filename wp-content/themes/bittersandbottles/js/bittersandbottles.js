// custom bitters+bottles javascript, written by Dennis Yang
var bb = {};

bb.age_verify = (function() {

  var age_verified_check = 'sep22';

  function init() {
    //console.log('initing the age verification');

    $('#ageModal a').click(function(e) {
      e.preventDefault();
      //console.log('CLICKY', $(this).html());
      if ($(this).html().toLowerCase() == 'yes') {
        _gaq.push(['_trackEvent', 'Age Verification', 'Yes', age_verified_check]);
        age_verified();
      } else {
        window.location.assign("http://www.caprisun.com/");
        _gaq.push(['_trackEvent', 'Age Verification', 'No', age_verified_check]);
      }
    });

    verify();
  }

  function age_verified() {
    // set the cookie
    $.cookie('age_verified', age_verified_check, { expires: 14 });
    // close the modal
    $('#ageModal').hide();
    $.colorbox.close();

  }

  function verify() {
    console.log('Reading age cookie', $.cookie('age_verified'), ' matches ' , age_verified_check);
    if ($.cookie('age_verified') !== age_verified_check || document.location.search == '?verify') {
      showmodal();
    }
  }

  function showmodal() {
    console.log('showing age verification modal');
    $('#ageModal').show();
    $.colorbox({
      inline:true, 
      closeButton:true,
      href:"#ageModal",
      overlayClose:false,
      scrolling:false,
      opacity: .9,
      open: true,
      overlayClose: false,
      trapFocus: true
    });
    $('#cboxClose').hide();
    _gaq.push(['_trackPageview', window.location.pathname + '?verify']);
    ga('send', 'pageview', window.location.pathname + '?verify');    
  }

  return {
    init: init,
    verify:verify
  }
})();

// jquery functions for the subscription logic
bb.subscription = (function() {

  function calculate_price() {
    console.log('calculating price');
    if ($('#choice_isgift').val() == 'gift') {
      var gift_price = $('#choice_giftduration').val() * 95;      
      $('.subscription_choices .price').html('$' +gift_price.toLocaleString());
      $('.price_disclaimer').hide();
    } else {
      $('.subscription_choices .price').html('$95 / month');
      $('.price_disclaimer').show();      
    }

  }

  function init() {

    // get started button
    $('.show_subscription_choices button').click(function(e) { 
      e.preventDefault();
      $('.subscription_choices').show('fast', function () {
      });
      $('.show_subscription_choices').hide();
    });

    // recalculate price every time you pick something
    $('.subscription_choices select').change(function(e) {
      calculate_price();
    });       

    $('#choice_isgift').change(function(e) {
      e.preventDefault();
      if ($('#choice_isgift').val() == 'gift') {
        $('.giftoptions').show('fast');    
        $('#choice_isgift').parents('.row').height(200);
        $('#choice_bartools_question').html('Do they need bartools?');

      } else {
        $('form#buy-subscription [name=shipto]').val(''); // blank out shipto
        $('.giftoptions').hide('fast');
        $('#choice_isgift').parents('.row').height(40);    
        $('#choice_bartools_question').html('Do you need bartools?');  
      }
    });

    $('span.quantity_inc').click(function(e) {
      $(this).siblings('input').val(parseInt($(this).siblings('input').val()) + 1);
    })

    $('span.quantity_dec').click(function(e) {
      $(this).siblings('input').val(Math.max(1,parseInt($(this).siblings('input').val()) - 1));
    })    

    $('.needbartools a').click(function(e) {
      e.preventDefault();
    });  

    $('button#subscribe_process').click(function(e) {
      e.preventDefault();
      console.log('checking required fields');   
      
      if ($('#choice_isgift').val() == 'gift') {
        console.log('this is a gift');
         $('form#buy-subscription [name=code]').val('COCKTAILS-GIFT-' +$('#choice_giftduration').val()+ 'MO');
         var gift_price = $('#choice_giftduration').val() * 95;
         $('form#buy-subscription [name=price]').val(gift_price);           
         $('form#buy-subscription [name=category]').val('DEFAULT'); 
         $('form#buy-subscription [name=sub_frequency]').val(''); 
         $('form#buy-subscription [name=shipto]').val($('#choice_giftname').val());         
         $('form#buy-subscription [name=Gift_Message]').val($('#choice_giftmessage').val()); 
      } else {
         $('form#buy-subscription [name=code]').val('COCKTAILS-MONTHLY-SUBSCRIPTION');   
         $('form#buy-subscription [name=price]').val(95);                    
         $('form#buy-subscription [name=category]').val('SUBSCRIPTION');                
         $('form#buy-subscription [name=sub_frequency]').val('1m'); 
      }      

      $('#buy-subscription').submit();   

      // add the starter kit if it's selected.
      if ($('#choice_bartools').val() == 'yes') {
        console.log('add bar toools');
        var whofor = $('form#buy-subscription [name=shipto]').val() ? $('form#buy-subscription [name=shipto]').val() : '';
        var carturl = 'https://bittersandbottles.foxycart.com/cart?name=Bar+Tools+Starter+Kit&price=55&shipto='+whofor+'&category=BARGOODS&code=BAR-TOOLS-STARTER-KIT' +fcc.session_get()+'&output=json&callback=?';
          $.getJSON(carturl, function(data) {
        });            
      }      
    })

  }

  function process() {

  }

  return {
    init: init
  }
})();

// jquery functions for the shop
bb.shop = (function() {

  function init() {
    $('.foxyshop_product_info_bottom div.plus').click(function (e) {
      $(this).siblings('.foxyshop_product_info_bottom div.addtocart_space').toggle('fast');
      $(this).siblings('.foxyshop_product_info_bottom div.addtocart').toggle('fast');
    });
  }

  return {
    init: init
  }  
})();