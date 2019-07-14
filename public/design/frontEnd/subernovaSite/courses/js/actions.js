$(document).ready(function(){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if(scroll>600){
			$("#nav").css("background-color" , "#0e3053");
			$("#links").css("background-color" , "#183e4cb8");

		}else{
			$("#nav").css("background-color" , "transparent");
			$("#links").css("background-color" , "transparent");
		}
	})
});
//make the links scroll smoothly
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

//nice scroll js
$("html").niceScroll();

$("html").niceScroll({
  cursorcolor:"blue",
  cursorwidth:"16px"
});

//load  section js
$(window).load(function(){
	//show the scroll
	$(".load-overlay").fadeOut(6000);
	$("body").css("overflow" , "auto");

});


/*Hover on cards */
( function( $, window, undefined ) {

  'use strict';

  $.HoverDir = function( options, element ) {

    this.$el = $( element );
    this._init( options );

  };

  // the options
  $.HoverDir.defaults = {
    speed : 300,
    easing : 'ease',
    hoverDelay : 0,
    inverse : false
  };

  $.HoverDir.prototype = {

    _init : function( options ) {

      // options
      this.options = $.extend( true, {}, $.HoverDir.defaults, options );
      // transition properties
      this.transitionProp = 'all ' + this.options.speed + 'ms ' + this.options.easing;
      // support for CSS transitions
      this.support = Modernizr.csstransitions;
      // load the events
      this._loadEvents();

    },
    _loadEvents : function() {

      var self = this;

      this.$el.on( 'mouseenter.hoverdir, mouseleave.hoverdir', function( event ) {

        var $el = $( this ),
          $hoverElem = $el.find( 'div' ),
          direction = self._getDir( $el, { x : event.pageX, y : event.pageY } ),
          styleCSS = self._getStyle( direction );

        if( event.type === 'mouseenter' ) {

          $hoverElem.hide().css( styleCSS.from );
          clearTimeout( self.tmhover );

          self.tmhover = setTimeout( function() {

            $hoverElem.show( 0, function() {

              var $el = $( this );
              if( self.support ) {
                $el.css( 'transition', self.transitionProp );
              }
              self._applyAnimation( $el, styleCSS.to, self.options.speed );

            } );


          }, self.options.hoverDelay );

        }
        else {

          if( self.support ) {
            $hoverElem.css( 'transition', self.transitionProp );
          }
          clearTimeout( self.tmhover );
          self._applyAnimation( $hoverElem, styleCSS.from, self.options.speed );

        }

      } );

    },
    // credits : http://stackoverflow.com/a/3647634
    _getDir : function( $el, coordinates ) {

      // the width and height of the current div
      var w = $el.width(),
        h = $el.height(),

        // calculate the x and y to get an angle to the center of the div from that x and y.
        // gets the x value relative to the center of the DIV and "normalize" it
        x = ( coordinates.x - $el.offset().left - ( w/2 )) * ( w > h ? ( h/w ) : 1 ),
        y = ( coordinates.y - $el.offset().top  - ( h/2 )) * ( h > w ? ( w/h ) : 1 ),

        // the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);
        // first calculate the angle of the point,
        // add 180 deg to get rid of the negative values
        // divide by 90 to get the quadrant
        // add 3 and do a modulo by 4  to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
        direction = Math.round( ( ( ( Math.atan2(y, x) * (180 / Math.PI) ) + 180 ) / 90 ) + 3 ) % 4;

      return direction;

    },
    _getStyle : function( direction ) {

      var fromStyle, toStyle,
        slideFromTop = { left : '0px', top : '-100%' },
        slideFromBottom = { left : '0px', top : '100%' },
        slideFromLeft = { left : '-100%', top : '0px' },
        slideFromRight = { left : '100%', top : '0px' },
        slideTop = { top : '0px' },
        slideLeft = { left : '0px' };

      switch( direction ) {
        case 0:
          // from top
          fromStyle = !this.options.inverse ? slideFromTop : slideFromBottom;
          toStyle = slideTop;
          break;
        case 1:
          // from right
          fromStyle = !this.options.inverse ? slideFromRight : slideFromLeft;
          toStyle = slideLeft;
          break;
        case 2:
          // from bottom
          fromStyle = !this.options.inverse ? slideFromBottom : slideFromTop;
          toStyle = slideTop;
          break;
        case 3:
          // from left
          fromStyle = !this.options.inverse ? slideFromLeft : slideFromRight;
          toStyle = slideLeft;
          break;
      };

      return { from : fromStyle, to : toStyle };

    },
    // apply a transition or fallback to jquery animate based on Modernizr.csstransitions support
    _applyAnimation : function( el, styleCSS, speed ) {

      $.fn.applyStyle = this.support ? $.fn.css : $.fn.animate;
      el.stop().applyStyle( styleCSS, $.extend( true, [], { duration : speed + 'ms' } ) );

    },

  };

  var logError = function( message ) {

    if ( window.console ) {

      window.console.error( message );

    }

  };

  $.fn.hoverdir = function( options ) {

    var instance = $.data( this, 'hoverdir' );

    if ( typeof options === 'string' ) {

      var args = Array.prototype.slice.call( arguments, 1 );

      this.each(function() {

        if ( !instance ) {

          logError( "cannot call methods on hoverdir prior to initialization; " +
          "attempted to call method '" + options + "'" );
          return;

        }

        if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

          logError( "no such method '" + options + "' for hoverdir instance" );
          return;

        }

        instance[ options ].apply( instance, args );

      });

    }
    else {

      this.each(function() {

        if ( instance ) {

          instance._init();

        }
        else {

          instance = $.data( this, 'hoverdir', new $.HoverDir( options, this ) );

        }

      });

    }

    return instance;

  };

} )( jQuery, window );



// event hover

// if ( jQuery().hoverdir ) {
//  jQuery(".event-lineup-box li").each( function() {
//    jQuery( this ).hoverdir();
//  } );
// }


  $(".event-lineup-box li").each(function() { $(this).hoverdir(); });
