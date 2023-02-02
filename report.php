<?php 
include "includes/data-collector.php";
?>
<?php
$totalPoints = 0;

foreach ($_SESSION as $name => $value) {
    if (str_contains($name, 'question-')) {
    if (isset($value["single-choice"])){
        $points = intval($value["single-choice"]);
            $totalPoints = $totalPoints + $points;
    }
    }
    }
$maxPoints = $_SESSION["quiz"]["questionNum"];

?>
