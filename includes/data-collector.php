
<?php


//Ich starte die Session um die eingabe zu speichern und zugreiffen zu können

//inlcude the tools for pretty print to specific the data and labe

//the command to start the quiz

if (isset($_SESSION["quiz"])) {
    $quiz = $_SESSION["quiz"];
} else {
    $quiz = null;
}


if (isset($_POST["lastQuestionIndex"])) {
    $lastQuestionIndex = intval($_POST["lastQuestionIndex"]);
}else {
$lastQuestionIndex = -1;
}

$scriptName = $_SERVER["SCRIPT_NAME"];
echo "scriptName = ". $scriptName . "<br>";

if (str_contains($scriptName, 'index')){
    session_unset();

    $quiz = null;
}else if (str_contains($scriptName, 'questions')){
    if ($lastQuestionIndex === -1) {
        $quiz = array(
            "topic" => $_POST["topic"],
            "questionNum" => $_POST["questionNum"],
            "currentQuestionIndex" => -1,
            "questionIDSequence" => array(),

        );
    }
   


    $indexStep = 1;

    if (isset($_POST["indexStep"])) {
        $indexStep = intval($_POST["indexStep"]);

    }
    $currentQuestionIndex = $lastQuestionIndex + $indexStep;

}

    ?>