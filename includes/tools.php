<?php

function prettyPrint($value, $label = '')
{
    echo "<pre>";
    if ($label) {
        echo "$label\n";
    }
    print_r($value);
    echo "</pre>";
}

?>