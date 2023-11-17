/**
* Template Name: NiceAdmin
* Updated: Aug 30 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function(e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function(e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)


  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Sidebar-Icon-Only
   */
  $(document).ready(function () {
    var body = $('body');

    // Initialize tooltips for elements with data-toggle="tooltip"
    $('[data-toggle="tooltip"]').tooltip();

    // Handle sidebar toggle
    $('[data-toggle="offcanvas"]').on("click", function () {
      $('.sidebar-offcanvas').toggleClass('active');
      // Add CSS class to main-panel after sidebar toggle
      if ($('.sidebar-offcanvas').hasClass('active')) {
        $('.main-panel').addClass('off-canvas');
      } else {
        $('.main-panel').removeClass('off-canvas');
      }
    });
    
    $(document).on('mouseenter mouseleave touchstart touchend', '.sidebar .nav-item', function (ev) {
      // Check if the body element has certain classes
      var sidebarIconOnly = body.hasClass("sidebar-icon-only");
      var sidebarFixed = body.hasClass("sidebar-fixed");
      var $menuItem = $(this);

      function onLongPress(element, callback) {
        var timeoutId;
        
        element.on('touchstart', function(e) {
          timeoutId = setTimeout(function() {
            timeoutId = null;
            e.stopPropagation();
            callback(e.target);
          }, 500);
        });
      
        element.on('contextmenu', function(e) {
          e.preventDefault();
        });
      
        element.on('touchend touchmove', function() {
          if (timeoutId) clearTimeout(timeoutId);
        });
      }      
    
      if (!('ontouchstart' in document.documentElement) && sidebarIconOnly) {
        // If it's not a touch device and the sidebar is in icon-only mode
        if (sidebarFixed && (ev.type === 'mouseenter' || ev.type === 'touchstart')) {
          // If the sidebar is fixed and the mouse enters the element or touch starts
          body.removeClass('sidebar-icon-only');
        } else {
          // Otherwise, toggle the 'hover-open' class based on mouseenter/mouseleave/touchstart
          onLongPress($menuItem, function(element) {
            element.toggleClass('hover-open', (ev.type === 'mouseenter' || ev.type === 'touchstart'));
          });    
        }
      }
      
    });
    

    

    // Toggle sidebar visibility
    $('[data-toggle="minimize"]').on("click", function () {
      if (body.hasClass('sidebar-toggle-display') || body.hasClass('sidebar-absolute')) {
        body.toggleClass('sidebar-hidden');
      } else {
        body.toggleClass('sidebar-icon-only');
      }
    });
  });

  //tags input
  function init_TagsInput() {

    if (typeof $.fn.tagsInput !== 'undefined') {

        $('#tags_1').tagsInput({
            width: 'auto'
        });

    }
    $("input").tagsinput('items')

  };
  init_TagsInput();
  /* INPUT MASK */

  function init_InputMask() {

    if (typeof ($.fn.inputmask) === 'undefined') { return; }
    console.log('init_InputMask');

    $(":input").inputmask();

  };
  init_InputMask();


})();
