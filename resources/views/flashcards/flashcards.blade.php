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
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard2.css') }}" />

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
       <img src="img/" alt="" class="profile" />
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
			  
            <a href="index.html" class="nav_link">
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
		  <div href="#" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-gear"></i>
              </span>
              <span class="navlink">Settings</span>
              <i class="bx bx-chevron-right arrow-left"></i>
            </div>

            <ul class="menu_items submenu">
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
              <a href="#" class="nav_link sublink">Nav Sub Link</a>
            </ul>
          </li>
          <!-- end -->
		  
        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    <main>
        <nav>
            <div class="flex-container">
                <div class="box" >
                <img src="{{ asset('assets/images/Java.png') }}">
                    <p>Java</p>
                    <a href="flashjava" class="btn">START</a>
                </div>
                <div class="box" >
                <img src="{{ asset('assets/images/HTML.png') }}">
                    <p>Hyper Text Markup Language</p>
                    <a href="flashhtml" class="btn">START</a>
                </div>
                <div class="box" >
                <img src="{{ asset('assets/images/Javascript.png') }}">
                    <p>JavaScript</p>
                    <a href="flashjs" class="btn">START</a>
                </div>
            </div>
        </nav>
        <nav>
            <div class="flex-container">
                <div class="box">
                <img src="{{ asset('assets/images/php.png') }}">
                    <p>PHP: Hypertext Preprocessor</p>
                    <a href="flashphp" class="btn">START</a>
                </div>
                <div class="box">
                <img src="{{ asset('assets/images/Python.png') }}">
                    <p>Python</p>
                    <a href="flashpy" class="btn">START</a>
                </div>
                <div class="box">
                <img src="{{ asset('assets/images/mySql.png') }}">
                    <p>Structured Query Language</p>
                    <a href="flashsql" class="btn">START</a>
                </div>
            </div>
        </nav>
    </main>
 
 
    <!-- JavaScript -->
    <script src="script.js"></script>
    



  </body>
</html>