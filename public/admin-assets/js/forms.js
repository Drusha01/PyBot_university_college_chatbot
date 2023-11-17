

/*
    <Add Q AND A modal>
 */
    var questionCounter = 0;
    var responseCounter = 0;
    
    $('#add_data').on('click', function() {
        questionCounter++;
        responseCounter++;
    
        var newQuestionId = "question_" + questionCounter;
        var newResponseId = "response_" + responseCounter;
    
        var newQuestion = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newQuestionId}" name="addquestion[]"  placeholder="Type Question"></textarea>
                </div>
            </div>
        `;
    
        var newResponse = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newResponseId}" name="addresponse[]"  placeholder="Type desire response.."></textarea>
                </div>
            </div>
        `;
    
        $('#add-container').append(newQuestion);
        $('#add-container2').append(newResponse);
    });
    
    $('#remove_data').on('click', function() {
        // Remove the last added question and response fields
        $('#add-container .new-entry:last').remove();
        $('#add-container2 .new-entry:last').remove();
    });
    
    // Similarly, for the "Edit" section
    $('#edit_data').on('click', function() {
        questionCounter++;
        responseCounter++;
    
        var newQuestionId = "question_" + questionCounter;
        var newResponseId = "response_" + responseCounter;
    
        var newQuestion = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newQuestionId}" name="editquestion[]"  placeholder="Type Question"></textarea>
                </div>
            </div>
        `;
    
        var newResponse = `
            <div class="new-entry">
                <div class "form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>   
                    <textarea class="form-control form-control-sm" rows="3" id="${newResponseId}" name="editresponse[]"  placeholder="Type desire response.."></textarea>
                </div>
            </div>
        `;
    
        $('#edit-container').append(newQuestion);
        $('#edit-container2').append(newResponse);
    });
    
    $('#editremove_data').on('click', function() {
        // Remove the last added question and response fields in the "Edit" section
        $('#edit-container .new-entry:last').remove();
        $('#edit-container2 .new-entry:last').remove();
    });
    
    // Handle the removal of a new entry when the "Remove" button is clicked
    $(document).on('click', '.remove-entry', function() {
        $(this).closest('.new-entry').remove();
    });
    
    /*
        </Add Q AND A modal>
     */
    /*
        <CSC modal>
     */
    var cscQuestionCounter = 0;
    var cscResponseCounter = 0;
    
    $('#csc_data').on('click', function() {
        cscQuestionCounter++;
        cscResponseCounter++;
    
        var newQuestionId = "csc_question_" + cscQuestionCounter;
        var newResponseId = "csc_response_" + cscResponseCounter;
    
        var newQuestion = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newQuestionId}" name="cscquestion[]"  placeholder="Type Question"></textarea>
                </div>
            </div>
        `;
    
        var newResponse = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newResponseId}" name="cscresponse[]"  placeholder="Type desire response.."></textarea>
                </div>
            </div>
        `;
    
        $('#tbd-container').append(newQuestion);
        $('#tbd-container2').append(newResponse);
    });
    
    $('#removecsc_data').on('click', function() {
        // Remove the last added question and response fields
        $('#tbd-container .new-entry:last').remove();
        $('#tbd-container2 .new-entry:last').remove();
    });
    
    // Similarly, for the "Edit" section
    var editCscQuestionCounter = 0;
    var editCscResponseCounter = 0;
    
    $('#editcsc_data').on('click', function() {
        editCscQuestionCounter++;
        editCscResponseCounter++;
    
        var newQuestionId = "editcsc_question_" + editCscQuestionCounter;
        var newResponseId = "editcsc_response_" + editCscResponseCounter;
    
        var newQuestion = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newQuestionId}" name="editcscquestion[]" onkeyup="this.value = this value.replace(/\b\w/g, function(l){ return l.toUpperCase(); })" placeholder="Type Question"></textarea>
                </div>
            </div>
        `;
    
        var newResponse = `
            <div class="new-entry">
                <div class="form-group">
                    <button class="btn btn-danger btn-rounded btn-icon remove-entry float-right" type="button"><i class="bi bi-x-lg"></i></button>
                    <textarea class="form-control form-control-sm" rows="3" id="${newResponseId}" name="editcscresponse[]"  placeholder="Type desire response.."></textarea>
                </div>
            </div>
        `;
    
        $('#edittbd-container').append(newQuestion);
        $('#edittbd-container2').append(newResponse);
    });
    
    $('#editremovecsc_data').on('click', function() {
        // Remove the last added question and response fields in the "Edit" section
        $('#edittbd-container .new-entry:last').remove();
        $('#edittbd-container2 .new-entry:last').remove();
    });
    
    // Handle the removal of a new entry when the "Remove" button is clicked
    $(document).on('click', '.remove-entry', function() {
        $(this).closest('.new-entry').remove();
    });
    
    /*
        </CSC modal>
     */
