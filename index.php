<?php 
      echo "<h1 style='text-align:center; margin-top: 5vh;'>Bienvenue dans la formation BeCode dédié à PHP </h1><br><br>";

      $version_Php = PHP_VERSION;
      $nom_OS = PHP_OS;
      $ip = $_SERVER['SERVER_ADDR'];
      $nom_fichier = __FILE__;

      echo "<div style='width:65%; margin: 0 auto;'>";
      echo "La version de PHP du serveur est $version_Php. <br>";
      echo "La nom de l'OS du serveur est $nom_OS. <br>";
      echo "L'adresse IP du serveur est $ip. <br>";
      echo "Le nom de ce fichier est $nom_fichier. <br>";
      echo "</div>";
      
?>
<nav style='width:65%; margin: 5vh auto; border-top: 1px solid black; padding-top: 5vh;'>
      <h2>Navigation</h2>
      <ul style="list-style: none;">
            <li style="margin-top: 1vh;">
                  <h3>Fundamentals</h3>
                  <ul style="list-style: none;">
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/variables">Variables</a>
                        </li>
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/conditions">Conditions</a>
                        </li>
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/excuse">Fake Excuse Notes Generator</a>
                        </li>
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/arrays">Arrays</a>
                        </li>
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/loops">Loops</a>
                        </li>
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/functions">Functions</a>
                        </li>              
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/form">Form</a>
                        </li>                     
                        <li style="margin-top: 1vh;">
                              <a style="color: #4C3B4D; text-decoration: none;" href="http://becode/fundamentals/cookies">Cookies</a>
                        </li>                     
                  </ul>
            </li>
            <li style="margin-top: 1vh;">
                  <h3>SQL</h3>
                  <ul style="list-style: none;">
                        <li style="margin-top: 1vh;">pending..</li>                  
                  </ul>
            </li>
            <li style="margin-top: 1vh;">
                  <h3>POO</h3>
                  <ul style="list-style: none;">
                        <li style="margin-top: 1vh;">pending..</li>                  
                  </ul>
            </li>
            <li style="margin-top: 1vh;">
                  <h3>Challenge</h3>
                  <ul style="list-style: none;">
                        <li style="margin-top: 1vh;">pending..</li>                  
                  </ul>
            </li>
      </ul>
</nav>