(function($) {
    "use strict";
    function initializeDataTable(tableId) {
      if ($.fn.DataTable.isDataTable(`#${tableId}`)) {
          // Check if the DataTable is already initialized
          $(`#${tableId}`).DataTable().destroy(); // Destroy the existing DataTable
      }
      // Initialize DataTable for the specified table
      $(`#${tableId}`).DataTable({
         responsive: {
            // Control responsive breakpoints
            breakpoints: [
                { name: 'desktop-large', width: Infinity },
                { name: 'desktop', width: 1200 },
                { name: 'tablet', width: 992 },
                { name: 'phone-large', width: 768 },
                { name: 'phone', width: 576 }
            ],
            "stateSave": true,

        },
            order: [1, 'desc'],
            lengthChange: false,   // Disable the "Show X entries" dropdown
      });
  }
initializeDataTable('example1');  
initializeDataTable('example2');
initializeDataTable('example3');

})(jQuery);