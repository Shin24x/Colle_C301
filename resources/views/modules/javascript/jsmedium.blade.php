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
                
                <h2 style="text-align:left;">What is JavaScript?</h2>
                <br>
<P>Welcome to the MDN beginner's JavaScript course! In this article we will look at JavaScript from a high level, answering questions such as "What is it?" and "What can you do with it?", and making sure you are comfortable with JavaScript's purpose.</p>
<b>Prerequisites:</b><p>Basic computer literacy, a basic understanding of HTML and CSS.</p>
<b>Objective:</b><p>To gain familiarity with what JavaScript is, what it can do, and how it fits into a website.</p>
<br>
<h4 style="text-align:left;">A high-level definition</h4>
<p>JavaScript is a scripting or programming language that allows you to implement complex features on web pages — every time a web page does more than just sit there and display static information for you to look at — displaying timely content updates, interactive maps, animated 2D/3D graphics, scrolling video jukeboxes, etc. — you can bet that JavaScript is probably involved. It is the third layer of the layer cake of standard web technologies, two of which (HTML and CSS) we have covered in much more detail in other parts of the Learning Area.</p>

// image here 
<ul>
<li><b>HTML </b>is the markup language that we use to structure and give meaning to our web content, for example defining paragraphs, headings, and data tables, or embedding images and videos in the page.</li>
<li><b>CSS </b>is a language of style rules that we use to apply styling to our HTML content, for example setting background colors and fonts, and laying out our content in multiple columns.</P>
<li><b>JavaScript </b>is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else. (Okay, not everything, but it is amazing what you can achieve with a few lines of JavaScript code.)</P>
</ul>
<p>The three layers build on top of one another nicely. Let's take a button as an example. We can mark it up using HTML to give it structure and purpose:</p>
<br>
<h6 style="text-align:left;">HTML</h6>

// image here 

<p>Then we can add some CSS into the mix to get it looking nice:</p>

// image here 

// image here 

<p>And finally, we can add some JavaScript to implement dynamic behavior:</p>
<br>
<h6 style="text-align:left;">JS</h6>

// image here 

// image here 

<h4 style="text-align:left;">So what can it really do?</h4>
<p>The core client-side JavaScript language consists of some common programming features that allow you to do things like:</p>
<ul>
<li>Store useful values inside variables. In the above example for instance, we ask for a new name to be entered then store that name in a variable called name.</li>
<li>Operations on pieces of text (known as "strings" in programming). In the above example we take the string "Player 1: " and join it to the name variable to create the complete text label, e.g. "Player 1: Chris".</li>
<li>Running code in response to certain events occurring on a web page. We used a click event in our example above to detect when the label is clicked and then run the code that updates the text label.</li>
<li>And much more!</li>

</ul>
<p>What is even more exciting however is the functionality built on top of the client-side JavaScript language. So-called Application Programming Interfaces (APIs) provide you with extra superpowers to use in your JavaScript code.</p>
<p>APIs are ready-made sets of code building blocks that allow a developer to implement programs that would otherwise be hard or impossible to implement. They do the same thing for programming that ready-made furniture kits do for home building — it is much easier to take ready-cut panels and screw them together to make a bookshelf than it is to work out the design yourself, go and find the correct wood, cut all the panels to the right size and shape, find the correct-sized screws, and then put them together to make a bookshelf.</p>
<p>They generally fall into two categories.</p>

// image here 

<p><b>Browser APIs </b>are built into your web browser, and are able to expose data from the surrounding computer environment, or do useful complex things. For example:</p>
<ul>
<li>The <b>DOM (Document Object Model) API</b> allows you to manipulate HTML and CSS, creating, removing and changing HTML, dynamically applying new styles to your page, etc. Every time you see a popup window appear on a page, or some new content displayed (as we saw above in our simple demo) for example, that's the DOM in action. </li>
<li>The <b>Geolocation API</b> retrieves geographical information. This is how <b>Google Maps</b> is able to find your location and plot it on a map.</li>
<li>The <b>Canvas</b> and <b>WebGL</b> APIs allow you to create animated 2D and 3D graphics. People are doing some amazing things using these web technologies — see <b>Chrome Experiments</b> and <b>webglsamples.</b></li>
<li><b>Audio and Video APIs</b> like <b>HTMLMediaElement</b> and <b>WebRTC</b> allow you to do really interesting things with multimedia, such as play audio and video right in a web page, or grab video from your web camera and display it on someone else's computer (try our simple <b>Snapshot demo</b> to get the idea).</li>
</ul>

