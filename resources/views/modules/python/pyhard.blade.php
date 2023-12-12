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
                
                <h2 style="text-align:left;">Python Modules</h2>
                <br>
<p>Python programming language becomes one of the most popular languages. When we write the codes for Production level Data Science Projects, what happens is that our Python code grows in size, and as a result most probably it becomes unorganized over time. So, keeping your code in the same file as it grows makes your code difficult to maintain and debug.</p>
<p>So, to resolve these kinds of issues, Python modules help us to organize and group the content by using files and folders. This modular programming approach where we have broken the code into separate parts is where python modules come into the picture.</p>
<p>With the help of modules, we can organize related functions, classes, or any code block in the same file. So, It is considered a best practice while writing bigger codes for production-level projects in Data Science is to split the large Python code blocks into modules containing up to 300–400 lines of code.</p>
<p>The module contains the following components:</p>

<ul>
<li>Definitions and implementation of classes,</li>
<li>Variables, and</li>
<li>Functions that can be used inside another program.</li>                
</ul>

<b>Let’s try to gain more understanding of the concept with the help of an example:</b>
<p>Suppose we want to make an application for a calculator. We want to include few operations in our application such as addition, subtraction, multiplication, division, etc.</p>
<p>Now, here what we will be doing is to break the complete code into separate parts and simply create one module for all these operations or separate modules for each of the operations. And then we can call these modules in our main program logic.</p>
<p>Here the core idea is to minimize the code, and if we create modules, it doesn’t mean we can only use it for this program, but we can even call these modules for other programs as well.</p>

// image here 

<p>Now that we have understood the concept of modules, let us try to understand how we can create and use a module in python and also see some other functionalities related to Modules.</p>
<b>How to create Python Modules?</b>
<p>To create a module, we have to save the code that we wish in a file with the file extension “.py”. Then, the name of the Python file becomes the name of the module.</P>
<b>For Example</b>
<p>In this program, a function is created with the name <b>“welcome”</b> and save this file with the name <b>mymodule.py</b> i.e. name of the file, and with the extension <b>“.py”.</b></p>
<p>We saved the following code in a file named <b>mymodule.py</b></p>

// image here 

<br>
<h4 style="text-align:left;">How to use Python Modules?</h4>
<p>To incorporate the module into our program, we will use the <b>import keyword,</b> and to get only a few or specific methods or functions from a module, we use the <b>from keyword.</b></p>
<p><b>NOTE:</b> When we are using a function from a module, then we use the following syntax:</p>
<p>module_name.function_name<br>Now to use the module which we have just created, we are using the import statement:</p>
<b>For Example,</b>
<p>In this example, we will Import the module named mymodule, and then call the welcome function with a given argument:</p>

// image here 

<b>Output:</b>
<p>Hello, Jonathan</p>

<br>
<h4 style="text-align:left;">Variables in Python Modules</h4>
<p>The module can contain functions, as already described, but can also contain variables of all types such as arrays, dictionaries, objects, etc.</p>
<b>For Example</b>
<p>Save this code in the file <b>mymodule.py</b></p>
<b>For Example</b>

// image here 

<p>In this example, we will Import the module named mymodule, and then try to access the person1 dictionary components:</p>

// image here 

<b>Output:</b>

<p>36</p>

<br>
<h4 style="text-align:left;">How to rename a Python Module?</h4>
<p>We can name the file of the module whatever you like, but we have to note that it must have the file extension <b>“.py”.</b></p>
<p>To rename the module name, we can create an alias when you import a module, with the help of the <b>as keyword:</b></p>

<b>For Example,</b>

<p>Create an alias for mymodule with the name <b>mx_module:</b></p>

// image here 

<b>Output:</b>
<p>36</p>

<br>
<h4 style="text-align:left;">How does Import from Modules work?</h4>
<p>If we want to choose to import only some parts from a module, then we can do this with the help of the <b>from keyword.</b></p>
<b>For Example,</b>
<p>Now, we have a module named <b>mymodule</b> that has one function and one dictionary:</p>

// image here 

<p>Now, Let’s try to Import only the person1 dictionary from the module named <b>mymodule:</b></p>

// image here 

<b>Output:</b>
<p>36</p>

<p><b>NOTE:</b> Here we have to note that when we try to import using the from keyword, then do not use the module name when referring to elements in the module.</p>
<b>For Example,</b>

<p>Use <b>person1[“age”],</b> not <b>mymodule.person1[“age”]</b></p>

<br>
<h4 style="text-align:left;">Re-naming a Module</h4>
<p>You can create an alias when you import a module, by using the as keyword:</p>

// image here 

<b>Output:</b>
<p>36</p>

<b>Advantages of Modules</b>
<p>Some of the advantages while working with modules in Python is as follows:</p>
<br>
<b>Reusability</b>
<p>Working with modules makes the code reusable.</p>

<b>Simplicity</b>
<p>The module focuses on a small proportion of the problem, rather than focusing on the entire problem.</p>

