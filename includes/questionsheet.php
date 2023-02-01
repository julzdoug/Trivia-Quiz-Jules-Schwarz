<?php
    include "data-collector.php";
    include "db.php";
    
 ?>

<form id='quiz-form' action='question.php' onsubmit="return navigate('next');">
<div class="container mt-sm-5 my-1">
    <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b><?php //echo $question["question_text"]; ?></b></div>
        <br>
        <?php
        $id = 103;
        $question = fetchQuestionByID($id, $dbConnection);
        print_r($question);
        // This code is made to Check and only display the answer of the question data on mySQLAdmin 
        $correct = $question ["correct"];
        //this will get the correct answer and count points for each correct answer 
        for ($a = 1; $a <= 5; $a++) {
        $answerColumnName = "answer-" . $a;
            if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                $answerText = $question[$answerColumnName];
           
            $value = ($correct === $answerColumnName) ? 1 : 0;
//this will return question with a radio button on display them
            echo "<div class='form-check'>
            <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value'>    
            <label class='form-check-label' for='single-choice-0'><b>$answerText</b></label>
            </div>";
            }
        }   
        ?>
        <br>
        <!-- <input type="hidden" id="questionNum" name="questionNum" value="10">
        <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="-1">
        <input type="hidden" id="indexStep" name="indexStep" value="1"> -->
        
        </div>
    <div class="d-flex align-items-center pt-3">
        <div id="prev">
            <button class="btn btn-primary" type='submit' onclick="navigatePrevious();">Previous</button>
          </div>
        <div class="ml-auto mr-sm-5">
            <button class="btn btn-success" type='submit' onclick="navigate('next')">Next</button>
          </div>
    </div>



</div>
</form>