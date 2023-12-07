var $messages = $('.messages-content'),
    d, h, m,
    i = 0;

$(window).load(function() {
  $messages.mCustomScrollbar();
  setTimeout(function() {
    fakeMessage();
  }, 100);
});

function updateScrollbar() {
  
}

function setDate(){
  
}



$('.message-submit').click(function() {
  msg = $('.message-input').val();
  if ($.trim(msg) == '') {
    return false;
  }

  // set date
  d = new Date()
  if (m != d.getMinutes()) {
    m = d.getMinutes();
    $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
  }

  // append message into div
  $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');

  // update scroll bar
  $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
    scrollInertia: 10,
    timeout: 0
  });

  $('<div class="message loading new"><span></span></div>').appendTo($('.mCSB_container'));

  $.ajax({url: "/pychat?chat="+msg
  
  
  ,success: function(result){
      var response = JSON.parse(result);

      response.forEach(myFunction)
      // $('.message.loading').remove();
      // updateScrollbar();
      // $('<div class="message new">' + result + '</div>').appendTo($('.mCSB_container')).addClass('new');
      // setDate();
      // updateScrollbar();
  }
  });
  $('.message-input').val(null);

   // jquery call api here  
  
  // setTimeout(function() {
  //   fakeMessage();
  // }, 1000 + (Math.random() * 20) * 100);

});
function myFunction(item, index, arr) {
  $('.message.loading').remove();
    updateScrollbar();
  if(arr[index]['answer_type'] == 1){
    var ext = arr[index]['answer'].substr(arr[index]['answer'].lastIndexOf('.') + 1);
    if(ext == 'jpg' || ext =='png'){
      console.log(ext);
      $('<div class="message">' + `
      <ul class="list-inline message-img  mb-0">
        <li class="list-inline-item message-img-list me-2 ms-0">
            <div>
                <a class="popup-img d-inline-block m-1" href="/storage/answer_details/`+arr[index]['answer']+`" target="_blank" title="Project 1">
                    <img src="/storage/answer_details/`+arr[index]['answer']+`" alt="" class="rounded border">
                </a>
            </div>
            <div class="message-img-link">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="/storage/answer_details/`+arr[index]['answer']+`" target="_blank" class="fw-medium"></a>
                    </li>
                </ul>
            </div>
        </li>
      </ul>
    ` + '</div>').appendTo($('.mCSB_container')).addClass('next');
    }else if(ext == 'pdf'){
      console.log(ext);
      $('<div class="message">' + `
      <div class="bg-light p-2 mb-2">
        <div class="d-flex flex-wrap align-items-center attached-file">
            <div class="avatar-sm me-3 ms-0 attached-file-avatar">
                <div class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                </div>
            </div>                                                            
            <div class="flex-grow-1 overflow-hidden">
                <div class="text-start">
                    <h5 class="fs-14 text-truncate mb-1">`+arr[index]['answer']+`</h5>
                    <p class="text-muted text-truncate fs-13 mb-0"></p>
                </div>
            </div>
            <div class="ms-4 me-0">
                <div class="d-flex gap-2 fs-20 d-flex align-items-start">
                    <div>
                        <a download="/storage/answer_details/`+arr[index]['answer']+`" href="/storage/answer_details/`+arr[index]['answer']+`" class="fw-medium">
                            <i class="bi bi-download"></i>
                        </a> 
                    </div>
                </div>
            </div>
        </div>                                                        
      </div>
    ` + '</div>').appendTo($('.mCSB_container')).addClass('next');
    }
  }else if(arr[index]['answer_type'] == 2){
    $('<div class="message new">' + arr[index]['answer'] + '</div>').appendTo($('.mCSB_container')).addClass('new');
  }
  setDate();
  updateScrollbar();

}

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    insertMessage();
    return false;
  }
})