<p><b>Third party APIs</b> are not built into the browser by default, and you generally have to grab their code and information from somewhere on the Web. For example:</p>
<ul>
<li>The <b>Twitter API</b> allows you to do things like displaying your latest tweets on your website.</li>
<li>The <b>Google Maps API</b> and <b>OpenStreetMap API</b> allows you to embed custom maps into your website, and other such functionality.</li>
</ul>
<br>
<h4 style="text-align:left;">What is JavaScript doing on your page?</h4>
<P>Here we'll actually start looking at some code, and while doing so, explore what actually happens when you run some JavaScript in your page.</p>
<p>Let's briefly recap the story of what happens when you load a web page in a browser (first talked about in our How CSS works article). When you load a web page in your browser, you are running your code (the HTML, CSS, and JavaScript) inside an execution environment (the browser tab). This is like a factory that takes in raw materials (the code) and outputs a product (the web page).</p>

// image here 

<p>A very common use of JavaScript is to dynamically modify HTML and CSS to update a user interface, via the Document Object Model API (as mentioned above). Note that the code in your web documents is generally loaded and executed in the order it appears on the page. Errors may occur if JavaScript is loaded and run before the HTML and CSS that it is intended to modify. You will learn ways around this later in the article, in the Script loading strategies section.</p>
<br>

<h6 style="text-align:left;">Browser security</h6>
<p>Each browser tab has its own separate bucket for running code in (these buckets are called "execution environments" in technical terms) — this means that in most cases the code in each tab is run completely separately, and the code in one tab cannot directly affect the code in another tab — or on another website. This is a good security measure — if this were not the case, then pirates could start writing code to steal information from other websites, and other such bad things.</p>
<br>

<h6 style="text-align:left;">JavaScript running order</h6>
<p>When the browser encounters a block of JavaScript, it generally runs it in order, from top to bottom. This means that you need to be careful what order you put things in. For example, let's return to the block of JavaScript we saw in our first example:</p>
// image here 

<p>Here we are selecting a button (line 1), then attaching an event listener to it (line 3) so that when the button is clicked, the updateName() code block (lines 5–8) is run. The updateName() code block (these types of reusable code blocks are called "functions") asks the user for a new name, and then inserts that name into the button text to update the display.</p>
<p>If you swapped the order of the first two lines of code, it would no longer work — instead, you'd get an error returned in the browser developer console — Uncaught ReferenceError: Cannot access 'button' before initialization. This means that the button object has not been initialized yet, so we can't add an event listener to it.</p>
<br>
<h4 style="text-align:left;">Interpreted versus compiled code</h4>
<p>You might hear the terms <b>interpreted</b> and <b>compiled</b> in the context of programming. In interpreted languages, the code is run from top to bottom and the result of running the code is immediately returned. You don't have to transform the code into a different form before the browser runs it. The code is received in its programmer-friendly text form and processed directly from that.</p>
<p>Compiled languages on the other hand are transformed (compiled) into another form before they are run by the computer. For example, C/C++ are compiled into machine code that is then run by the computer. The program is executed from a binary format, which was generated from the original program source code.</p>
<p>JavaScript is a lightweight interpreted programming language. The web browser receives the JavaScript code in its original text form and runs the script from that. From a technical standpoint, most modern JavaScript interpreters actually use a technique called just-in-time compiling to improve performance; the JavaScript source code gets compiled into a faster, binary format while the script is being used, so that it can be run as quickly as possible. However, JavaScript is still considered an interpreted language, since the compilation is handled at run time, rather than ahead of time.</p>
<p>There are advantages to both types of language, but we won't discuss them right now.</p>
<br>
<h4 style="text-align:left;">Server-side versus client-side code</h4>
<p>You might also hear the terms <b>server-side</b> and <b>client-side</b> code, especially in the context of web development. Client-side code is code that is run on the user's computer — when a web page is viewed, the page's client-side code is downloaded, then run and displayed by the browser. In this module we are explicitly talking about <b>client-side JavaScript.</b></P>
<p>Server-side code on the other hand is run on the server, then its results are downloaded and displayed in the browser. Examples of popular server-side web languages include PHP, Python, Ruby, ASP.NET, and even JavaScript! JavaScript can also be used as a server-side language, for example in the popular Node.js environment — you can find out more about server-side JavaScript in our Dynamic Websites – Server-side programming topic.</p>
<br>
<h4 style="text-align:left;">Dynamic versus static code</h4>
<p>The word <b>dynamic</b> is used to describe both client-side JavaScript, and server-side languages — it refers to the ability to update the display of a web page/app to show different things in different circumstances, generating new content as required. Server-side code dynamically generates new content on the server, e.g. pulling data from a database, whereas client-side JavaScript dynamically generates new content inside the browser on the client, e.g. creating a new HTML table, filling it with data requested from the server, then displaying the table in a web page shown to the user. The meaning is slightly different in the two contexts, but related, and both approaches (server-side and client-side) usually work together.</p>
<p>A web page with no dynamically updating content is referred to as static — it just shows the same content all the time.</P>
<br>
<h4 style="text-align:left;">How do you add JavaScript to your page?</h4>
<p>JavaScript is applied to your HTML page in a similar manner to CSS. Whereas CSS uses < link> elements to apply external stylesheets and < style> elements to apply internal stylesheets to HTML, JavaScript only needs one friend in the world of HTML — the < script> element. Let's learn how this works.</p>
<br>

