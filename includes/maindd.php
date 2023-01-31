<script src="js/validation.js"></script>


<form id="quiz-form" action="question.php" method="post">
<div class="align-items">
<div class="dropdown">
  <button class="btn btn-outline-dark btn-rounded mb-2 mt-0 d-inline" data-mdb-ripple-color="dark" type="submit" 
  id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    Category
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#" value="geography" >Geographic</a></li>
    <li><a class="dropdown-item" href="#" value="history" >History</a></li>
    <li><a class="dropdown-item" href="#" value="ch-Norris" >Chuck Norris</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#" >Separated link</a></li>
  </ul>
  <br>
  <div class="form-outline d-inline">
  <input class="col-xs-2" type="number" id="questionNum" name="questionNum" class="form-control" min="5" max="40" value="10" />
  <label class="form-label" for="typeNumber">How many question choose between (5-40)</label>
  <input type="hidden" id="questionNum" name="questionNum" value="10">
<input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
<input type="hidden" id="indexStep" name="indexStep" value="1">
</div>
<br>
<button class="btn btn-outline-dark btn-rounded d-inline" data-mdb-ripple-color="dark" type="submit" 
  type data-bs-toggle="dropdown" aria-expanded="false";>
    next
  </button>
</div>
</form>