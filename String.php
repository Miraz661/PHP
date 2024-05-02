<?php
    $text = "Uttara University";
    $len = strlen($text);
    echo "The length of a string is : $len characters";
    $result = strpos($text,"University");
    echo "<br>";
    echo "The word University starts at position : $result";
    echo "<br>";
    $newString = substr($text,0,6);
    echo "First six characters are: $newString \n";
    $wordCount = str_word_count($text);
    echo "Number of words: $wordCount";
    echo "<br>";
    $newText = str_replace("University","versity",$text);
    echo "New text after replacement : $newText";
    echo "<br>";

    $text1 = "Batch:53";
    $repeatedText = str_repeat($text1,5);
    echo "Repeated text : $repeatedText";
    echo "<br>";

    $text2 = "    Department of CSE     ";
    $trimmedText = trim($text2);
    echo "New text after trimming : $trimmedText"."<br>";

    $text3 = "Reverse STring";
    $reversedText = strrev($text3);
    echo "New text after reversed : $reversedText"."<br>";

    $text4 = "apple,banana,orange";
    $fruitsName = explode(",",$text4);
    foreach($fruitsName as $fn){
        echo "$fn"."<br>";
    }

    // encrypt text
    $text5 = "Secret code";
    $newText = md5($text5);
    echo "MD5 encrypted cdoe is : $newText"."<br>";

?>