<?php session_start();
include "includes/data-collector.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trivia Quiz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-success stay" style="--bs-bg-opacity: .5;">
    <?php include "includes/header.php" ?>
    <?php
    if (isset($quiz["questionIDSequence"])) {
        $questionCount = $quiz["questionNum"];
        $id = $quiz["questionIDSequence"][$currentQuestionIndex];
        /*  echo "questionCount = $questionCount <br>";
        echo "id = $id <br>"; */
    } else {
        echo "questionIDSequence Not Available<br>";
    }
    $question = fetchQuestionByID($id, $dbConnection);
    ?>
    <div class="container mt-sm-3 my-1">
    <?php include "includes/picturemain.php" ?>
                <form class="col" action="<?php echo $actionUrl; ?>" method="post">
                
                    <div class="container mt-sm-3 my-1">
                        <div class="question ml-sm-3 pl-sm-5 pt-2">
                            <div class="py-2 h5"><b>
                                    <?php echo $question["question_text"]; ?>
                                    <br>
                                    <?php echo ($currentQuestionIndex + 1); ?>of
                                    <?php echo $quiz["questionNum"]; ?>
                               
                            </div>
                       
                            <!--new try -->
                            <input type="hidden" id="questionNum" value="<?php echo $quiz["questionNum"]; ?>" />
                            <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex"
                                value="<?php echo $currentQuestionIndex; ?>" />
                            <input type="hidden" id="indexStep" name="indexStep" value="1">
                            <br>
                        </div>
                        <?php
                        //comment.
                        // This code is made to Check and only display the answer of the question data on mySQLAdmin 
                        $correct = $question["correct"];
                        //this will get the correct answer and count points for each correct answer 
                        for ($a = 1; $a <= 5; $a++) {
                            $answerColumnName = "answer-" . $a;
                            if (isset($question[$answerColumnName]) && $question[$answerColumnName] !== '') {
                                $answerText = $question[$answerColumnName];
                                if ($correct === $answerColumnName)
                                    $value = 1;
                                else
                                    $value = 0;
                                //this will return question with a radio button on display them
                                echo "<div class='form-check'>
                                <input class='form-check-input' type='radio' name='single-choice' id='$answerColumnName' value='$value' required='required'>    
                                <label class='form-check-label' for='$answerColumnName'><b>$answerText</b></label>
                                 </div>
                                 <p id='error'></p>";
                            }
                        }
                        ?>
                        <div class="d-flex align-items-center pt-3">
                            <div id="prev">
                                <button class="btn btn-primary" type='submit'
                                    onclick="navigatePrevious();">Previous</button>
                            </div>
                            <div class="ml-auto mr-sm-5">
                                <button class="btn btn-success" type='submit' onclick="navigate('next')">Next</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        
       <?php include "includes/footer.php" ?>
</body>