<h6 style="text-align:left;">Internal JavaScript</h6>

<ol>
<li>First of all, make a local copy of our example file <b>apply-javascript.html.</b> Save it in a directory somewhere sensible.</li>
<li>Open the file in your web browser and in your text editor. You'll see that the HTML creates a simple web page containing a clickable button.</li>
<li>Next, go to your text editor and add the following in your head — just before your closing < /head> tag: <br>HTML</li>

// image here 

<li>Now we'll add some JavaScript inside our <b>< script></b> element to make the page do something more interesting — add the following code just below the "// JavaScript goes here" line: <br>JS</li>

// image here 

<li>Save your file and refresh the browser — now you should see that when you click the button, a new paragraph is generated and placed below.</li>
</ol>
<br>

<h6 style="text-align:left;">External JavaScript</h6>
<p>This works great, but what if we wanted to put our JavaScript in an external file? Let's explore this now.</p>
<ol>
<li>First, create a new file in the same directory as your sample HTML file. Call it script.js — make sure it has that .js filename extension, as that's how it is recognized as JavaScript.</li>
<li>Replace your current <b>< script></b> element with the following: <br>JS</li>

// image here 

<li>Save and refresh your browser, and you should see the same thing! It works just the same, but now we've got our JavaScript in an external file. This is generally a good thing in terms of organizing your code and making it reusable across multiple HTML files. Plus, the HTML is easier to read without huge chunks of script dumped in it.</li>
<br>
</ol>
<h6 style="text-align:left;">Inline JavaScript handlers</h6>
<p>Note that sometimes you'll come across bits of actual JavaScript code living inside HTML. It might look something like this: <br>JS</p>
// image here 

<p>HTML</p>

// image here 

<p>You can try this version of our demo below.</p>

// image here 

<p>This demo has exactly the same functionality as in the previous two sections, except that the < button> element includes an inline onclick handler to make the function run when the button is pressed.</p>

<p><b>Please don't do this, however.</b> It is bad practice to pollute your HTML with JavaScript, and it is inefficient — you'd have to include the onclick="createParagraph()" attribute on every button you want the JavaScript to apply to.</p>
<br>

<h6 style="text-align:left;">Using addEventListener instead</h6>
<p>Instead of including JavaScript in your HTML, use a pure JavaScript construct. The querySelectorAll() function allows you to select all the buttons on a page. You can then loop through the buttons, assigning a handler for each using addEventListener(). The code for this is shown below:<br> JS</P>

// image here 

<p>This might be a bit longer than the onclick attribute, but it will work for all buttons — no matter how many are on the page, nor how many are added or removed. The JavaScript does not need to be changed.</p>

<br>

<h6 style="text-align:left;">Script loading strategies</h6>
<p>There are a number of issues involved with getting scripts to load at the right time. Nothing is as simple as it seems! A common problem is that all the HTML on a page is loaded in the order in which it appears. If you are using JavaScript to manipulate elements on the page (or more accurately, the Document Object Model), your code won't work if the JavaScript is loaded and parsed before the HTML you are trying to do something to.</p>
<p>In the above code examples, in the internal and external examples the JavaScript is loaded and run in the head of the document, before the HTML body is parsed. This could cause an error, so we've used some constructs to get around it.</p>
<p>In the internal example, you can see this structure around the code:<br>JS</p>

