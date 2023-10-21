  // Table
  $('table input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('table input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});

var checkState = '';

$('.bulk_action input').on('ifChecked', function () {
    checkState = '';
    $(this).parent().parent().parent().addClass('selected');
    countChecked();
});
$('.bulk_action input').on('ifUnchecked', function () {
    checkState = '';
    $(this).parent().parent().parent().removeClass('selected');
    countChecked();
});
$('.bulk_action input#check-all').on('ifChecked', function () {
    checkState = 'all';
    countChecked();
});
$('.bulk_action input#check-all').on('ifUnchecked', function () {
    checkState = 'none';
    countChecked();
});
var $datatable = $('#datatable-checkbox');

  $datatable.dataTable({
      'order': [[1, 'asc']],
      'columnDefs': [
          { orderable: false, targets: [0] }
      ]
  });
  $datatable.on('draw.dt', function () {
      $('checkbox input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
      });
  });
// iCheck
function init_iCheckbox() {
  if ($("input.flat")[0]) {
    $('input.flat').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
  }
}
init_iCheckbox();
function countChecked() {
  if (checkState === 'all') {
      $(".bulk_action input[name='table_records']").iCheck('check');
  }
  if (checkState === 'none') {
      $(".bulk_action input[name='table_records']").iCheck('uncheck');
  }

  var checkCount = $(".bulk_action input[name='table_records']:checked").length;

  if (checkCount) {
      $('.column-title').hide();
      $('.bulk-actions').show();
      $('.action-cnt').html(checkCount + ' Records Selected');
  } else {
      $('.column-title').show();
      $('.bulk-actions').hide();
  }
}
countChecked();

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