<?php
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


      var_dump(gettype($fonts_list));

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="robots" content="all" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
      <link rel="shortcut icon" href="https://img.icons8.com/color-glass/48/000000/alpha.png" type="image/x-icon">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../assets/style.css">
      <title>Alpha</title>
      <!-- font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyD17BTh-2wS7cY6Rzh_AWXdwECIox8MT5M" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&text=Almost%20before%20we%20knew%20it,%20we%20had%20left%20the%20ground.&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&text=Almost%20before%20we%20knew%20it,%20we%20had%20left%20the%20ground&display=swap" rel="stylesheet"> 
</head>
<body>     
      <section class="ml-40">
      <section class="container m-auto mt-8 h-60 py-8 joinText" id="textContainer">
            <div class="relative mb-56 text-7xl font-semibold">
                  <div class="absolute ml-48 inset-y-1/2 text-green-500" id="greenText" style="font-family: 'Poppins', sans-serif;">
                        <p>
                              Almost before we knew it,
                        </p>
                        <p class="mt-4">
                              we had left the ground.
                        </p>
                  </div>
                  <div class="absolute ml-48 inset-y-1/2 text-gray-900" id="grayText" style="font-family: 'Montserrat', sans-serif;">
                        <p>
                              Almost before we knew it,
                        </p>
                        <p class="mt-4">
                              we had left the ground.
                        </p>
                  </div>
            </div>
      </section> 
      <section class="container m-auto mt-4">
            <div class="flex ml-48">
                  <button onclick="setFirst(this.id)" id="fontMontserrat" class="group relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 displayFirst ml-14">
                        Montserrat
                  </button>
                  <button onclick="setFirst(this.id)" id="fontPoppins" class="group relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400 displayNext ml-14">
                        Poppins
                  </button>
            </div>
      </section>
      <section class="flex flex-wrap w-11/12 m-auto">
            <section class="text-gray-600 body-font mt-8">
                  <div class=" m-auto">
                        <div class="container px-5 mx-auto flex flex-wrap">
                              <div class="flex flex-wrap items-center justify-around w-full">
                                    <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                                          <div class="flex relative pb-12">
                                                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                                      <div class="h-full w-1 bg-gray-200 pointer-events-none">
                                                </div>
                                          </div>
                                          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                      <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                </svg>
                                          </div>
                                          <div class="flex-grow pl-4">
                                                <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 1</h2>
                                                <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                                          </div>
                                    </div>
                                    <div class="flex relative pb-12">
                                          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                                          </div>
                                          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                      <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                      <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                          </div>
                                          <div class="flex-grow pl-4">
                                                <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">STEP 2</h2>
                                                <p class="leading-relaxed">VHS cornhole pop-up, try-hard 8-bit iceland helvetica. Kinfolk bespoke try-hard cliche palo santo offal.</p>
                                          </div>
                                    </div>
                                    <div class="flex relative">
                                          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-500 inline-flex items-center justify-center text-white relative z-10">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                                      <path d="M22 4L12 14.01l-3-3"></path>
                                                </svg>
                                          </div>
                                          <div class="flex-grow pl-4">
                                                <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">FINISH</h2>
                                                <p class="leading-relaxed">Pitchfork ugh tattooed scenester echo park gastropub whatever cold-pressed retro.</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            <section class="text-gray-600 body-font -ml-14">
                  <div class="min-h-full flex justify-start py-10 px-8 sm:px-6 lg:px-8">
                        <div class="max-w-md w-full space-y-8">
                              <div>
                                    <img class="mx-auto h-16 w-auto" src="https://img.icons8.com/color-glass/48/000000/alpha.png" alt="Workflow">
                                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                          Compare 2 Font now!
                                    </h2>
                              </div>
                              <form action="./font-Comparate" method="get" class="mt-8 space-y-6">
                                    <input type="hidden" name="remember" value="true">
                                    <div class="rounded-md">
                                          <div class="flex flex-wrap -m-2">
                                                <div class="p-2 w-1/2">
                                                      <div class="relative">
                                                            <label for="font-1" class="leading-7 text-sm text-gray-600">Font 1</label>
                                                            <input type="text" id="font-1" name="font-1" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            <select name="front-1" id="front-1" class="w-full h-full py-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                                  <?php foreach($fonts_list as $font) { ?>
                                                                        var_dump($font)
                                                                        <option value="<?php $font->family?>"><?php $font->family?></option>
                                                                  <?php } ?>
                                                            </select>
                                                      </div>
                                                </div>
                                                <div class="p-2 w-1/2">
                                                      <div class="relative">
                                                            <label for="from-1" class="leading-7 text-sm text-gray-600">From</label>
                                                            <select name="from-1" id="from-1" class="w-full h-full py-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                                  <option value="google">Google</option>
                                                                  <option value="??" disabled>??</option>
                                                            </select>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="flex flex-wrap -m-2">
                                                <div class="p-2 w-1/2">
                                                      <div class="relative">
                                                            <label for="font-2" class="leading-7 text-sm text-gray-600">Font 2</label>
                                                            <input type="text" id="font-2" name="font-2" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                      </div>
                                                </div>
                                                <div class="p-2 w-1/2">
                                                      <div class="relative">
                                                            <label for="from-2" class="leading-7 text-sm text-gray-600">From</label>
                                                            <select name="from-2" id="from-2" class="w-full h-full py-2 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                                  <option value="google">Google</option>
                                                                  <option value="??" disabled>??</option>
                                                            </select>
                                                      </div>
                                                </div>
                                          </div>
                                          <button type="submit" class="mt-8 group relative w-3/4 m-auto flex justify-center py-2 px-4 border border-transparent text-sm font-bold rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                                      <!-- Heroicon name: solid/lock-closed -->
                                                      <svg class="h-5 w-5 text-gray-100 group-hover:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                                      </svg>
                                                </span>
                                                Continue
                                          </button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </section>
      </section>
      </section>
      <script defer src="../assets/js/app.js"></script>
</body>
</html>