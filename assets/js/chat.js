var running = false;
function send() {
  if (running == true) return;
  var msg = document.getElementById("message").value;
  if (msg == "") return;
  running = true;
  addMsg(msg);
  //DELEAY MESSAGE RESPOSE Echo
  window.setTimeout(addResponseMsg, 1000, msg);
}
function addMsg(msg) {
  var div = document.createElement("div");
  div.innerHTML =
    "<span style='flex-grow:1'></span><div class='chat-message-sent'>" +
    msg +
    "</div>";
  div.className = "chat-message-div";
  document.getElementById("message-box").appendChild(div);
  //SEND MESSAGE TO API
  document.getElementById("message").value = "";
  document.getElementById("message-box").scrollTop = document.getElementById(
    "message-box"
  ).scrollHeight;
}
function addResponseMsg(msg) {
  var div = document.createElement("div");
  div.innerHTML = "<div class='chat-message-received'>" + msg + "</div>";
  div.className = "chat-message-div";
  document.getElementById("message-box").appendChild(div);
  document.getElementById("message-box").scrollTop = document.getElementById(
    "message-box"
  ).scrollHeight;
  running = false;
}
document.getElementById("message").addEventListener("keyup", function (event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    send();
  }
});
 document.getElementById("chatbot_toggle").onclick = function () {
    if (document.getElementById("chatbot").classList.contains("collapsed")) {
      document.getElementById("chatbot").classList.remove("collapsed")
      document.getElementById("chatbot_toggle").children[0].style.display = "none"
      document.getElementById("chatbot_toggle").children[1].style.display = ""
      setTimeout(addResponseMsg,1000,"Hi")
    }
    else {
      document.getElementById("chatbot").classList.add("collapsed")
      document.getElementById("chatbot_toggle").children[0].style.display = ""
      document.getElementById("chatbot_toggle").children[1].style.display = "none"
    }
  }


/*------------------------------------------------------------------*/

var $messages = $('.chat-area'),
d, h, m,
i = 0;

$(window).load(function() {
$messages.mCustomScrollbar();
setTimeout(function() {
  fakeMessage();
}, 100);
});

function updateScrollbar() {
$messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
  scrollInertia: 10,
  timeout: 0
});
}

function setDate(){
d = new Date()
if (m != d.getMinutes()) {
  m = d.getMinutes();
  $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
}
}

function insertMessage() {
msg = $('.message-input').val();
if ($.trim(msg) == '') {
  return false;
}
$('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
setDate();
$('.message-input').val(null);
updateScrollbar();
setTimeout(function() {
  fakeMessage();
}, 1000 + (Math.random() * 20) * 100);
}

$('.message-submit').click(function() {
insertMessage();
});

$(window).on('keydown', function(e) {
if (e.which == 13) {
  insertMessage();
  return false;
}
})

var Fake = [
'Hi there, I\'m Fabio and you?',
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
if ($('.input-message').val() != '') {
  return false;
}
$('<div class="message loading new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure><span></span></div>').appendTo($('.mCSB_container'));
updateScrollbar();

setTimeout(function() {
  $('.message.loading').remove();
  $('<div class="message new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure>' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
  setDate();
  updateScrollbar();
  i++;
}, 1000 + (Math.random() * 20) * 100);

}