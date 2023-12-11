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
                
                <h2 style="text-align:center;">What is PHP?</h2>
                <br>
                <p>PHP is an acronym for "PHP: Hypertext Preprocessor". PHP is an open-source, server-side programming language that can be used to create websites, applications, customer relationship management systems and more.</p>
                <p>It is a widely-used general-purpose language that can be embedded into HTML.</p>
                <p>PHP was conceived sometime in the fall of 1994 by Rasmus Lerdorf.</p>
                <p>Early non-released versions were used on his home page to keep track of who was looking at his online resume.</p>
                <p>The first version used by others was available sometime in early 1995 and was known as the Personal Home Page Tools.</p>
                <br>
                <h2 style="text-align:center;">What is a PHP File?</h2> 
                <br>
                <ul>
                    <li>PHP files have extension ".php"</li>
                    <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
                    <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
                </ul> 
                <h6>To insert or embed PHP script into html document, we use PHP tag.:</h6>
                <p>Format of PHP tag is</p>
                <img src="{{ asset('assets/images/phpeasy1.png') }}">
                <br>
                <br>
                <h2 style="text-align:center;">Echo Statement</h2>
                <br>
                <p>The echo statement is used to print something on screen just like print function C language.</p>
                <h6>Example:</h6>
                <ol>
                    <li><a style="color: lightcyan;">echo </a><a style="color: lightgreen;">"Hello Welcome !"</a>;</li>
                    <li><a style="color: lightcyan;">echo </a><a style="color: lightgreen;">"Hello " .10*3</a>;</li>
                </ol>
                 <h6>Output:</h6>
                <ol>
                    <li>Hello Welcome !</li>
                    <li>Hello 30</li>
                </ol>
                <br>
                <h2 style="text-align:center;">Comments in PHP</h2>
                <br>
                <p>A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.</p>
                <h6>Comments can be used to:</h6>
                <ul>
                  <li>Let others understand your code</li>
                  <li>Leave out some parts of your code</li>
                  <li>Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code</li>
                </ul>
                <h6>1. Single Line Comment</h6>
                <p>In case the developer wants to specify a single line comment, then the comment must start with " // " format:</p>
                <p style="color: lightgreen;">// This is single line comment</p>
                <h6>2. Multi Line Comment</h6>
                <p>In case of Multi lined comment, the comment must starts with /* and ends with */ i.e. /* .... */ . format:</p>
                <p style="color: lightgreen;">/* This </p>
                <p style="color: lightgreen;">is a</p>
                <p style="color: lightgreen;">Multiline comment */</p>
                <br>
                <br>
                <h2 style="text-align:center;">Variables Declaration in PHP</h2>    
                <br>
                <p>A variable is a named memory location in which we can store values for the particular program.In other words, Variable is a name of memory location and used to hold the value.</p>    
                <br>
                <h6>Creating Variables</h6>
                <p>In PHP, a variable is created using $ symbol followed by variable name.</p>
                <h6>format:</h6>
                <p><a style="color: lightcyan;">$variablename</a><a> = </a><a style="color: lightyellow;">value</a>;</p>
                <h2 style="text-align:center;">Rules for naming variable</h2>    
                <p>Variable names can be a group of both letters and digits, but they have to begin with a letter or an underscore, i.e. the variable name can't be starts with numbers or special symbols.</p>
                <h6>Example:</h6>
                <p><a style="color: lightcyan;">$a</a><a> = </a><a style="color: lightgreen;">"Study"</a>;ㅤㅤㅤㅤㅤㅤ<a style="color: darkgreen;"> ---> Valid declaration</a></p>
                <p><a style="color: lightcyan;">$_b</a><a> = </a><a style="color: lightgreen;">"Glance"</a>;ㅤㅤㅤㅤㅤ<a style="color: darkgreen;"> ---> Valid declaration</p>
                <br>
                <p><a style="color: lightcyan;">$3c</a><a> = </a><a style="color: lightgreen;">"Hello"</a>;ㅤㅤㅤㅤㅤㅤ<a style="color: darkred;"> ---> Invalid declaration</a></p>
                <p><a style="color: lightcyan;">$*d</a><a> = </a><a style="color: lightgreen;">25</a>;ㅤㅤㅤㅤㅤㅤㅤㅤ<a style="color: darkred;"> ---> Invalid declaration</a></p>
                <br>
                <p>In PHP, The variable names are case - sensitive, so the variable name $a is different from $A, i.e. $a != $A</p>
                <h6>Example:</h6>
                <p><a style="color: lightcyan;">$a</a><a> = </a><a style="color: lightgreen;">"Study"</a>;</p>
                <p><a style="color: lightcyan;">$A</a><a> = </a><a style="color: lightgreen;">"Glance"</a>;</p>
                <p>where both variables ($a and $A) are different.</p>
                <p>PHP is similar to the C style syntax in terms of keywords and language syntax. If conditions, for and while loops, and function returns are similar in syntax to languages such as C, C++, C#, Java and Perl.</p>

            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>