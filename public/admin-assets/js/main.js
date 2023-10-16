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
   * /Datatables rendering
   */

  function initializeDataTable(tableId) {
    var table = $(tableId).DataTable({
      responsive: {
        // Control responsive breakpoints
        breakpoints: [
            { name: 'desktop-large', width: Infinity },
            { name: 'desktop', width: 1200 },
            { name: 'tablet', width: 992 },
            { name: 'phone-large', width: 768 },
            { name: 'phone', width: 576 }
        ],
        // Set non-responsive columns (columns you want to be always visible)
        details: {
            type: 'column',
            target: 'tr'
        }

      },
      columnDefs: [
          {
              className: 'dtr-control',
              orderable: false,
              target: 0
          }
      ],                 //Disabled if False
        info: true,           // Disable the "Showing X of Y entries" information
        ordering: true,       // Disable column sorting
        paging: true,         // Disable pagination (previous and next buttons)
        lengthChange: false,   // Disable the "Show X entries" dropdown
        searching: true,      // Disable the search bar
        order: [1, 'desc'],
    });

  }
    // Initialize DataTable for table with ID 'example'
    initializeDataTable('#example');
    initializeDataTable('#example1');
    initializeDataTable('#example2');
    initializeDataTable('#example3');


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
   * Perfect ScrollBar
   */
  new SimpleBar(document.querySelector('.scrollbar-y'));


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
    });

    // Open submenu on hover in compact sidebar mode and horizontal menu mode
    $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
      var sidebarIconOnly = body.hasClass("sidebar-icon-only");
      var sidebarFixed = body.hasClass("sidebar-fixed");
      var $menuItem = $(this);

      if (!('ontouchstart' in document.documentElement) && sidebarIconOnly) {
        if (sidebarFixed && ev.type === 'mouseenter') {
          body.removeClass('sidebar-icon-only');
        } else {
          $menuItem.toggleClass('hover-open', ev.type === 'mouseenter');
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





})();
