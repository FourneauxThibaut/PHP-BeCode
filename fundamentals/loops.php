<?php
echo "<h1 style='text-align:center; margin-top: 5vh;'> Loops </h1>";
echo "<div style='width:65%; margin: 0 auto; padding-top: 5vh;'>";

echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'>";

      $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
      foreach($pronouns as $pronon){
      $pronon === "He/She" ? $verb = "codes" : $verb = "code";
      echo $pronon. " " . $verb . "<br>";
      }

echo "</section>";

echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'>";

      $number=1;
      while ($number<121) {
      echo $number." ";
      $number++;
      }
      echo "<br/>";


      // for ($number=1;$number<121;$number++) echo $number." ";

echo "</section>";