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
    <link rel="stylesheet" href="{{ asset('assets/css/quiz.css') }}" />
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
       <img src="" alt="" class="profile" />
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
            <a href="library" class="nav_link">
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
            <a href="flashcards" class="nav_link">
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
                
          <form id="quizForm">
    <div>
      <h1 style="text-align:center;">HTML EASY QUIZ</h1>
      <br>
        <ol>
      <li>What does HTML stand for?</li>
      <input type="radio" name="question1" id="correct1">A. Hyper Text Markup Language<br>
      <input type="radio" name="question1">B. Home Tool Markup Language<br>
      <input type="radio" name="question1">C. Hyperlinks and Text Markup Language<br>
      <input type="radio" name="question1">D. Hypermedia Transfer Language<br><br>

    <li>Who is making the Web standards?</li>
      <input type="radio" name="question2">A. Microsoft<br>
      <input type="radio" name="question2">B. Google<br>
      <input type="radio" name="question2">C. Mozilla<br>
      <input type="radio" name="question2" id="correct2">D. The World Wide Web Consortium<br><br>

    <li>Choose the correct HTML element for the largest heading:</li>
      <input type="radio" name="question3" id="correct3">A. < h1><br>
      <input type="radio" name="question3">B. < h6><br>
      <input type="radio" name="question3">C. < heading><br>
      <input type="radio" name="question3">D. < head><br><br>

      <li>What is the correct HTML element for inserting a line break?</li>
      <input type="radio" name="question4">A. < lb>      <br>
      <input type="radio" name="question4" id="correct4">B. < br>    <br>
      <input type="radio" name="question4">C. < break><br>
      <input type="radio" name="question4">D. < newline><br><br>

      <li>What is the correct HTML for adding a background color?</li>
      <input type="radio" name="question5" id="correct5">A. < body style="background-color:yellow;"><br>
      <input type="radio" name="question5">B. < body bg="yellow"><br>
      <input type="radio" name="question5">C. < background>yellow</><br>
      <input type="radio" name="question5">D. < bgcolor = “yellow”><br><br>
      
      <li>Choose the correct HTML element to define important text</li>
      <input type="radio" name="question6">A. < b>      <br>
      <input type="radio" name="question6">B. < important><br>
      <input type="radio" name="question6">C. < i><br>
      <input type="radio" name="question6" id="correct6">D. < strong> <br><br>

      <li>Choose the correct HTML element to define emphasized text</li>
      <input type="radio" name="question7">A. < i>    <br>
      <input type="radio" name="question7" id="correct7">B. < em>     <br>
      <input type="radio" name="question7">C. < italic><br>
      <input type="radio" name="question7">D. < b><br><br>

      <li>What is the correct HTML for creating a hyperlink?</li>
      <input type="radio" name="question8">A. < a>http://www.w3schools.com</>      <br>
      <input type="radio" name="question8">B. < a url="http://www.w3schools.com">W3Schools.com</><br>
      <input type="radio" name="question8" id="correct8">C. < a href="http://www.w3schools.com">W3Schools</>     <br>
      <input type="radio" name="question8">D. < a name="http://www.w3schools.com">W3Schools.com</><br><br>

      <li>Which character is used to indicate an end tag?</li>
      <input type="radio" name="question9">A. <      <br>
      <input type="radio" name="question9">B. *<br>
      <input type="radio" name="question9" id="correct9">C. /     <br>
      <input type="radio" name="question9">D. ^<br><br>

      <li>How can you open a link in a new tab/browser window?</li>
      <input type="radio" name="question10" id="correct10">A. < a href="url" target="_blank">      <br>
      <input type="radio" name="question10">B. < a href="url" new><br>
      <input type="radio" name="question10">C. < a href="url" target="new"><br>
      <input type="radio" name="question10">D. < a href=”url” save><br><br>


      <input type="button" name="submit" value="SubmitQuiz" onClick="calculateScore()">
  </form>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <p>    <a id="scoreDisplay"></a> <span class="close" onClick="closeModal()">Close</span></p>

    </div>
  </div>

    </div>
</ol>
  </form>
            </div>
        </div>
  </nav>
    </main>



              <!-- JavaScript -->
    <script src="{{ asset('assets/js/quiz.js') }}"></script>
    



    </body>
  </html>