var greet = [
  'Hi there, I\'m Pybot',
  'Nice to meet you',
  'How are you?',
  'Not too bad, thanks',
  'What do you do?',
  'That\'s awesome',
  'Codepen is a nice place to stay',
  'I think you\'re a nice person',
  'Why do you think that?',
  'Can you explain?',
  'Anyway I\'ve gotta go now',
  'It was a pleasure chat with you',
  'Time to make a new codepen',
  'Bye',
  ':)'
]

var ask = [
  'What can I do for you?'
]
var image = [
  `
  <ul class="list-inline message-img  mb-0">
    <li class="list-inline-item message-img-list me-2 ms-0">
        <div>
            <a class="popup-img d-inline-block m-1" href="https://themesbrand.com/chatvia/layouts/assets/images/small/img-1.jpg" target="_blank" title="Project 1">
                <img src="https://themesbrand.com/chatvia/layouts/assets/images/small/img-1.jpg" alt="" class="rounded border">
            </a>
        </div>
        <div class="message-img-link">
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a href="https://themesbrand.com/chatvia/layouts/assets/images/small/img-1.jpg" target="_blank" class="fw-medium"></a>
                </li>
            </ul>
        </div>
    </li>
  </ul>
  `
]
var file =[
  `<div class="bg-light p-2 mb-2">
    <div class="d-flex flex-wrap align-items-center attached-file">
        <div class="avatar-sm me-3 ms-0 attached-file-avatar">
            <div class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                <i class="bi bi-file-earmark-arrow-down-fill"></i>
            </div>
        </div>                                                            
        <div class="flex-grow-1 overflow-hidden">
            <div class="text-start">
                <h5 class="fs-14 text-truncate mb-1">admin_v1.0.zip</h5>
                <p class="text-muted text-truncate fs-13 mb-0">12.5 MB</p>
            </div>
        </div>
        <div class="ms-4 me-0">
            <div class="d-flex gap-2 fs-20 d-flex align-items-start">
                <div>
                    <a download="https://themesbrand.com/chatvia/layouts/assets/images/small/admin_v1.0.zip" href="https://themesbrand.com/chatvia/layouts/assets/images/small/admin_v1.0.zip" class="fw-medium">
                        <i class="bi bi-download"></i>
                    </a> 
                </div>
            </div>
        </div>
    </div>                                                        
  </div>`
]

var link = [
  `<a class="message-link" href="https://www.envato.com/atomic-power-plant-engine/">https://www.envato.com/atomic-power-plant-engine/</a>`
]

function fakeMessage() {
  if ($('.message-input').val() != '') {
    return false;
  }
  $('<div class="message loading new"><span></span></div>').appendTo($('.mCSB_container'));
  updateScrollbar();

  setTimeout(function() {
    $('.message.loading').remove();
    $('<div class="message">' + greet[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
    $('<div class="message">' + ask[i] + '</div>').appendTo($('.mCSB_container')).addClass('next');
    // $('<div class="message">' + image[i] + '</div>').appendTo($('.mCSB_container')).addClass('next');
    // $('<div class="message">' + file[i] + '</div>').appendTo($('.mCSB_container')).addClass('next');
    // $('<div class="message">' + link[i] + '</div>').appendTo($('.mCSB_container')).addClass('next');
    setDate();
    updateScrollbar();
    i++;
  }, 1000 + (Math.random() * 20) * 100);

}

$("#chat-circle").click(function() {
  $("#chat-circle").toggle('scale');
  $(".chat").toggle('scale');
  $(".chat").toggleClass("d-flex flex-column justify-content-between");
})

$(".chat-box-toggle").click(function() {
  $("#chat-circle").toggle('scale');
  $(".chat").toggle('scale');
  $(".chat").removeClass("d-flex flex-column justify-content-between");
})


document.addEventListener('keypress', function(event) {
  const submitButton = document.querySelector('input[type="submit"], button[type="submit"]');
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent default form submission
    submitButton.click(); // Trigger the click event of the submit button
  }
});
