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
				   <div class="front"><p>What is JavaScript primarily used for?</p></div>
				   <div class="back"><p>It is primarily used for client-side web development, adding interactivity and dynamic behavior to web pages.</p></div>		
				</div>		
				</div>

		<!-- Second Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the term "hoisting" mean in JavaScript?</p></div>
				   <div class="back"><p>Hoisting refers to the JavaScript behavior of moving variable and function declarations to the top of their containing scope during the compilation phase.</p></div>		
				</div>		
				</div>

		<!-- Third Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "typeof" operator in JavaScript?</p></div>
				   <div class="back"><p> It is used to determine the type of a value or variable.</p></div>		
				</div>		
				</div>

		<!-- Fourth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "null" and "undefined" in JavaScript?</p></div>
				   <div class="back"><p>"null" represents the intentional absence of any object value, while "undefined" represents the absence of a value or an uninitialized variable.</p></div>		
				</div>		
				</div>

		<!-- Fifth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the JavaScript method used to add an element to the end of an array?</p></div>
				   <div class="back"><p>"push()".</p></div>		
				</div>		
				</div>

		<!-- Sixth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the JavaScript keyword used to declare a variable?</p></div>
				   <div class="back"><p>"var", "let", or "const" (depending on the desired scope and mutability).</p></div>		
				</div>		
				</div>

		<!-- Seventh Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "this" keyword in JavaScript?</p></div>
				   <div class="back"><p>It refers to the object that is currently executing the code.</p></div>		
				</div>		
				</div>

		<!-- Eigth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between "==" and "===" in JavaScript?</p></div>
				   <div class="back"><p>"==" performs loose equality comparison, while "===" performs strict equality comparison (checking both value and type).</p></div>		
				</div>		
				</div>

		<!-- Ninth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the JavaScript method used to remove the last element from an array?</p></div>
				   <div class="back"><p>"pop()".</p></div>		
				</div>		
				</div>

		<!-- Tenth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "setTimeout" function do in JavaScript?</p></div>
				   <div class="back"><p> It schedules the execution of a function after a specified delay in milliseconds.</p></div>		
				</div>		
				</div>

		<!-- Eleventh Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "addEventListener" method in JavaScript?</p></div>
				   <div class="back"><p> It attaches an event handler to an element, allowing it to respond to specific events.</p></div>		
				</div>		
				</div>

		<!-- Twelfth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the JavaScript method used to convert a string to an integer?</p></div>
				   <div class="back"><p>"parseInt()".</p></div>		
				</div>		
				</div>

			</div>
		</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>