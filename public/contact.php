<!-- contact form php script -->
<!DOCTYPE html>
<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != '') {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "liam@liamcodes.com";
        $body = "";

        $body .= "From: ".$first_name." ".$last_name. "\r\n";
        $body .= "Email: ".$email. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to, "Contact Form Submitted", $body);

        $message_sent = true;
    }
?>
<html lang=en>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="tailwind.css" rel="stylesheet">
    <title>LiamCodes - Contact</title>
    <script src="https://kit.fontawesome.com/6c9c1ab4c5.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-gray-800 flex flex-col">
    <div class="flex flex-col min-h-screen">
      <!-- NAVBAR -->
      <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!--Mobile menu button -->
              <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                
                <!-- When menu IS open -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>

            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex-shrink-0 flex items-center">
                <a href="./index.html">
                  <img class="block lg:hidden h-8 w-auto" src="./assets/liamcodesicon.png" alt="LiamCodes Logo" />
                </a>
                <a href="./index.html">
                  <img class="hidden lg:block h-8 w-auto" src="./assets/liamcodes3.png" alt="LiamCodes Logo" />
                </a>
              </div>
              <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="./index.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>

                  <a href="./about.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>

                  <a href="./projects.html" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                  <a href="./contact.php" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Contact</a>
                </div>
              </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <a href="./files/test.txt" download="resume.txt">
                <button type="submit" class="px-4 py-1 text-sm text-white font-semibold rounded-full border border-white hover:text-white bg-gradient-to-br hover:from-pink-600 hover:to-red-500 hover:border-transparent focus:outline-none">
                  <em class="fas fa-download pr-2"></em>
                  Resume
                </button>
              </a>
            </div>
          </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="./index.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>

            <a href="./about.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>

            <a href="./projects.html" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="./contact.php" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Contact</a>
          </div>
        </div>
      </nav>

      <!-- MAIN SECTION -->
      <main class="max-w-7xl mx-auto flex-grow pb-20">

        <div class="grid-flow-col lg:grid lg:grid-cols-2 lg:gap-4 lg:px-20 lg:pt-20 md:pt-10 md:px-20 px-8">
          <div class="col-auto mt-10 lg:pr-5">
            <h2 class="text-white text-5xl font-semibold text-center lg:text-left pb-1">
              Contact
            </h2>
            <p class="text-md text-center lg:text-left pt-4 text-gray-300">
              If you're interested in working with me or have any questions fill out this forum and I'll get back to you. You can also get in touch with me
              through my social media.
            </p>
            <p class="text-md text-center lg:text-left pt-4 text-gray-300 pb-5">
              If you are interested in hiring me feel free to contact and/or download my resume.
            </p>
            <div class="text-center lg:text-left space-x-4">
              <a href="./files/test.txt" download="resume.txt">
                <button type="submit" class="px-4 py-1 text-lg text-white font-semibold rounded-full border border-white hover:bg-white hover:text-gray-800 hover:border-transparent focus:outline-none">
                  <em class="fas fa-download pr-2"></em>
                  Resume
                </button>
              </a>
            </div>
            <div class="py-8 text-center lg:text-left space-x-4">
              <a href="https://github.com/liammcodes" class="text-yellow-300 hover:text-yellow-400 text-2xl" target=”_blank”>
                <em class="fab fa-github"></em>
              </a>
      
              <a href="https://www.instagram.com/liam_codes/" class="text-red-400 hover:text-red-700 text-2xl" target=”_blank”>
                <em class="fab fa-instagram"></em>
              </a>
      
              <a href="https://www.twitch.tv/liama6" class="text-purple-400 hover:text-purple-700 text-2xl" target=”_blank”>
                <em class="fab fa-twitch"></em>
              </a>
      
              <a href="https://twitter.com/liammcodes" class="text-blue-300 hover:text-blue-500 text-2xl" target=”_blank”>
                <em class="fab fa-twitter"></em>
              </a>
            </div>
          </div>
          <div class="justify-items-center px-10 py-10 bg-gray-900 rounded-3xl shadow-xl max-w-3xl mx-auto flex-grow">
            
            <?php if($message_sent): ?>

            <h2 class="text-white text-5xl font-semibold text-center lg:text-left pb-1">
              Success
            </h2>
            <p class="text-md text-center lg:text-left pt-4 text-gray-300">
              Your message was sent successfully, I'll get back to you as soon as I can via the email you specified. I look forward
              to working with you!
            </p>
            <h2 class="text-center text-9xl text-green-500 pt-10">
                <em class="fas fa-check"></em>
            </h2>
            
            <?php else: ?>

            <form class="w-full" action="contact.php" method="POST">
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2" for="first-name">
                    First Name
                  </label>
                  <input class="form-control appearance-none block w-full text-gray-300 bg-gray-800 border border-gray-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-pink-700 hover:border-pink-700" id="grid-first-name" name="first_name" type="text" placeholder="John">
                  <p class="hidden text-red-500 text-xs italic">Please fill out this field.</p>
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2" for="last-name">
                    Last Name
                  </label>
                  <input class="form-control appearance-none block w-full bg-gray-800 text-gray-300 border border-gray-500 rounded-xl py-3 px-4 leading-tight focus:outline-none focus:border-pink-700 hover:border-pink-700" id="grid-last-name" name="last_name" type="text" placeholder="Doe">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2" for="grid-password" name="email">
                    E-mail
                  </label>
                  <input class="form-control appearance-none block w-full bg-gray-800 text-gray-300 border border-gray-500 rounded-xl py-3 px-4 leading-tight focus:outline-none focus:border-pink-700 hover:border-pink-700" id="email" name="email" type="email">
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                  <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2" for="grid-password">
                    Message
                  </label>
                  <textarea class="form-control no-resize appearance-none block w-full bg-gray-800 text-gray-300 border border-gray-500 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-pink-700 hover:border-pink-700 h-48 resize-none" id="message" name="message"></textarea>
                </div>
              </div>
              <div class="md:flex md:items-center">
                <!--pb-16-->
                <div class="w-full">
                  <button type="submit" class="w-full px-4 py-2 text-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 shadow-md hover:shadow-lg text-white font-semibold rounded-full border bg-gradient-to-br from-pink-600 to-red-500 border-transparent focus:outline-none" name="button">
                    <em class="fas fa-paper-plane pr-1"></em>
                    Send
                  </button>
                </div>
                
              </div>
            </form>
            
            <?php endif; ?>

          </div>
        </div>
      </main>

      <img class="w-full -mb-3 h-auto hidden sm:block" src="./assets/waves.svg" alt="Waves" />
      <img class="w-full -mb-3 h-auto sm:hidden" src="./assets/waves-mobile.svg" alt="Waves" />
    </div>
  </body>
  <!-- FOOTER -->
  <footer class="text-gray-700 bg-pink-700 body-font">
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-6xl sm:flex-row mt-10">
      <a href="./index.html" class="text-xl font-bold leading-none text-gray-800 select-none logo">LiamCodes</a>
      <p class="mt-4 text-sm text-gray-800 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-800 sm:mt-0">
        © 2021 LiamCodes
      </p>
      <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
        <a href="https://github.com/liammcodes" class="text-red-400 hover:text-pink-900 text-2xl" target=”_blank”>
          <em class="fab fa-github"></em>
        </a>

        <a href="https://www.instagram.com/liam_codes/" class="text-red-400 hover:text-pink-900 text-2xl" target=”_blank”>
          <em class="fab fa-instagram"></em>
        </a>

        <a href="https://www.twitch.tv/liama6" class="text-red-400 hover:text-pink-900 text-2xl" target=”_blank”>
          <em class="fab fa-twitch"></em>
        </a>

        <a href="https://twitter.com/liammcodes" class="text-red-400 hover:text-pink-900 text-2xl" target=”_blank”>
          <em class="fab fa-twitter"></em>
        </a>
      </span>
    </div>
  </footer>
</html>

<!-- Mobile Dropdown -->
<script src="./scripts/mobile-menu.js"></script>