<div>
<div id="chat-circle" class="btn btn-raised">
    <img src="{{ asset('admin-assets/media/icon.png') }}" class="icon" alt="logo">
    <div id="chat-overlay"></div>
	</div>
  <div class="chat">
    <div class="chat-title">
      <div>
        <h1>PyBot</h1>
        <h2>ACTIVE</h2>
      </div>
      <figure class="avatar">
        <img src="{{ asset('admin-assets/media/avatar/5.jpg') }}" />
      </figure>
      <!-- <select wire:model="chat_type" wire:change="update_chat_type" style="background-color:inherit;border-color:inherit; color:white;">
        <option value="1">Pybot</option>
        <option value="2">Chat</option>
      </select> -->
      <span class="chat-box-toggle"><i class="bi bi-chevron-down"></i></span>
    </div>
    <div class="messages">
      <div class="messages-content"></div>
    </div>
    <div class="message-box">
      <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
      <button type="submit" class="message-submit">Send</button>
    </div>
  </div>
</div>
