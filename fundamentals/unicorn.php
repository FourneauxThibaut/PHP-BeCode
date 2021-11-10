<?php

      $img = (isset($_GET['userType'])) ? ( $_GET['userType'] == "human" ? "human" : ( $_GET['userType'] == "cat" ? "cat" : "unicorn") ) : '' ;
      // var_dump($img)

      /* if(!isset($_GET['userType']))
            $img = $_GET['userType'];
      else
            $img = 'empty';


      if($_POST['userType'] == "human")
            $img = "human";
      else if ($_POST['userType'] == "cat")
            $img = "cat";
      else if ($_POST['userType'] == "unicorn")
            $img = "unicorn"; */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>unicorn</title>
</head>
<body>
      <form action="unicorn.php" method="post">
            <label for="userType">Are you a human, a cat or a unicorn ?</label>
                  <select name="userType">
                        <option value="human">Human</option>
                        <option value="cat">Cat</option>
                        <option value="unicorn">Unicorn</option>
                  </select>
            <input type="submit" value="send">
      </form>
      
      <img src='./<?php echo $img; ?>.gif' alt='<?php echo $img; ?>' />
</body>
</html>