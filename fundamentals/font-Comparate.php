<?php
      if ( !empty($_GET["font-1"]) && !empty($_GET["font-2"]) ) {
            $font1 = $_GET['font-1'];
            $font2 = $_GET['font-2'];
            $from1 = $_GET['from-1'];
            $from2 = $_GET['from-2'];
      } else {   
            header('Location: ./font.php');
            exit();
      }

      // google api key
      $google_api_key = "AIzaSyD17BTh-2wS7cY6Rzh_AWXdwECIox8MT5M";

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/webfonts/v1/webfonts?key=" . $google_api_key);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/json"
      ));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
      $fonts_list = json_decode(curl_exec($ch), true);
      $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      if($http_code != 200) 
      exit('Error : Failed to get Google Fonts list');

      // echo out list of fonts
      echo '<pre>';print_r($fonts_list);echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="all" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="This is an example of a meta description. This will often show up in search posts.">
      <link rel="shortcut icon" href="https://img.icons8.com/color-glass/48/000000/alpha.png" type="image/x-icon">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=<?php $font1?>&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css2?family=<?php $font2?>&display=swap" rel="stylesheet">
      <title>Alpha</title>
</head>
<body>
      <section class="ml-40">
            
      </section>
</body>
</html>

