<?php

 function string($str)
 {
    // convert the first letter of the text to uppercase
    $str = ucfirst($str);

    // convert the none proper nouns to lowercase
    $str = preg_replace_callback('/\b([a-z]+\S+)\b/',
        function($matches) {
        	return strtolower($matches[0]);
        }, $str);

    // convert the first letter of the sentence to uppercase
    $str = preg_replace_callback('/[.!?] .*?\w/',
        function($matches) {
        	return strtoupper($matches[0]);
        }, $str);

    echo($str);
}

$str = 'hi, weLCome to Ahura companY. good luck.';

string($str);
