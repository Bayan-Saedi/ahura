<?php
function string($str)
{
	// convert the first letter of the text to uppercase
	$str = ucfirst($str);

	// convert the none proper nouns to lowercase
    $str = preg_replace_callback('/\b([a-z]+\S+)\b/',
        create_function('$matches', 'return strtolower($matches[0]);'), $str);

    // convert the first letter of the sentence to uppercase
    $str = preg_replace_callback('/[.!?] .*?\w/',
        create_function('$matches', 'return strtoupper($matches[0]);'), $str);

    var_dump($str);
}