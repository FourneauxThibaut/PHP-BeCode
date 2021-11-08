<?php
echo "<h1 style='text-align:center; margin-top: 5vh;'> Variables </h1>";
echo "<div style='width:65%; margin: 0 auto; padding-top: 5vh;'>";

// ex 1
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 1.";

      $firstName = 'Thibaut';
      echo "<p> Hi! My name is $firstName. </p>";

echo "</section>";

// ex 2
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 2.";

      $age = '25';
      echo "<p> I am $age years old </p>";

echo "</section>";

// ex 3
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 3.";

      $eyesColor = 'brown';
      echo "<p> My eyes are $eyesColor </p>";

echo "</section>";

// ex 4
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 4.";

      $familly = ['Elodie', 'Jean', 'Regine', 'Gnar', 'Kali', 'Delphine'];
      echo "<p> The first member of my familly is <span style='text-decoration: underline; color: darkorange;'>$familly[0]</span> </p>";

echo "</section>";

// ex 5
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 5.";

      $hungry = false;
      if ($hungry)
            echo "<p> I am hungry! </p>";
      else
            echo "<p> I am not hungry </p>";

echo "</section>";


echo "</div>";