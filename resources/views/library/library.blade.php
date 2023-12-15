<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/library.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/Favicon.png') }}">

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
        <img src="{{ asset('assets/images/.jpg') }}" alt="" class="profile" />
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
 <div class="menupopup" id="info-menujavapopup"class="custom-select" style="width:400px;" align="center">
  
  <h1 align="center">Java</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="javamodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
  </div>
  <button onclick="javapop()">Open</button>
  <button onclick="closePopupjava()">Exit</button>
  
</div>

<div class="menupopup" id="info-menuhtmlpopup"class="custom-select" style="width:400px;" align="center">
  
  <h1 align="center">HTML</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
  </div>
<!-- need to add the link of the modules-->
  <button onclick="HTMLmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
  </div>
  <button onclick="htmlpop()">Open</button>
  <button onclick="closePopuphtml()">Exit</button>

  
</div>

<div class="menupopup" id="info-menujspopup"class="custom-select" style="width:400px;" align="center">
  <h1 align="center">JavaScript</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="javascriptmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="jspop()">Open</button>
  <button onclick="closePopupjs()">Exit</button>

  
</div>

<div class="menupopup" id="info-menucpluspopup"class="custom-select" style="width:400px;" align="center">
  <h1 align="center">C++</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="cplusmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="cpluspop()">Open</button>
  <button onclick="closePopupcplus()">Exit</button>

</div>


<div class="menupopup" id="info-menuphppopup"class="custom-select" style="width:400px;" align="center">
  
  <h1 align="center">PHP</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="phpmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="phppop()">Open</button>
  <button onclick="closePopupphp()">Exit</button>
  
</div>

<div class="menupopup" id="info-menupypopup"class="custom-select" style="width:400px;" align="center">
  
  <h1 align="center">Python</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="pymodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="pypop()">Open</button>
  <button onclick="closePopuppy()">Exit</button>
  
  
</div>

<div class="menupopup" id="info-menusqlpopup"class="custom-select" style="width:400px;" align="center">
  <h1 align="center">SQL</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="sqlmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="sqlpop()">Open</button>
  <button onclick="closePopupsql()">Exit</button>
  
</div> 

<div class="menupopup" id="info-menucsharppopup"class="custom-select" style="width:400px;" align="center">
  <h1 align="center">C#</h1>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><h2>Module</h2></c>
</div>
<!-- need to add the link of the modules-->
  <button onclick="csharpmodulebtn()">Open</button>
  <div style="width: 150px; height: 50px; border:1px solid black; background-color:#FFAF4D;border-radius:10px;">
  <c><H2>Quiz</H2></c>
</div>
  <button onclick="csharppop()">Open</button>
  <button onclick="closePopupcsharp()">Exit</button>
  

</div> 




    <div class="popup" id="info-javapop">
      <h2>Java Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnjava()">Close</button>
      
    </div>

    <div class="popup" id="info-htmlpop">
      <h2>HTML Difficulty</h2>
      <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnhtml()">Close</button>
      
    </div>
    
    <div class="popup" id="info-jspop">
      <h2>JS Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnjs()">Close</button>
      
    </div>


    <div class="popup" id="info-cpluspop">
      <h2>C++ Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtncplus()">Close</button>
      
    </div>
    
    <div class="popup" id="info-phppop">
      <h2>PHP Difficulty</h2>
      <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnphp()">Close</button>
      
    </div>

    <div class="popup" id="info-pypop">
      <h2>Python Difficulty</h2>
   <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnpy()">Close</button>
      
    </div>

    <div class="popup" id="info-sqlpop">
      <h2>SQL Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtnsql()">Close</button>
      
    </div>
    
    <div class="popup" id="info-csharppop">
      <h2>C# Difficulty</h2>
       <!--<button onclick="closePopup()">Cancel</button>-->
      <button onclick="easybtn()">Easy</button>
      <button onclick="mediumbtn()">Medium</button>
      <button onclick="hardbtn()">Hard</button>
	  <button onclick="exitbtncsharp()">Close</button>
    </div> 



     <!--for modules-->
     <div class="popup" id="info-javaMpop">
     <h2>Java Difficulty</h2>
      <button onclick="javamodulebtn1()">Easy</button>
      <button onclick="javamodulebtn2()">Medium</button>
      <button onclick="javamodulebtn3()">Hard</button>
      <button onclick="exitbtnjavaM()">Close</button>
    </div>
    
    <div class="popup" id="info-HTMLMpop">
    <h2>HTML Difficulty</h2>
      <button onclick="HTMLmodulebtn1()">Easy</button>
      <button onclick="HTMLmodulebtn2()">Medium</button>
      <button onclick="HTMLmodulebtn3()">Hard</button>
	  <button onclick="exitbtnHTMLM()">Close</button>
      
    </div>
    
    <div class="popup" id="info-javascriptMpop">
    <h2>JavaScript Difficulty</h2>
      <button onclick="javascriptmodulebtn1()">Easy</button>
      <button onclick="javascriptmodulebtn2()">Medium</button>
      <button onclick="javascriptmodulebtn3()">Hard</button>
	  <button onclick="exitbtnjavascriptM()">Close</button>
      
    </div>
      
    </div>
    
    <div class="popup" id="info-phpMpop">
    <h2>PHP Difficulty</h2>
      <button onclick="phpmodulebtn1()">Easy</button>
      <button onclick="phpmodulebtn2()">Medium</button>
      <button onclick="phpmodulebtn3()">Hard</button>
      <button onclick="exitbtnphpM()">Close</button>
      
    </div>

    <div class="popup" id="info-pyMpop">
    <h2>Python Difficulty</h2>
      <button onclick="pymodulebtn1()">Easy</button>
      <button onclick="pymodulebtn2()">Medium</button>
      <button onclick="pymodulebtn3()">Hard</button>

	  <button onclick="exitbtnpyM()">Close</button>
      
    </div>

    <div class="popup" id="info-sqlMpop">
    <h2>SQL Difficulty</h2>
      <button onclick="sqlmodulebt1()">Easy</button>
      <button onclick="sqlmodulebt2()">Medium</button>
      <button onclick="sqlmodulebt3()">Hard</button>

	  <button onclick="exitbtnsqlM()">Close</button>
      
    </div>



    <!-- JavaScript -->
    <script src="{{ asset('assets/js/library.js') }}"></script>
    



  </body>
</html>