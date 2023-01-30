<div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b><?php echo $question["question_text"]; ?></b></div>
        <br>
        <br>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3 m-3" id="options">
            <label class="options"><b><?php echo $question['answer-1']; ?></b>
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options"><b><?php echo $question['answer-2']; ?></b>
                
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options"><b><?php echo $question['answer-2']; ?></b>
                
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options"><b><?php echo $question['answer-4']; ?></b>
                
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="options"><b><?php echo $question['answer-5']; ?></b>
                
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="d-flex align-items-center pt-3">
        <div id="prev">
            <button class="btn btn-primary">Previous</button>
        </div>
        <div class="ml-auto mr-sm-5">
            <button class="btn btn-success">Next</button>
        </div>
    </div>
</div>