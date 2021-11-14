<?php
echo "<h1 style='text-align:center; margin-top: 5vh;'> Arrays </h1>";
echo "<div style='width:65%; margin: 0 auto; padding-top: 5vh;'>";

echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'>";

$me = array(
      'firstname' => 'Thibaut',
      'lastname' => 'Founeaux',
      'city' => 'Namur',
      'age' => 25,
      'season' => 'autumn',
      'like_soccer' => false,
      'favourite_movies' => array('Back to the future', 'Matrix', 'The lord of the ring'),
);

$me['hobbies'] = array ('informatics', 'electronics', 'video games', 'roleplay');

$mother = array(
      'firstname' => 'Delphine',
      'lastname' => 'Bollinne',
      'city' => 'Liege',
      'age' => 45,
      'season' => 'unknow',
      'like_soccer' => false,
      'favourite_movies' => array('Back to the future', 'Matrix', 'The lord of the ring'),
      'hobbies' => array ('watching TV', 'cooking', 'animals')
);

$me['mother'] = $mother;

// var_dump($me);
$count_mother_hobbies = count($mother['hobbies']);
$count_my_hobbies = count($me['hobbies']);
$count_total_hobbies = $count_mother_hobbies + $count_my_hobbies;

echo '<pre>';
      print_r($me);
      echo "<p> ma maman à $count_mother_hobbies hobbies et j'en ai $count_my_hobbies<p>";
      echo "<p> ensemble nous en avons $count_total_hobbies<p>";
echo '</pre>';


$me['hobbies'][] = "taxydermy";
$me['lastname'] = "Durand";

echo "</section>";