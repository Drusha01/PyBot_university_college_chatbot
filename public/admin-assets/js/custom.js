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




let suggestions = [
    "Dashboard",
    "Colleges",
    "Departments",
    "User Management",
    "Chatbox",
    "Settings",
    "Model",
    "College Student Council (CSC)",
    "Admin Profile",
    "Admin Notification",
    "Notifications",
    "Profiles",
    "Models",
    "Intents Creation",
    "Training",
    "Deployment",
];
// getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;
// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}
function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}
function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}
