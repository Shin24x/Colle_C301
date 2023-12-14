<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Flashcards</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">
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
				   <div class="front"><p>What does HTML stand for?</p></div>
				   <div class="back"><p>Hypertext Markup Language.</p></div>		
				</div>		
				</div>

		<!-- Second Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "alt" attribute in the "img" tag?</p></div>
				   <div class="back"><p> It provides alternative text for an image if it cannot be displayed.</p></div>		
				</div>		
				</div>

		<!-- Third Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between a "div" and a "span" in HTML?</p></div>
				   <div class="back"><p> "div" is a block-level element used for grouping content, while "span" is an inline-level element used for styling text within a line.</p></div>		
				</div>		
				</div>

		<!-- Fourth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the HTML element used to create a numbered list?</p></div>
				   <div class="back"><p>"ol" (ordered list).</p></div>		
				</div>		
				</div>

		<!-- Fifth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "target" attribute do in an HTML anchor tag?</p></div>
				   <div class="back"><p>It specifies where to open the linked document.</p></div>		
				</div>		
				</div>

		<!-- Sixth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "doctype" declaration in HTML? </p></div>
				   <div class="back"><p>It defines the document type and version of HTML.</p></div>		
				</div>		
				</div>

		<!-- Seventh Card -->	
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the HTML tag used to create a table?</p></div>
				   <div class="back"><p>"table".</p></div>		
				</div>		
				</div>

		<!-- Eigth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "href" attribute in an HTML anchor tag?</p></div>
				   <div class="back"><p>It specifies the URL of the linked document.</p></div>		
				</div>		
				</div>

		<!-- Ninth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the difference between the "id" and "class" attributes in HTML?</p></div>
				   <div class="back"><p>"id" is used to uniquely identify an element, while "class" is used to define a group of elements.</p></div>		
				</div>		
				</div>

		<!-- Tenth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the HTML element used to define a section within a document?</p></div>
				   <div class="back"><p>"section".</p></div>		
				</div>		
				</div>

		<!-- Eleventh Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What does the "disabled" attribute do in an HTML input element? </p></div>
				   <div class="back"><p>It disables the input element so that it cannot be interacted with.</p></div>		
				</div>		
				</div>

		<!-- Twelfth Card -->
			 <div class="cards">
			 <div class="card">
				   <div class="front"><p>What is the purpose of the "form" attribute in an HTML input element?</p></div>
				   <div class="back"><p> It associates the input element with a specific form by specifying the form's id.</p></div>		
				</div>		
				</div>

			</div>
		</div>
	</main>
	
    <script src="{{ asset('assets/js/library.js') }}"></script>

</body>

</html>