$(document).ready(function() {
    
    //Mobile menu
    
    $('#mobile-menu').on('click', function(){
        $('.navigation.mobile').fadeToggle();
    });
    
    $('.mobile .nav-link').on('click', function(myEvent){
        myEvent.stopPropagation();
        $('.navigation.mobile').fadeToggle();
    });
    
    $('.navigation.mobile').on('click', function(){
        $('.navigation.mobile').fadeToggle();
    });
    
    //Sticky Nav
    var stickyNavTop = $('.nav').offset().top;

    var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
        $('.nav').addClass('sticky');
    } else {
        $('.nav').removeClass('sticky'); 
    }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });
    });

(function(document, history, location) {
  var HISTORY_SUPPORT = !!(history && history.pushState);

  var anchorScrolls = {
    ANCHOR_REGEX: /^#[^ ]+$/,
    OFFSET_HEIGHT_PX: 100,

    /**
     * Establish events, and fix initial scroll position if a hash is provided.
     */
    init: function() {
      this.scrollIfAnchor(location.hash);
      $('body').on('click', 'a', $.proxy(this, 'delegateAnchors'));
    },

    /**
     * Return the offset amount to deduct from the normal scroll position.
     * Modify as appropriate to allow for dynamic calculations
     */
    getFixedOffset: function() {
      return this.OFFSET_HEIGHT_PX;
    },

    /**
     * If the provided href is an anchor which resolves to an element on the
     * page, scroll to it.
     * @param  {String} href
     * @return {Boolean} - Was the href an anchor.
     */
    scrollIfAnchor: function(href, pushToHistory) {
      var match, anchorOffset;

      if(!this.ANCHOR_REGEX.test(href)) {
        return false;
      }

      match = document.getElementById(href.slice(1));

      if(match) {
        anchorOffset = $(match).offset().top - this.getFixedOffset();
        $('html, body').animate({ scrollTop: anchorOffset});

        // Add the state to history as-per normal anchor links
        if(HISTORY_SUPPORT && pushToHistory) {
          history.pushState({}, document.title, location.pathname + href);
        }
      }

      return !!match;
    },

    /**
     * If the click event's target was an anchor, fix the scroll position.
     */
    delegateAnchors: function(e) {
      var elem = e.target;

      if(this.scrollIfAnchor(elem.getAttribute('href'), true)) {
        e.preventDefault();
      }
    }
  };

	$(document).ready($.proxy(anchorScrolls, 'init'));
})(window.document, window.history, window.location);


$(function(){
  $(".element").typed({
    contentType: 'html',
    strings: ['Words matter.<span class="typed-cursor">|</span>'],
    typeSpeed: 150,
    showCursor: false,
  });
});
