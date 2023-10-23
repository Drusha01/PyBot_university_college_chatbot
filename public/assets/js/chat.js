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

$(".message-input").keyup(function(event) {
  if (event.keyCode === 13) {
      $('.message-submit').click();
  }
});

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

  $.ajax({url: "/pychat?chat=?"+msg
  
  
  ,success: function(result){
      var response = JSON.parse(result);
      
      $('.message.loading').remove();
      updateScrollbar();
      $('<div class="message new">' + response.answer + '</div>').appendTo($('.mCSB_container')).addClass('new');
      setDate();
      updateScrollbar();
  }
  });
  $('.message-input').val(null);

   // jquery call api here  
  
  // setTimeout(function() {
  //   fakeMessage();
  // }, 1000 + (Math.random() * 20) * 100);

});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    insertMessage();
    return false;
  }
})

var Fake = [
  'Hi there, I\'m Pybot and you?',
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

function fakeMessage() {
  if ($('.message-input').val() != '') {
    return false;
  }
  $('<div class="message loading new"><span></span></div>').appendTo($('.mCSB_container'));
  updateScrollbar();

  setTimeout(function() {
    $('.message.loading').remove();
    $('<div class="message new">' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
    setDate();
    updateScrollbar();
    i++;
  }, 1000 + (Math.random() * 20) * 100);

}

$("#chat-circle").click(function() {
  $("#chat-circle").toggle('scale');
  $(".chat").toggle('scale');
})

$(".chat-box-toggle").click(function() {
  $("#chat-circle").toggle('scale');
  $(".chat").toggle('scale');
})