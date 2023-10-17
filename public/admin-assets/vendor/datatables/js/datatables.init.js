(function($) {
    "use strict";

    // Enable child rows for default
    var table = $('#example').DataTable({
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
        ],
        order: [1, 'desc'],

    });
    // Enable child rows for Example 1
    var table1 = $('#example1').DataTable({
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
        ],
        order: [1, 'desc'],


    });
    // Enable child rows for Example 1
    var table2 = $('#example2').DataTable({
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
        ],
        order: [1, 'desc'],

    });



    // Enable child rows for Example 2
    var table3 = $('#example3').DataTable({
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
        ],
        order: [1, 'desc'],

    });

    // Enable child rows for No table
    var notable = $('#notable').DataTable({
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
        ],
        info: false,           // Disable the "Showing X of Y entries" information
        ordering: false,       // Disable column sorting
        paging: false,         // Disable pagination (previous and next buttons)
        lengthChange: false,   // Disable the "Show X entries" dropdown
        searching: false,      // Disable the search bar

        order: [1, 'desc'],

    });
    $('a[data-toggle="tab"]').on('.show.active', function (event) {
        var tabID = $(event.target).attr('data-target');
        if ( tabID === '#CS-management-tab' ) {
          table2.columns.adjust().responsive.recalc();
        }
        if ( tabID === '#ACT-management-tab' ) {
            table3.columns.adjust().responsive.recalc();
          }
      } );

})(jQuery);