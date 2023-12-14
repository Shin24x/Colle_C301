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
                
                <h2 style="text-align:left;">1. Asynchronous Programming</h2>
                <br>
<p>JavaScript is a single-threaded language, meaning it can execute only one piece of code at a time. However, it can handle asynchronous operations efficiently using callbacks, promises, and async/await.</p>
<br>
<h2 style="text-align:left;">Callbacks</h2>
<p>Callbacks are functions passed as arguments to other functions to be executed later, commonly used in asynchronous operations.</p>
<p>Example:</p>

<img src="{{ asset('assets/images/scripthard1.png') }}">
<br>
<h2 style="text-align:left;">Promises</h2>
<p>Promises represent a value that might not be available yet. They can be in one of three states: pending, fulfilled, or rejected. They help manage asynchronous operations more effectively than callbacks.</p>
<p>Example:</p>

<img src="{{ asset('assets/images/scripthard2.png') }}">

<br>
<h2 style="text-align:left;">Async/Await:</h2>

<p>Async functions enable writing asynchronous code that looks synchronous, making it easier to read and maintain.</p>
<p>Example:</p>

<img src="{{ asset('assets/images/scripthard3.png') }}">
<br>
<h2 style="text-align:left;">2. Event Loop</h2>
<p>The Event Loop is a fundamental concept in JavaScript's concurrency model. It manages the execution of code, handling asynchronous operations and callbacks.</p>
<b>How the Event Loop Works:</b>
<ul>
<li>JavaScript runtime consists of a Call Stack, Web APIs, Callback/Message Queue, and Event Loop.</li>
<li>Call Stack manages the execution of synchronous code.</li>
<li>Web APIs handle asynchronous tasks (e.g., setTimeout, HTTP requests).</li>
<li>Callback/Message Queue stores callbacks and messages waiting to be processed.</li>
<li>WEvent Loop checks the Message Queue and moves eligible callbacks/messages to the Call Stack for execution.</li>
</ul>
<p>Understanding this mechanism is crucial for writing non-blocking and responsive JavaScript applications.</p>
<h2 style="text-align:left;">Conclusion</h2>
<p>Asynchronous programming and the Event Loop are challenging but critical concepts in JavaScript. Mastering them allows developers to write efficient, responsive, and scalable code.</p>
<br>
<p>Let's dive deeper into a few advanced aspects related to asynchronous JavaScript and the Event Loop.</p> 
<br>
<h2 style="text-align:left;">Advanced Asynchronous JavaScript</h2>
<h4 style="text-align:left;">1. Microtasks and Macrotasks</h4>
<p>JavaScript handles asynchronous tasks via a queue system consisting of microtasks and macrotasks. Understanding their execution order is crucial for managing asynchronous code effectively.</p>
<ul>
    <li>
    Macrotasks: Represented by the browser's APIs (e.g., setTimeout, setInterval, I/O), these are executed via the Event Loop after the current execution context is empty.
    </li>
    <li>
    Microtasks: Executed after the current task and before the Event Loop checks for UI rendering or IO tasks. Examples include Promises (resolved/rejected) and process.nextTick in Node.js.
    </li>
</ul>
<img src="{{ asset('assets/images/scripthard4.png') }}">

<p>The output will be:</p>
<img src="{{ asset('assets/images/scripthard5.png') }}">
<h4 style="text-align:left;">2. Handling Concurrency and Parallelism</h4>

<p>JavaScript being single-threaded doesn't directly support parallelism, but it can achieve concurrent behavior through techniques like Web Workers and the Worker API. Web Workers allow running scripts in the background without affecting the UI responsiveness.</p>
<p>Example using Web Workers:</p>

<img src="{{ asset('assets/images/scripthard6.png') }}">

<h4 style="text-align:left;">3. Performance Optimization with Async Operations</h4>
<p>Optimizing asynchronous operations involves techniques like debouncing and throttling to control the frequency of function executions, reducing unnecessary calls and improving performance.</p>
<p>Example using debouncing:</p>

<img src="{{ asset('assets/images/scripthard7.png') }}">

<b>Conclusion</b>

<p>Mastering asynchronous JavaScript and understanding the Event Loop, microtasks, and macro tasks empowers developers to write efficient, non-blocking code. Techniques like Web Workers and performance optimization strategies further enhance application responsiveness and user experience.</p>
<p>Feel free to explore these concepts deeper and experiment with various scenarios to solidify your understanding and harness the full potential of JavaScript's asynchronous nature.</p>





            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>