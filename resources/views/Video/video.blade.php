<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/video.css') }}" />
  </head>
  <body>
  
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="img/TS Logo.png" alt="">TECH SKILL
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
          <div class="box" onclick="javavid()">
                <img src="{{ asset('assets/images/Java.png') }}">
                <a href="java">Java</a>
            </div>
            <div class="box" onclick="htmlvid()">
                <img src="{{ asset('assets/images/HTML.png') }}">
                <a href="html">Hyper Text Markup Language</a>
            </div>
            <div class="box" onclick="jsvid()">
              <img src="{{ asset('assets/images/Javascript.png') }}">
              <a href="javascript">JavaScript</a>
          </div>
        </div>
    </nav>
    <nav>
      <div class="flex-container">
        <div class="box" onclick="menuphppop()">
              <img src="{{ asset('assets/images/php.png') }}">
              <a href="php">PHP: Hypertext Preprocessor</a>
          </div>
          <div class="box" onclick="menupypop()">
              <img src="{{ asset('assets/images/Python.png') }}">
              <a href="python">Python</a>
          </div>
          <div class="box" onclick="menusqlpop()">
            <img src="{{ asset('assets/images/mySql.png') }}">
            <a href="mysql">Structured Query Language</a>
        </div>
      </div>
  </nav>
    </main>

      
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/video.css') }}"></script>
    



  </body>
</html>