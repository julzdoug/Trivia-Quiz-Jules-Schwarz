<?php

include "includes/db.php";
include "includes/tools.php";
//Ich starte die Session um die eingabe zu speichern und zugreiffen zu können

//inlcude the tools for pretty print to specific the data and labe

//the command to start the quiz

if (isset($_SESSION["quiz"])) {
    $quiz = $_SESSION["quiz"];
} else {
    $quiz = null;
}

prettyPrint($_POST, '$_POST =');

if (isset($_POST["lastQuestionIndex"])) {
    $lastQuestionIndex = intval($_POST["lastQuestionIndex"]);
} else {
    $lastQuestionIndex = -1;
}


$scriptName = $_SERVER["SCRIPT_NAME"];

if (str_contains($scriptName, 'index')) {
    /* session_unset(); */

    $quiz = null;
} 
else if (str_contains($scriptName, 'questions')) {
    if ($lastQuestionIndex === -1) {
        $question = intval ($_POST['questionNum']);

        $questionIDSequence = fetchquestionIDSequence(
            $_POST["topic"],
            $questionNum,
            $bdConnection
        );
        $questionNum = min(count($questionIDSequence), $questionNum);

        $quiz = array(
            "topic" => $_POST["topic"],
            "questionNum" => $questionNum,
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIDSequence" => array(),

        );
    }
    prettyPrint($quiz, '$quiz =');


    $indexStep = 1;
    prettyPrint($indexStep, '$indexStep =');
    if (isset($_POST["indexStep"])) {
        $indexStep = intval($_POST["indexStep"]);

    }
    $currentQuestionIndex = $lastQuestionIndex + $indexStep;
    prettyPrint($lastQuestionIndex, '$lastQuestionIndex =');
}
    if(isset($quiz) && $currentQuestionIndex >= 0) {
        $_SESSION["quiz"] = $quiz;
        $_SESSION["quiz"]["currentQuestionIndex"] = $currentQuestionIndex;
        $_SESSION["quiz"]["lastQuestionIndex"] = $lastQuestionIndex;
    }
    if ($lastQuestionIndex >= 0) {
        $questionName = "question-" . $lastQuestionIndex;
        $_SESSION[$questionName] = $_POST;
    }
prettyPrint($_SESSION, '$_SESSION =');

?>