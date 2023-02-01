<form id="quiz-form" action="question.php" method="post" onsubmit="return navigate('next');">
  <div class="align-items">
    <div class="dropdown">
      <button class="btn btn-outline-dark btn-rounded mb-2 mt-0 d-inline form-label" data-mdb-ripple-color="dark" 
      id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
        Category
      </button>
      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item active" href="#" value="geography" >Geographic</a></li>
        <li><a class="dropdown-item" href="#" value="history" >History</a></li>
        <li><a class="dropdown-item" href="#" value="ch-norris" >Chuck Norris</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#" >Separated link</a></li>
      </ul>
      <br>
      <div class="form-outline d-inline">
        <input type="number" for="questionNum" class="form-control" id="questionNum" name="questionNum" min="5" max="40" value="10" />
        <label class="form-label" for="questionNum">How many question choose between (5-40)</label>
        
        <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
        <input type="hidden" id="indexStep" name="indexStep" value="1">
        <input type="hidden" name="button_value" value="Start">
      </div>
      <br>
      <button class="btn btn-outline-dark btn-rounded d-inline" data-mdb-ripple-color="dark" type="submit">
        next
      </button>
    </div>
  </div>
</form>
