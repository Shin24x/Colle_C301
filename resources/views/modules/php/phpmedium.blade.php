<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/module.css') }}" />
  </head>
  <body>
  
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="{{ asset('assets/images/TS Logo.png') }}" alt="">TECH SKILL
      </div>


      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
       <img src="{{ asset('assets/images/Bea.jpg') }}" alt="" class="profile" />
      </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
         <ul class="menu_items">
          <li class="item">
          &nbsp
        &nbsp
        &nbsp
        
            <a href="home" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-home"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>

          <ul class="menu_items">
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-grid-alt"></i>
              </span>
              <span class="navlink">Library</span>
            </a>
          </li>
    
    <ul class="menu_items">
          <li class="item">
            <a href="video" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-video"></i>
              </span>
              <span class="navlink">Videos</span>
            </a>
          </li>
  
      <ul class="menu_items">
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-card"></i>
              </span>
              <span class="navlink">Flashcard</span>
            </a>
          </li>


        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <nav>
        <div class="flex-container">
          <div class="box">
                
                <h2 style="text-align:center;">What does PHP mean?</h2>
                <br>
                <ul>
                  <li>The abbreviation PHP initially stood for Personal Homepage. But now it is a recursive acronym for Hypertext Preprocessor. (It's recursive in the sense that the first word itself is an abbreviation, so the full meaning doesn't follow the abbreviation.)</li>
                  <li>The first version of PHP was launched 26 years ago. Now it's on version 8, released in November 2020, but version 7 remains the most widely used.</li>
                  <li>PHP runs on the Zend engine, which is the most popular implementation. There are some other implementations as well, like parrot, HPVM (Hip Hop Virtual Machine), and Hip Hop, created by Facebook.</li>
                  <li>PHP is mostly used for making web servers. It runs on the browser and is also capable of running in the command line. So, if you don't feel like showing your code output in the browser, you can show it in the terminal.</li>
                </ul>
                <br>
                <h2 style="text-align:center;">Advantages of PHP</h2> 
                <br>
                <p>PHP has some advantages that have made it so popular, and it's been the go-to language for web servers for more than 15 years now. Here are some of PHP's benefits:</p>
                <ul>
                    <li>Cross-Platform: PHP is platform-independent. You don't have to have a particular OS to use it because it runs on every platform, whether it's Mac, Windows, or Linux.</li>
                    <li>Open Source: PHP is open source. The original code is made available to everyone who wants to build upon it. This is one of the reasons why one of its frameworks, Laravel, is so popular.</li>
                    <li>Easy to learn: PHP is not hard to learn for absolute beginners. You can pick it up pretty if you already have programming knowledge.</li>
                    <li>PHP syncs with all Databases: You can easily connect PHP to all Databases, relational and non-relational. So it can connect in no time to MySQL, Postgress, MongoDB, or any other database.</li>
                    <li>Supportive Community: PHP has a very supportive online community. The official documentation provides guides on how to use the features and you can easily get your problem fixed while stuck.</li>
                </ul> 
                <br>
                <br>
                <h2 style="text-align:center;">Who uses PHP</h2>
                <br>
                <p>A number of established companies and tech giants use PHP to run their servers and make a lot of incredible things.</p>
                <ul>
                    <li>Wikipedia: one of the world's largest sources of information on any topic, Wikipedia is built in PHP.</li>
                    <li>Facebook: Facebook uses PHP to power its site. In turn, the company contributed to the community by creating an implementation known as Hip Hop for PHP.</li>
                    <li>Web Hosting Platforms: a lot of Web Hosting Platforms such as BlueHost, Site ground, and Whogohost run their hosting servers using PHP.</li>
                    <li>Content Management Systems (CMSs): the world's most popular content management system, WordPress, is built in PHP. Other content management systems such as Drupal, Joomla, and Magento are also built in PHP. Shopify runs on PHP too.</li>
                </ul>
                <br>
                <h2 style="text-align:center;">How to Write Your First Hello World Program in PHP</h2>
                <br>
                <p>Now that you have learned about PHP and its advantages, it's time to write your first Hello World program in it!</p>
                <p>First of all, you must have PHP installed on your local machine. You can get that done by installing an XAMP (Cross-Platform, Apache, MySQL, and PHP) or WAMP (Windows, Apache, MySQL, and PHP) server.</p>
                <p>XAMP works on all operating systems and WAMP works only in Windows. I will be using WAMP.</p>
                <p>Open up the WAMP or XAMP server and make sure all services are running. If you are using WAMP, the WAMP logo should show on your taskbar with the color green.</p>
                <img src="{{ asset('assets/images/phpmedium1.png') }}">
                <p>Open up your C drive and look for the installation directory of your WAMP server. In my case, it is <a style="color: darkorange;">wamp64.</a></p>
                <img src="{{ asset('assets/images/phpmedium2.png') }}">
                <img src="{{ asset('assets/images/phpmedium3.png') }}">
                <p>Create a folder right there and name it whatever you want, then open up the folder with your code editor.</p>
                <h6>Create an <a style="color: aqua;">index.php</a> file and paste in the following code:</h6>
                <img src="{{ asset('assets/images/phpmedium4.png') }}">
                <p>You can also put your “Hello World” text in a variable, then use the echo system to display it in the browser.</p>
                <p>In PHP, you can declare a variable with the dollar sign ($). Your statements, apart from the last one, must also be terminated by a semi-colon (;).</p>
                <img src="{{ asset('assets/images/phpmedium5.png') }}">
                <p>To run your code in the browser, open up the browser and write this in the address bar <a style="color: aqua;">localhost/the-folder-of-your-php-file/php-file.php</a>, then hit enter.</p>
                <p>Make sure your WAMP or XAMP server is running, otherwise it won't work.</p>
                <img src="{{ asset('assets/images/phpmedium6.png') }}">
                <p>You can see that the code successfully ran in the browser, because I got the file path right.</p>
                <h6>Another beautiful thing about PHP is that you can embed it in HTML. You can do it like this:</h6>
                <img src="{{ asset('assets/images/phpmedium7.png') }}">

            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>