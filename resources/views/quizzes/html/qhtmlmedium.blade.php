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
        <ol>
      <li>What does the HTML `< br>` tag do?</li>
      <input type="radio" name="question1">A.Breaks the document into sections<br>
      <input type="radio" name="question1" id="correct1">B.Creates a line break<br>
      <input type="radio" name="question1">C.Defines a bold text<br>

    <li>Which tag is used to create a hyperlink in HTML?</li>
      <input type="radio" name="question2">A.< link><br>
      <input type="radio" name="question2" id="correct2">B.< a><br>
      <input type="radio" name="question2">C.< href><br>

      <li>What is the purpose of the HTML `<head>` tag?</li>
      <input type="radio" name="question3">A.Defines the main content of the document<br>
      <input type="radio" name="question3">B.Specifies the header of the document<br>
      <input type="radio" name="question3" id="correct3">C.Contains metadata about the document<br>

      <li>Which HTML element is used to define the structure of an HTML document?</li>
      <input type="radio" name="question4" id="correct4">A.< html><br>
      <input type="radio" name="question4">B.< structure><br>
      <input type="radio" name="question4">C.< body><br>

      <li>What does the HTML attribute “src” stand for?</li>
      <input type="radio" name="question5" id="correct5">A.Source<br>
      <input type="radio" name="question5">B.Style<br>
      <input type="radio" name="question5">C.Script<br>

      <li>Which HTML tag is used for creating an unordered list?</li>
      <input type="radio" name="question6">A.< list><br>
      <input type="radio" name="question6">B.< ol><br>
      <input type="radio" name="question6" id="correct6">C.< ul><br>

      <li>What is the purpose of the HTML `< img>` tag?</li>
      <input type="radio" name="question7">A.Defines a hyperlink<br>
      <input type="radio" name="question7">B.Adds a line break<br>
      <input type="radio" name="question7" id="correct7">C.Embeds an image into the document<br>

      <li>How can you add comments in HTML?</li>
      <input type="radio" name="question8" id="correct8">A.< !-- This is a comment -- ><br>
      <input type="radio" name="question8">B.// This is a comment<br>
      <input type="radio" name="question8">C./* This is a comment */<br>

      <li>Which HTML tag is used for creating a table?</li>
      <input type="radio" name="question9">A.< table><br>
      <input type="radio" name="question9" id="correct9">B.< tab><br>
      <input type="radio" name="question9">C.< tble><br>

      <li>What is the role of the HTML < footer> element?</li>
      <input type="radio" name="question10">A.It represents the main content of the HTML document.<br>
      <input type="radio" name="question10" id="correct10">B.It defines a footer for the HTML document.<br>
      <input type="radio" name="question10">C.It specifies the version of HTML being used.<br>

      <input type="button" name="submit" value="SubmitQuiz" onClick="calculateScore()">
  </form>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onClick="closeModal()">Close</span>
      <p id="scoreDisplay"></p>
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