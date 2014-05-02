// custom bitters+bottles javascript, written by Dennis Yang
var bb = {};

bb.age_verify = (function() {

  var age_verified_check = 'aug20a';

  function init() {
    console.log('initing the age verification');

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
    $.colorbox.close();
  }

  function verify() {
    console.log('Reading age cookie', $.cookie('age_verified'));
    if ($.cookie('age_verified') != age_verified_check || document.location.search == '?verify') {
      showmodal();
    }
  }

  function showmodal() {
    console.log('showing age verification modal');
    $.colorbox({
      inline:true, 
      closeButton:true,
      href:"#ageModal",
      overlayClose:false,
      scrolling:false,
      opacity: .9,
      open: true,
      overlayClose: false
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

bb.subscription = (function() {

  function init() {

    $('.show_subscription_choices button').click(function(e) { 
      e.preventDefault();
      $('.subscription_choices').show('fast', function () {
      });
      $('.show_subscription_choices').hide();
    });

    // toggle selected button
    $('.subscription_choices a').click(function(e) {
      e.preventDefault();
      $(this).parents('ul').find('a').removeClass('selected');
      $(this).addClass('selected');
    });

    $('.giftornot a').click(function(e) {
      e.preventDefault();
      if ($(this).html() == 'This is a gift') {
        $('.giftoptions').show();      
      } else {
        $('.giftoptions').hide();         
      }

    });

    $('.needbartools a').click(function(e) {
      e.preventDefault();
    });  
  }

  function process() {

  }

  return {
    init: init
  }

})();