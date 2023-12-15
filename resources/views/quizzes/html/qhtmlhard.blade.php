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
      <li>What is HTML's role in web development?</li>
      <input type="radio" name="question1">A.Controlling server operations<br>
      <input type="radio" name="question1" id="correct1">B.Defining the structure and meaning of web content<br>
      <input type="radio" name="question1">C.Executing JavaScript code<br>
      <input type="radio" name="question1">D.Creating database queries<br><br>

      <li>Which of the following is NOT a commonly used technology complementing HTML?</li>
      <input type="radio" name="question2">A.Cascading Style Sheets (CSS)<br>
      <input type="radio" name="question2">B.JavaScript<br>
      <input type="radio" name="question2" id="correct2">C.Java<br>
      <input type="radio" name="question2">D.Python<br><br>

      <li>How are HTML elements enclosed?</li>
      <input type="radio" name="question3">A.Square brackets<br>
      <input type="radio" name="question3">B.Curly braces<br>
      <input type="radio" name="question3">C.Parentheses<br>
      <input type="radio" name="question3" id="correct3">D.Angle brackets<br><br>

      <li>What is the purpose of the <head> section in an HTML document?</li>
      <input type="radio" name="question4">A.Display visible content<br>
      <input type="radio" name="question4" id="correct4">B.Define webpage metadata and include stylesheets<br>
      <input type="radio" name="question4">C.Embed images and forms<br>
      <input type="radio" name="question4">D.Execute JavaScript functions<br><br>

      <li>What does the HTML tag < br /> represent?</li>
      <input type="radio" name="question5">A.Bold text<br>
      <input type="radio" name="question5" id="correct5">B.Line break<br>
      <input type="radio" name="question5">C.Link to another webpage<br>
      <input type="radio" name="question5">D.Image embedding<br><br>

      <li>Which HTML tag is used to create hyperlinks?</li>
      <input type="radio" name="question6">A.< link><br>
      <input type="radio" name="question6" id="correct6">B.< a><br>
      <input type="radio" name="question6">C.< href><br>
      <input type="radio" name="question6">D.< url><br><br>

      <li>What does CSS stand for?</li>
      <input type="radio" name="question7">A.Computer Style Sheets<br>
      <input type="radio" name="question7" id="correct7">B.Cascading Style Sheets<br>
      <input type="radio" name="question7">C.Creative Style System<br>
      <input type="radio" name="question7">D.Colorful Style Scripts<br><br>

      <li>What is the purpose of HTML comments?</li>
      <input type="radio" name="question8">A.Displayed content<br>
      <input type="radio" name="question8">B.Enhance search engine optimization<br>
      <input type="radio" name="question8" id="correct8">C.Aid in code understanding without displaying on the webpage<br>
      <input type="radio" name="question8">D.Execute special functions<br><br>
      
      <li>Which HTML version introduced the < canvas> element primarily used for displaying video and audio content?</li>
      <input type="radio" name="question9">A.HTML 4<br>
      <input type="radio" name="question9" id="correct9">B.HTML5<br>
      <input type="radio" name="question9">C.XHTML<br>
      <input type="radio" name="question9">D.HTML XTreme<br><br>

      <li>What does the acronym W3C stand for in the context of HTML standards?
</li>
      <input type="radio" name="question10" id="correct10">A.World Wide Web Consortium<br>
      <input type="radio" name="question10">B.Web 3.0 Consortium<br>
      <input type="radio" name="question10">C.Webpage Content Creator<br>
      <input type="radio" name="question10">D.Web Code Consortium<br><br>

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