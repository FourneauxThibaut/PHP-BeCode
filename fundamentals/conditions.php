<?php
echo "<h1 style='text-align:center; margin-top: 5vh;'> Conditions </h1>";
echo "<div style='width:65%; margin: 0 auto; padding-top: 5vh;'>";

// ex 1
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 1.";
      $room_is_filthy = true;

      if( $room_is_filthy ){
            echo "Yuk, Room is dirty : let's clean it up !";
            // cleanup_room();
            echo "<br>Room is now clean!";
            $room_is_filthy = false;
      } else {
            echo "<br>Nothing to do, room is neat.";
      }
echo "</section>";

// ex 2
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 2.";
      $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

      // When testing, change the index value to navigate to the possible array values
      $room_filthiness = $possible_states[3]; 

      if( $room_filthiness === $possible_states[0] )
      {
            echo "Yuk, Room is Disgusting! Let's clean it up !";
      } 
      else if( $room_filthiness === $possible_states[1] )
      {
            echo "Yuk, Room is dirty : let's clean it up !";
      } 
      else if( $room_filthiness === $possible_states[2] )
      {
            echo "Yuk, this room is a mess : let's clean it up !";
      } 
      else if( $room_filthiness === $possible_states[3] )
      {
            echo "Nothing to do, room is neat.";
      } 
      else 
      {
            echo "This room is so beautiful";
      }
echo "</section>";

// ex 3
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 3.";
      
      $now = new DateTime('now', new DateTimeZone('Europe/Berlin'));
      $hourList = [ "5:00", "9:00", "9:01", "12:00", "12:01", "16:00", "16:01", "21:00", "21:01", "4:59"];
      //               0       1       2       3        4        5        6        7        8        9        

      for ($i = 0; $i < count($hourList); $i++){
            $formatedHours[$i] = DateTime::createFromFormat('H:i', $hourList[$i]);
      }

      // var_dump($formatedHours);

      if ($now > $formatedHours[0] && $now < $formatedHours[1])
      {
            echo 'Good morning !';
      }
      else if ($now > $formatedHours[2] && $now < $formatedHours[3])
      {
            echo 'Good day !';
      }
      else if ($now > $formatedHours[4] && $now < $formatedHours[5])
      {
            echo 'Good afternoon !';
      }
      else if ($now > $formatedHours[6] && $now < $formatedHours[7])
      {
            echo 'Good evening !';
      }
      else if ($now > $formatedHours[8] && $now < $formatedHours[9])
      {
            echo 'Good night !';
      }

echo "</section>";

// ex 4
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 4.";
 
      if (isset($_GET['age'])){
            // Form processing
            $input = $_GET['age'];
            $age = intval($input);
            
            if ( $age < 12 )
            {
                  echo ' Hello kiddo!';
            }
            else if ($age >= 12 AND $age < 18)
            {
                  echo ' Hello Teenager !';
            }
            else if ($age >= 18 AND $age < 115)
            {
                  echo ' Hello Adult !';
            }
            else
            {
                  echo ' Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
            }
      }
      // Form (incomplete)
      echo "<form method='get' action=''>";
            echo "<label for='age'>Please enter your age</label>";
            echo "<input type='number' name='age'>";
            echo "<input type='submit' name='submit' value='Greet me now'>";
      echo "</form>";

echo "</section>";

// ex 5
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 5.";
      if (isset($_GET['age'])){
            // Form processing
            $gender = $_GET['gender'];
            $ageInput = $_GET['age'];
            $age = intval($input);
            
            if ($gender === 'male'){
                  echo "Sorry you don't fit the criteria";
            }
            if ($gender != 'male'){
                  if ($age >= 21 AND $age < 40+1)
                  {
                        echo "welcome to the team !";
                  }
            }
      }
      echo "<form method='get' action=''>";
            echo "<label for='age'>Please enter your age</label>";
            echo "<input type='number' name='age'>";
      
            echo "<label for='gender'>Male";
                  echo "<input type='radio' name='gender' value='male' checked>";
            echo "</label>";

            echo "<label for='gender'>Female";
                  echo "<input type='radio' name='gender' value='female'>";
            echo "</label>";

            echo "<input type='submit' name='submit' value='Greet me now'>";
      echo "</form>";

echo "</section>";

// ex 6
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 6.";

      if (isset($_GET['note'])){
            // Form processing
            $input = $_GET['note'];
            $note = intval($input);
            
            if ($note < 4)
            {
                  echo "This work is really bad. What a dumb kid! ";
            }
            if ($note > 4 AND $note < 10)
            {
                  echo "This is not sufficient. More studying is required.";
            }
            if ($note === 10)
            {
                  echo "barely enough!";
            }
            if ($note > 10 AND $note < 15)
            {
                  echo "Not bad!";
            }
            if ($note > 14 AND $note < 19){
                  echo "Bravo, bravissimo!";
            }
            if ($note >= 19){
                  echo "Too good to be true : confront the cheater!";
            }
      }
      // Form (incomplete)
      echo "<form method='get' action=''>";
            echo "<label for='note'>Please enter the note</label>";
            echo "<input type='number' name='note'>";
            echo "<input type='submit' name='submit' value='Greet me now'>";
      echo "</form>";

      echo "<a href='http://becode/fundamentals/switch-structure.php'>look at the switch structure</a>";

echo "</section>";

// ex 7
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 7.";
      echo "<a href='http://becode/fundamentals/ternary.php'>look at the ternary operation</a>";    
echo "</section>";

// ex 8
echo "<section style='margin-top: 2vh; padding: 2rem; outline: 1px solid gray;'> 8.";
      echo "<a href='http://becode/fundamentals/unicorn.php'>look at the ternary Exercice</a>";    
echo "</section>";

echo "</div>";