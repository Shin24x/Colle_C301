<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Favicon.png')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/home.css')); ?>" />
  </head>
  <body>
  
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="<?php echo e(asset('assets/images/TS Logo.png')); ?>" alt="">TECH SKILL
      </div>


      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
       <img src="<?php echo e(asset('assets/images/.jpg')); ?>" alt="" class="profile" />
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
                <img src="<?php echo e(asset('assets/images/Java.png')); ?>">
                <p>Java</p>
            </div>
            <div class="box" onclick="menuhtmlpop()">
                <img src="<?php echo e(asset('assets/images/HTML.png')); ?>">
                <p>Hyper Text Markup Language</p>
            </div>
            <div class="box" onclick="menujspop()">
              <img src="<?php echo e(asset('assets/images/Javascript.png')); ?>">
              <p>JavaScript</p>
          </div>
          <div class="box" onclick="menuphppop()">
                <img src="<?php echo e(asset('assets/images/php.png')); ?>">
                <p>PHP: Hypertext Preprocessor</p>
            </div>
            <div class="box" onclick="menupypop()">
                <img src="<?php echo e(asset('assets/images/Python.png')); ?>">
                <p>Python</p>
            </div>
            <div class="box" onclick="menusqlpop()">
              <img src="<?php echo e(asset('assets/images/mySql.png')); ?>">
              <p>Structured Query Language</p>
          </div>
        </div>
  </nav>
    </main>

      
    </div>
    <!-- JavaScript -->
    <script src="<?php echo e(asset('assets/js/video.css')); ?>"></script>
    



  </body>
</html><?php /**PATH C:\Users\pc\Documents\GitHub\Colle_C301\resources\views/Video/video.blade.php ENDPATH**/ ?>