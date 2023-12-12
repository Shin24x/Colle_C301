<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
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
		
          <!-- end -->
		  
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> ‎ ‎ ‎ ‎ ‎ ‎ </span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <nav>
        <div class="flex-container">
          <div class="box" onclick="menujavapop()">
                <img src="{{ asset('assets/images/Java.png') }}">
                <p>Java</p>
            </div>
            <div class="box" onclick="menuhtmlpop()">
                <img src="{{ asset('assets/images/HTML.png') }}">
                <p>Hyper Text Markup Language</p>
            </div>
            <div class="box" onclick="menujspop()">
              <img src="{{ asset('assets/images/Javascript.png') }}">
              <p>JavaScript</p>
          </div>
          <div class="box" onclick="menuphppop()">
                <img src="{{ asset('assets/images/php.png') }}">
                <p>PHP: Hypertext Preprocessor</p>
            </div>
            <div class="box" onclick="menupypop()">
                <img src="{{ asset('assets/images/Python.png') }}">
                <p>Python</p>
            </div>
            <div class="box" onclick="menusqlpop()">
              <img src="{{ asset('assets/images/mySql.png') }}">
              <p>Structured Query Language</p>
          </div>
        </div>
  </nav>
    </main>
 
 <!-- POP UP -->
 <div class="menupopup" id="info-menujavapopup">
  <h2>Java information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="javapop()">Next</button>
  <button onclick="closePopupjava()">Cancel</button>
  
</div>

<div class="menupopup" id="info-menuhtmlpopup">
  <h2>HTML information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="htmlpop()">Next</button>
  <button onclick="closePopuphtml()">Cancel</button>
  
</div>

<div class="menupopup" id="info-menujspopup">
  <h2>JavaScript information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="jspop()">Next</button>
  <button onclick="closePopupjs()">Cancel</button>
  
</div>

<div class="menupopup" id="info-menuphppopup">
  <h2>PHP information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="phppop()">Next</button>
  <button onclick="closePopupphp()">Cancel</button>
  
</div>

<div class="menupopup" id="info-menupypopup">
  <h2>Python information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="pypop()">Next</button>
  <button onclick="closePopuppy()">Cancel</button>
  
</div>

<div class="menupopup" id="info-menusqlpopup">
  <h2>MySQL information</h2>
  <p>This is some information about the selected language.</p>
  <p>This is some information about the selected language.</p>
  <button onclick="sqlpop()">Next</button>
  <button onclick="closePopupsql()">Cancel</button>
  

</div> 
  <!-- POP UP -->
  <div class="popup" id="info-javapop">
      <h2>Java Difficulty</h2>
      
       <!--<button onclick="closePopup()">Cancel</button>-->
       
      <button onclick="javaeasybtn()">Easy</button>
      <button onclick="javamediumbtn()">Medium</button>
      <button onclick="javahardbtn()">Hard</button>
	  <button onclick="exitbtnjava()">Exit</button>
      
    </div>

    <div class="popup" id="info-htmlpop">
      <h2>HTML Difficulty</h2>
      <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="htmleasybtn()">Easy</button>
      <button onclick="htmlmediumbtn()">Medium</button>
      <button onclick="htmlhardbtn()">Hard</button>
	  <button onclick="exitbtnhtml()">Exit</button>
      
    </div>
    
    <div class="popup" id="info-jspop">
      <h2>JS Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="jseasybtn()">Easy</button>
      <button onclick="jsmediumbtn()">Medium</button>
      <button onclick="jshardbtn()">Hard</button>
	  <button onclick="exitbtnjs()">Exit</button>
      
    </div>
    
    <div class="popup" id="info-phppop">
      <h2>PHP Difficulty</h2>
      <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="phpeasybtn()">Easy</button>
      <button onclick="phpmediumbtn()">Medium</button>
      <button onclick="phphardbtn()">Hard</button>
	  <button onclick="exitbtnphp()">Exit</button>
      
    </div>

    <div class="popup" id="info-pypop">
      <h2>Python Difficulty</h2>
   <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="pyeasybtn()">Easy</button>
      <button onclick="pymediumbtn()">Medium</button>
      <button onclick="pyhardbtn()">Hard</button>
	  <button onclick="exitbtnpy()">Exit</button>
      
    </div>

    <div class="popup" id="info-sqlpop">
      <h2>SQL Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="sqleasybtn()">Easy</button>
      <button onclick="sqlmediumbtn()">Medium</button>
      <button onclick="sqlhardbtn()">Hard</button>
	  <button onclick="exitbtnsql()">Exit</button>
      
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



  </body>
</html>