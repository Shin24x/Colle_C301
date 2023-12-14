<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">

		<title>Flashcards</title>
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/flashcard2.css') }}" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>  
<body >
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
<div class="flash_container">
		<!-- Title -->
		<h1>FLASHCARDS GUESSING GAME</h1>

			<div class="cards_container">
		
		<!-- First Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does PHP stand for?</p></div>
				   <div class="back"><p>Hypertext Preprocessor.</p></div>		
				</div>		
				</div>

		<!-- Second Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "echo" statement in PHP? </p></div>
				   <div class="back"><p>It is used to output text or variables to the browser.</p></div>		
				</div>		
				</div>

		<!-- Third Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "require" and "include" in PHP?</p></div>
				   <div class="back"><p>"require" stops the script execution with a fatal error if the file cannot be included, while "include" generates a warning and continues the script execution.</p></div>		
				</div>		
				</div>

		<!-- Fourth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the PHP function used to establish a database connection?</p></div>
				   <div class="back"><p>"mysqli_connect()" or "PDO::__construct()".</p></div>		
				</div>		
				</div>

		<!-- Fifth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "$_POST" superglobal in PHP represent?</p></div>
				   <div class="back"><p>It contains variables submitted to the current script using the HTTP POST method.</p></div>		
				</div>		
				</div>

		<!-- Sixth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "foreach" loop in PHP?</p></div>
				   <div class="back"><p> It iterates over each element in an array or collection.</p></div>		
				</div>		
				</div>

		<!-- Seventh Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the PHP function used to redirect users to a different page?</p></div>
				   <div class="back"><p>"header('Location: URL')".</p></div>		
				</div>		
				</div>

		<!-- Eigth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between single quotes ('') and double quotes ("") in PHP?</p></div>
				   <div class="back"><p>Single quotes treat variables and most escape sequences literally, while double quotes interpret variables and support escape sequences.</p></div>		
				</div>		
				</div>

		<!-- Ninth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the PHP function used to retrieve the length of a string?</p></div>
				   <div class="back"><p>"strlen()".</p></div>		
				</div>		
				</div>

		<!-- Tenth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "$_SESSION" superglobal in PHP?</p></div>
				   <div class="back"><p> It allows storing and accessing session-specific data across multiple requests.
</p></div>		
				</div>		
				</div>

		<!-- Eleventh Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "empty" function do in PHP? </p></div>
				   <div class="back"><p>It checks if a variable is considered empty, meaning it is undefined, null, false, 0, an empty string, or an empty array.</p></div>		
				</div>		
				</div>

		<!-- Twelfth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the PHP function used to retrieve the current date and time?</p></div>
				   <div class="back"><p>"date()".</p></div>		
				</div>		
				</div>

			</div>
		</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>