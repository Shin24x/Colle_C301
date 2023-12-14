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
					   <div class="front"><p>What is Java? </p></div>
					   <div class="back"><p>Java is a platform-independent, object-oriented programming language.</p></div>		
					</div>		
					</div>
	
			<!-- Second Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the main principle behind Java's "Write Once, Run Anywhere" (WORA) concept?</p></div>
					   <div class="back"><p>Write Once, Run Anywhere (WORA) means code can run on any platform with a compatible Java Virtual Machine (JVM).
	</p></div>		
					</div>		
					</div>
	
			<!-- Third Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>Explain the difference between JDK and JRE.</p></div>
					   <div class="back"><p>JDK is for development, including tools; JRE is for running Java applications.</p></div>		
					</div>		
					</div>
	
			<!-- Fourth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the significance of the "main" method in Java?</p></div>
					   <div class="back"><p>The "main" method is the starting point for Java program execution.</p></div>		
					</div>		
					</div>
	
			<!-- Fifth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is an object in Java?</p></div>
					   <div class="back"><p>An object is an instance of a class, encapsulating data and behavior.</p></div>		
					</div>		
					</div>
	
			<!-- Sixth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the purpose of the "final" keyword in Java?</p></div>
					   <div class="back"><p>"final" is used for constants, unmodifiable variables, and preventing </p></div>		
					</div>		
					</div>
	
			<!-- Seventh Card -->	
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the Java Virtual Machine (JVM)?</p></div>
					   <div class="back"><p>JVM is a virtual machine that executes Java bytecode on various platforms.</p></div>		
					</div>		
					</div>
	
			<!-- Eigth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the difference between "==" and ".equals()" when? </p></div>
					   <div class="back"><p> "==" checks reference equality; ".equals()" checks content or value equality.</p></div>		
					</div>		
					</div>
	
			<!-- Ninth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p> What is the purpose of the "super" keyword in Java?</p></div>
					   <div class="back"><p> "super" refers to the immediate parent class and is used to invoke its methods and constructor.</p></div>		
					</div>		
					</div>
	
			<!-- Tenth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the difference between an interface and an abstract class in Java? </p></div>
					   <div class="back"><p>An interface has only abstract methods; an abstract class can have both abstract and concrete methods.</p></div>		
					</div>		
					</div>
	
			<!-- Eleventh Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>What is the Java Collections Framework?</p></div>
					   <div class="back"><p>It provides classes and interfaces for handling collections of objects, like List, Set, and Map.</p></div>		
					</div>		
					</div>
	
			<!-- Twelfth Card -->
				 <div class="cards">
				 <div class="card">
					   <div class="front"><p>How does Java support multithreading?</p></div>
					   <div class="back"><p>Java supports multithreading through the "Thread" class and the "java.util.concurrent" package, allowing concurrent task execution.</p></div>		
					</div>		
					</div>
	
				</div>
			</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>