<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">

		<title>Flashcards</title>
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/library.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/library2.css') }}" />
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
				   <div class="front"><p>What is Python primarily used for?</p></div>
				   <div class="back"><p>Python is a versatile programming language used for web development, data analysis, artificial intelligence, scripting, and more.</p></div>		
				</div>		
				</div>

		<!-- Second Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the term "PEP" stand for in Python?</p></div>
				   <div class="back"><p>Python Enhancement Proposal. PEPs are design documents providing information, specifications, and guidelines for the Python community.</p></div>		
				</div>		
				</div>

		<!-- Third Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "range" function in Python?</p></div>
				   <div class="back"><p> It generates a sequence of numbers that can be used for iteration or generating lists.</p></div>		
				</div>		
				</div>

		<!-- Fourth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between a list and a tuple in Python?</p></div>
				   <div class="back"><p>Lists are mutable (modifiable), while tuples are immutable (unchangeable).</p></div>		
				</div>		
				</div>

		<!-- Fifth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the Python keyword used to define a function?</p></div>
				   <div class="back"><p>"def".</p></div>		
				</div>		
				</div>

		<!-- Sixth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "if" statement in Python?</p></div>
				   <div class="back"><p>It allows conditional execution of code based on a specified condition.</p></div>		
				</div>		
				</div>

		<!-- Seventh Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the Python operator used for exponentiation?</p></div>
				   <div class="back"><p>"**" (double asterisk).</p></div>		
				</div>		
				</div>

		<!-- Eigth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "append" and "extend" methods in Python lists?</p></div>
				   <div class="back"><p>G"append" adds a single element to the end of a list, while "extend" adds multiple elements (another list) to the end of a list.</p></div>		
				</div>		
				</div>

		<!-- Ninth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the Python function used to find the maximum value in a list?</p></div>
				   <div class="back"><p>"max()".</p></div>		
				</div>		
				</div>

		<!-- Tenth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "import" keyword do in Python?</p></div>
				   <div class="back"><p>It allows importing modules or packages to use their functionality in the current Python script.</p></div>		
				</div>		
				</div>

		<!-- Eleventh Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "try-except" block in Python?</p></div>
				   <div class="back"><p>It is used for error handling, allowing the program to catch and handle exceptions gracefully.</p></div>		
				</div>		
				</div>

		<!-- Twelfth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the Python function used to retrieve the length of a list? </p></div>
				   <div class="back"><p>"len()".</p></div>		
				</div>		
				</div>

			</div>
		</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>