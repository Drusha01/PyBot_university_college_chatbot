(function($) {
    "use strict";

// Enable child rows for default
var table = $('#example').DataTable({
    /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
    'columnDefs': [
       {
          'targets': 0,
          'checkboxes': {
             'selectRow': true
          }
       }
    ],
    'select': {
       'style': 'multi'
    },
    lengthChange: false,   // Disable the "Show X entries" dropdown
    'order': [[1, 'asc']]
  });
  // Enable child rows for Example 1
  var table1 = $('#example1').DataTable({
      /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
    'columnDefs': [
       {
          'targets': 0,
          'checkboxes': {
             'selectRow': true
          }
       }
    ],
    'select': {
       'style': 'multi'
    },
    lengthChange: false,   // Disable the "Show X entries" dropdown
    'order': [[1, 'asc']]
  });
  // Enable child rows for Example 1
  var table2 = $('#example2').DataTable({
      /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
    'columnDefs': [
       {
          'targets': 0,
          'checkboxes': {
             'selectRow': true
          }
       }
    ],
    'select': {
       'style': 'multi'
    },
    lengthChange: false,   // Disable the "Show X entries" dropdown
    'order': [[1, 'asc']]
  });



  // Enable child rows for Example 2
  var table3 = $('#example3').DataTable({
      /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
    'columnDefs': [
       {
          'targets': 0,
          'checkboxes': {
             'selectRow': true
          }
       }
    ],
    'select': {
       'style': 'multi'
    },
    lengthChange: false,   // Disable the "Show X entries" dropdown
    'order': [[1, 'asc']]
  });

  // Enable child rows for No table
  var notable = $('#notable').DataTable({
      /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
    'columnDefs': [
       {
          'targets': 0,
          'checkboxes': {
             'selectRow': true
          }
       }
    ],
    'select': {
       'style': 'multi'
    },
      info: false,           // Disable the "Showing X of Y entries" information
      ordering: false,       // Disable column sorting
      paging: false,         // Disable pagination (previous and next buttons)
      lengthChange: false,   // Disable the "Show X entries" dropdown
      searching: false,      // Disable the search bar

      order: [1, 'desc'],

  });

})(jQuery);