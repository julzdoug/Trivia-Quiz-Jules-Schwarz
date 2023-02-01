
<form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
  <div class="align-items">
      <label for="quiz-form" class="form-label">Quiz choose topic</label>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected>Open this select menu</option>
      <option value="ch-norris">Chuck Norris</option>
      <option value="Geography">Geography</option>
      <option value="History">History</option>
</select>
      <br>
      <div class="form-outline d-inline">
       
        <label class="form-label" for="questionNum">How many question choose between (5-40)</label>
        <input type="number" for="questionNum" class="form-control" id="questionNum" name="questionNum" min="5" max="40" value="10" />
      </div>
      <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
        <input type="hidden" id="indexStep" name="indexStep" value="1">
        
      
      <br>
      <button class="btn btn-outline-dark btn-rounded d-inline" data-mdb-ripple-color="dark" type="submit">
        next
      </button>
    </div>
  </div>
</form>