// image here 

<p>This is an event listener, which listens for the browser's DOMContentLoaded event, which signifies that the HTML body is completely loaded and parsed. The JavaScript inside this block will not run until after that event is fired, therefore the error is avoided (you'll learn about events later in the course).</p>

<p>In the external example, we use a more modern JavaScript feature to solve the problem, the defer attribute, which tells the browser to continue downloading the HTML content once the <p script> tag element has been reached.<br>HTML</p>

// image here 

<p>In this case both the script and the HTML will load simultaneously and the code will work.</p>

<p>An old-fashioned solution to this problem used to be to put your script element right at the bottom of the body (e.g. just before the </body> tag), so that it would load after all the HTML has been parsed. The problem with this solution is that loading/parsing of the script is completely blocked until the HTML DOM has been loaded. On larger sites with lots of JavaScript, this can cause a major performance issue, slowing down your site.</p>

<i>async and defer</i>
<p>There are actually two modern features we can use to bypass the problem of the blocking script — async and defer (which we saw above). Let's look at the difference between these two.</p>
<p>Scripts loaded using the async attribute will download the script without blocking the page while the script is being fetched. However, once the download is complete, the script will execute, which blocks the page from rendering. This means that the rest of the content on the web page is prevented from being processed and displayed to the user until the script finishes executing. You get no guarantee that scripts will run in any specific order. It is best to use async when the scripts in the page run independently from each other and depend on no other script on the page.</p>
<p>Scripts loaded with the defer attribute will load in the order they appear on the page. They won't run until the page content has all loaded, which is useful if your scripts depend on the DOM being in place (e.g. they modify one or more elements on the page).</p>
<p>Here is a visual representation of the different script loading methods and what that means for your page:</p>

// image here 

<p>This image is from the HTML spec, copied and cropped to a reduced version, under CC BY 4.0 license terms.</p>

<p>For example, if you have the following script elements:<br>HTML</p>

// image here 

<p>You can't rely on the order the scripts will load in. jquery.js may load before or after script2.js and script3.js and if this is the case, any functions in those scripts depending on jquery will produce an error because jquery will not be defined at the time the script runs.</p>
<p>async should be used when you have a bunch of background scripts to load in, and you just want to get them in place as soon as possible. For example, maybe you have some game data files to load, which will be needed when the game actually begins, but for now you just want to get on with showing the game intro, titles, and lobby, without them being blocked by script loading.</p>
<p>Scripts loaded using the defer attribute (see below) will run in the order they appear in the page and execute them as soon as the script and content are downloaded:<br>HTML</p>

// image here 

<p>In the second example, we can be sure that jquery.js will load before script2.js and script3.js and that script2.js will load before script3.js. They won't run until the page content has all loaded, which is useful if your scripts depend on the DOM being in place (e.g. they modify one or more elements on the page).</p>
<p>To summarize:</p>

<ol>

<li>async and defer both instruct the browser to download the script(s) in a separate thread, while the rest of the page (the DOM, etc.) is downloading, so the page loading is not blocked during the fetch process.</li>
<li>scripts with an async attribute will execute as soon as the download is complete. This blocks the page and does not guarantee any specific execution order.</li>
<li>scripts with a defer attribute will load in the order they are in and will only execute once everything has finished loading.</li>
<li>If your scripts should be run immediately and they don't have any dependencies, then use async.</li>
<li>If your scripts need to wait for parsing and depend on other scripts and/or the DOM being in place, load them using defer and put their corresponding < script> elements in the order you want the browser to execute them.</li>

</ol>

<br>
<h4 style="text-align:left;">Comments</h4>
<p>As with HTML and CSS, it is possible to write comments into your JavaScript code that will be ignored by the browser, and exist to provide instructions to your fellow developers on how the code works (and you, if you come back to your code after six months and can't remember what you did). Comments are very useful, and you should use them often, particularly for larger applications. There are two types:</p>

<ul>

<li>A single line comment is written after a double forward slash (//), e.g.<br>JS</li>

// image here 

<li>A multi-line comment is written between the strings /* and */, e.g.<br>JS</li>

// image here 

<li>So for example, we could annotate our last demo's JavaScript with comments like so:<br>JS</li>

// image here 
</ul>





            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></>
    



    </body>
  </html>