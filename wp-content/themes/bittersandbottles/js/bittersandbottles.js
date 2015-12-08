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
    var subscription_price = 85;
    var subscription_code = '';

    if ($('#choice_shipping').val() == 'yes') {
      subscription_price = 85 + 23; 
    } 

    // if $('#choice_giftduration').val() is 0, it's recurring
    var prepaid_months = $('#choice_giftduration').val();

    if (prepaid_months > 0) {
      var gift_price = $('#choice_giftduration').val() * subscription_price;      
      $('.subscription_choices .price').html('$' +gift_price.toLocaleString());
      $('.price_disclaimer').hide();
      subscription_code = 'COCKTAILS-PREPAID-' +$('#choice_giftduration').val()+ 'MO';
      $('form#buy-subscription [name=price]').val(gift_price);           
      $('form#buy-subscription [name=category]').val('DEFAULT'); 
      $('form#buy-subscription [name=sub_frequency]').val(''); 
      $('form#buy-subscription [name=shipto]').val($('#choice_giftname').val());         
      $('form#buy-subscription [name=Gift_Message]').val($('#choice_giftmessage').val());       
    } else {
      $('.subscription_choices .price').html('$' +subscription_price+ ' / month');
      $('.price_disclaimer').show();     
      subscription_code = 'COCKTAILS-MONTHLY-SUBSCRIPTION';       
      $('form#buy-subscription [name=price]').val(subscription_price);                    
      $('form#buy-subscription [name=category]').val('SUBSCRIPTION');                
      $('form#buy-subscription [name=sub_frequency]').val('1m');        
    }

    if ($('#choice_shipping').val() == 'yes') {
      subscription_code += '-SHIPPED';
    } else {
      subscription_code += '-PICKUP';
      $('form#buy-subscription [name=category]').val('PICKUP');      
    } 
    
    $('form#buy-subscription [name=code]').val(subscription_code);   

  }

  function init() {

    // get started button
    $('.show_subscription_choices button').click(function(e) { 
      e.preventDefault();
      calculate_price();
      $('.subscription_choices').show('fast', function () {
      });
      $('.show_subscription_choices').hide();
    });

    // recalculate price every time you pick something
    $('.subscription_choices select').change(function(e) {
      calculate_price();
    });       

    $('#choice_shipping').change(function(e) {
      calculate_price();
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

      // one last calculate
      calculate_price();

      // add the starter kit if it's selected.
      if ($('#choice_bartools').val() == 'yes') {
        console.log('add bar toools');
        var whofor = $('form#buy-subscription [name=shipto]').val() ? $('form#buy-subscription [name=shipto]').val() : '';
        var bargoods_category = $('form#buy-subscription [name=category]').val() == 'PICKUP' ? $('form#buy-subscription [name=category]').val() : 'BARGOODS';      
        var carturl = 'https://bittersandbottles.foxycart.com/cart?name=Bar+Tools+Starter+Kit&price=55&shipto='+whofor+'&category=' +bargoods_category+ '&code=BAR-TOOLS-STARTER-KIT&' +FC.session.get()+'&output=json&callback=?';
          $.getJSON(carturl, function(data) {
        });            
      }      

      // add expedite delivery
      if ($('#choice_expedite').val() == 'yes') {
        console.log('add expedite');
        var whofor = $('form#buy-subscription [name=shipto]').val() ? $('form#buy-subscription [name=shipto]').val() : '';
        var carturl = 'https://bittersandbottles.foxycart.com/cart?name=Expedite+Order&price=30&shipto='+whofor+'&category=BARGOODS&code=EXPEDITE-ORDER&' +FC.session.get()+'&output=json&callback=?';
          $.getJSON(carturl, function(data) {
        });            
      }      

      // add the subscription
      $('#buy-subscription').submit();             
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