<b>Scoping</b>
<p>A separate namespace is defined by a module that helps to avoid collisions between identifiers.</p>

<b>Python Built-in Modules</b>
<p>As we know that the Python interactive shell has a number of built-in functions. As a shell start, these functions are loaded automatically and are always available, such as,</p>As we know that the Python interactive shell has a number of built-in functions. As a shell start, these functions are loaded automatically and are always available, such as,</p>

<ul>
<li>print() and input() for I/O,</li>
<li>Number conversion functions such as int(), float(), complex(),</li>
<li>Data type conversions such as list(), tuple(), set(), etc.</li>
</ul>

<p>In addition to these many built-in functions, there are also a large number of pre-defined functions available as a part of libraries bundled with Python distributions. These functions are defined in modules which are known as built-in modules.</p>
<p>These built-in modules are written in C language and integrated with the Python shell.</p>
<p>To display a list of all of the available modules in Python Programming Language, we can use the following command in the Python console:</p>

<b>help('modules') </b>

<p>The output to the above code is shown below:</p>

// image here 

<p>Now, let’s discuss some of the useful and frequently used built-in modules of Python.</p>

<ul>
<li>Math Module</li>
<li>Statistics Module</li>
</ul>

<b>Working with Math Module of Python</b>
<p>Some of the most popular mathematical functions that are defined in the math module include,</p>
<ul>
<li>Trigonometric functions</li>
<li>Representation functions</li>
<li>Logarithmic functions</li>
<li>Angle conversion functions, etc.</li>

</ul>

<p>In addition, two mathematical constants- pi and e are also defined in this module.</p>

<p>In Mathematics, Pi is a well-known mathematical constant. Its value is <b>3.141592653589793.</b></p>

<p>>>> import math<br>>>> math.pi<br>3.141592653589793<br>Another well-known mathematical constant is e, which is known as Euler’s number. Its value equals 2.718281828459045.</p>
<p>>>> import math<br>>>> math.e<br>2.718281828459045</p>

<b>Trigonometric Ratios</b>
<p>For calculating various trigonometric ratios for a given angle, the math module contains several functions. The trigonometric functions such as sin, cos, tan, etc. take the angle argument in radians. While we are used to expressing the angle in degrees. In the math module, we have two angle conversion functions that help us to convert the angle from degrees to radians and vice versa:</p>


<ul>
<li>degrees()</li>
<li>radians()</li>
</ul>

<b>For Example,</b>

<p>In this example, we will be converting the angle of 30 degrees to radians and then back again to the degree.</p>

<P><b>NOTE:</b> π radians is equivalent to 180 degrees.</p>

<p>>>> import math>>> math.radians(30)<br>0.5235987755982988>>> math.degrees(math.pi/6)<br>29.999999999999996</p>

<b>For Example,</b>
<p>In this example, we will find the value of sin, cos, and tan ratios for the angle of 30 degrees which in radians is equal to 0.5235987755982988 radians.</p>
<p>>>> import math>>> math.sin(0.5235987755982988)<br>0.49999999999999994>>> math.cos(0.5235987755982988)<br>0.8660254037844387>>> math.tan(0.5235987755982988)<br>0.5773502691896257</p>
<p>You may also try some more functions of the math module such as math.log(), math.log10(), math.pow(). math.sqrt(), math.exp(), math.ceil(), math.floor(), etc.</p>

<b>Working with Statistics Module of Python</b>
<p>The statistics module provides functions to mathematical statistics of numeric data. Some of the popular statistical functions are defined in this module are as follows:</p>

<ul>
<li>Mean</li>
<li>Median</li>
<li>Mode</li>
<li>Standard Deviation</li>
</ul>

<b>Mean</b>
<p>The mean() method returns the arithmetic mean of the numbers present in a list.</p>

<b>For Example,</b>
<p>>>> import statistics<br>>>> statistics.mean([2,5,6,9]) <br>5.5</p>
<br>
<b>Media</b>
<p>The median() method returns the middle value of numeric data present in a list.</p>
<b>For Example,</b>
<p>>>> import statistics<br>>>> statistics.median([1,2,3,7,8,9])<br>5.0<br>>>> statistics.median([1,2,3,8,9]) <br>3.0</p>
<br>
<b>Mode</b>

<p>The mode() method returns the most common data point present in the list.</p>
<b>For Example,</b>
<p>>>> import statistics<br>>>> statistics.mode([2,5,3,2,8,3,9,4,2,5,6])<br>2</p>
<br>
<b>Standard Deviation</b>
<p>The stdev() method returns the standard deviation on a given sample in the form of a list.</p>
<b>For Example,</b>

<p>>>> import statistics<br>>>> statistics.stdev([1,1.5,2,2.5,3,3.5,4,4.5,5])<br>1.3693063937629153</p>

<p><b>NOTE:</b> There are also other modules in Python but here we discuss only two modules to understand how the concept of modules in Python works and you can similarly use the other Python built-in modules also.</p>



            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>