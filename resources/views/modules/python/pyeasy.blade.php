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
                
                <h2 style="text-align:left;">WHAT IS PYTHON</h2>
                <br>
<p>Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.</p>
<p>Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Its high-level built in data structures,</p>
<p>combined with dynamic typing and dynamic binding, make it very attractive for Rapid Application Development, as well as for use as a scripting or glue language to connect existing components together.</p>
<p>Python's simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse.</p>
<p>The Python interpreter and the extensive standard library are available in source or binary form without charge for all major platforms, and can be freely distributed.</P>
<br>
<p>It is used for:</p>
<ul>
<li>web development (server-side)</li>
<li>software development</li> 
<li>mathematics</li> 
<li>system scripting.</li>                     
</ul>
<br>
<h4 style="text-align:left;">What can Python do?</h4>
<ol>
<li>Python can be used on a server to create web applications.</li>
<li>Python can be used alongside software to create workflows.</li> 
<li>Python can connect to database systems. It can also read and modify files.</li> 
<li>Python can be used to handle big data and perform complex mathematics.</li>       
<li>Python can be used for rapid prototyping, or for production-ready software development.</li>                     
</ol>
<br>
<h4 style="text-align:left;">What is Scope in Python?</h4>
<p>Every object in Python functions within a scope. A scope is a block of code where an object in Python remains relevant.</p>
<p>Namespaces uniquely identify all the objects inside a program. However, these namespaces also have a scope defined for them where you could use their objects without any prefix.</p>
<p>A few examples of scope created during code execution in Python are as follows:</p>
<br>
<p>A local scope refers to the local objects available in the current function.</p>
<p>A global scope refers to the objects available throughout the code execution since their inception.</p>
<p>A module-level scope refers to the global objects of the current module accessible in the program.</p>
<p>An outermost scope refers to all the built-in names callable in the program. The objects in this scope are searched last to find the name referenced.</p>
<p>Note: Local scope objects can be synced with global scope objects using keywords such as global.</p>
<br>
<h4 style="text-align:left;">What is PEP 8 and why is it important?</h4>
<p>PEP stands for Python Enhancement Proposal. A PEP is an official design document providing information to the Python community, or describing a new feature for Python or its processes. </p>
<p>PEP 8 is especially important since it documents the style guidelines for Python Code. Apparently contributing to the Python open-source community requires you to follow these style guidelines sincerely and strictly.</p>

 
            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>