<div>
<!-- Bootstrap Bundle with Popper -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- FAQ/forums content -->
    <section id="faq-forums" class="bg-light py-5" style="margin-top: 5rem;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
              <!-- FAQ Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                  How do I apply for admission to WMSU?
                </button>

                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    To apply for admission to WMSU, please visit our <a href="#">Admissions page</a> and follow the instructions provided.
                  </div>
                </div>
              </div>

              <!-- FAQ Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                  What programs and courses does WMSU offer?
                </button>

                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    WMSU offers a wide range of programs and courses. You can find detailed information about our academic programs on our <a href="#">Academics page</a>.
                  </div>
                </div>
              </div>

              <!-- Add more FAQ items here -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border p-0">
              <div class="card-header bg-success">
                  <h2 class="text-start">Chat With Us</h2>
              </div>
              <div class="card-body overflow-auto chat-box-six border-bottom" style="max-height:400px" id="chat_content"  wire:poll.2000ms="update_data()">
                  <div class="">
                  <!-- Student's message -->
                    <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                        <div>
                            <strong class="ml-3 mb-2">Admin</strong> 
                            <div class="chat-comment d-table max-w-p70 bg-light ml-3 mb-15 px-15 py-10 rounded10 bter-0">
                                <p class="mb-0 p-2 text-wrap">Hi, Start your conversation with admin</p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="rt-bx mb-30 d-flex align-items-start w-p100">
                        <div>
                            <strong class="mr-3 mb-2 text-right">Me</strong> 
                            <div class="chat-comment d-table max-w-p70 bg-primary mr-3 mb-15 px-15 py-10 rounded10 bter-0" >
                                <p class="mb-0 p-2 " >Hi</p>
                            </div>

                        </div>
                    </div>
                    <div class="lt-bx mb-30 d-flex align-items-start w-p100">
                        <div>
                            <strong class="ml-3 mb-2">Admin</strong> 
                            <div class="chat-comment d-table max-w-p70 bg-light ml-3 mb-15 px-15 py-10 rounded10 bter-0">
                                <p class="mb-0 p-2 text-wrap">What can i help you with?</p>
                            </div>
                            
                        </div>
                    </div>
                    
                  
                  </div>
                  
              </div>
              <div class="input-group">
                  <input type="text" class="form-control border-0" wire:model="chat_content_details" placeholder="Type your message...">
                  <div class="input-group-append">
                      <button class="btn btn-success m-0" style="border-radius: 0px 0px 3px 0px !important;" wire:click="send_message()"> Send </button>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </section>
</div>
