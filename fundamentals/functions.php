<!-- took from aline -->


<?php
// #1 Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
mb_internal_encoding( "UTF-8" );
function mb_ucfirst( $string )
{
    return mb_strtoupper(mb_substr( $string, 0, 1 )).mb_substr( $string, 1 );
}
echo mb_ucfirst("émilie <br>");
// https://openclassrooms.com/forum/sujet/ucfirst-et-quot-eau-quot-68181
// https://www.php.net/manual/fr/function.mb-internal-encoding.php
// https://www.php.net/manual/fr/function.mb-strtoupper.php
// https://www.php.net/manual/fr/function.mb-substr.php

// #2 Use the native function allowing you to display the current year.
echo date(Y) . "<br>";

// #3 Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
echo date("d/m/Y H:i:s")."<br>";

// #4 Crée a "Sum" function that takes 2 numbers and returns their sum.
// #5 TODO Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."

// function sum(int $n, int $x){
// function sum($n,  $x){
//     echo( gettype($n));
//     if (gettype($n)  !== "number"  OR gettype($x) !== "number") {
//             return "Error: argument is the not a number.";
//     }
//     return ($n + $x);
// }
// echo sum(40+2);

// #6 Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
function acronym($string){
      $str_acronym = '';
      for($i=0; $i < strlen($string); $i++){
            $str_arr = explode(" ", $string);
            $str_acronym .=$str_arr[$i][0];
      }
      echo $str_acronym;
      return strtoupper($str_acronym);
}
echo acronym("in code we trust"); 
echo "<br>";

// #7 Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
function replace_str($string){
    $pattern = "/ae/i";
    return preg_replace($pattern, "æ", $string);
}
echo replace_str("chaenichthys") . "<br>";

// #8 Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca
function replace_str2($string){
    $pattern = "/æ/i";
    return preg_replace($pattern, "ae", $string);
}
echo replace_str2("microsphæra") . "<br>";

// #9 Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :

function feedback(string $str1, string $str2){
    $result = '<div class="' . $str2 . '"> ' . ucfirst($str2) . " : " . ucfirst($str1) . "</div>";
    return $result;
}
echo feedback("Incorrect email address", "info");
echo "<br>";

// TODO #10 Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
// function genWord(){
//     $word1 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0,4);
//     $word2 = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),7,15);
//     return "Word 1 = " . $word1 . "<br>Word 2  = " . $word2;
// }
// echo genWord();
// https://stackoverflow.com/questions/3329903/how-can-i-generate-random-words-in-php/45150386

// #11 De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!") . "<br>";

// #11 In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :

function calc_vol($rayon, $height){
    $vol = $rayon * $rayon * 3.14 * $height * (1/3);
    return "The volume of a cone which ray is " . $rayon . " and height is " . $height  . " = " . $vol . "cm<sup>3</sup><br>";
}
echo calc_vol(5, 2)
?>