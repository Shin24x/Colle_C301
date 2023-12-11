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
                
                <h2 style="text-align:center;">What is Data Types in PHP</h2>
                <br>
                <p>Data Types are a core component of programming language.A Data type refers to the type of data a variable can store.</p>
                <p>PHP supports eight primitive types</p>
                <h6>Four scalar types:</h6>
                <ol>
                  <li>Boolean <p>- Booleans were introduced for the first time in PHP 4. A Boolean value can be either true or false.</p></li>
                  <li>Integer <p>- Integers can be written in decimal, hexadecimal, and octal notation.</p></li>
                  <li>Float <p>- Floating-point numbers is also known as real numbers.</p></li>
                  <li>String<p>- Strings are a sequence of characters in PHP.</p></li>
                </ol>
                <h6>Two compound types:</h6>
                <ol>
                  <li>Array <p>- An array in PHP is a collection of key/value pairs.</p></li>
                  <li>Object <p>- An Object is an individual instance of the data structure defined by a class.</p></li>
                </ol>
                <h6>Two special types:</h6>
                <ol>
                  <li>Resource <p>- Resources is a special data type which represents a PHP resource such as a database query, an open file, a database connection.</p></li>
                  <li>NULL <p>- Null is a data type with only one possible value is the NULL value.</p></li>
                </ol>
                <p>PHP is a loosely coupled language so you don’t need to define data types explicitly. PHP determines the data types by data assigned to the variable. PHP implicitly supports the following data types.PHP also allows you to cast the data type. This is known as explicit casting.In below section, we have explained type casting with an example.</p>
                <br>
                <h2 style="text-align:center;">What is Variable in PHP</h2> 
                <br>
                <p>Variables are the core of part for your code which makes your value flexible.Variables are used for storing values, like text strings, numbers or arrays.</p>
                <p>Variables are denoted by $ symbol followed by the variable’s name in PHP. .A variable is a name of the value that stores data at run-time. The variable scope determines its visibility. A global variable is accessible to all the scripts in an application. A local variable is only accessible to the script that it was defined in.</p>
                <p>Variables are used to store data and provide stored data when needed and to assign a value to a variable in PHP is quite easy.To assign a value to a variable, use an equals sign (=).</p>
                <h6>Variable Naming Rules:</h6>
                <ol>
                  <li>All variable names must start with the dollar sign.</li>
                  <img src="{{ asset('assets/images/phphard1.png') }}">
                  <li>Names of variables are case sensitive this means $var_name is different from $VAR_NAME.</li>
                  <img src="{{ asset('assets/images/phphard2.png') }}">
                  <li>All variables names must start with a letter follow other characters <p>- e.g. $var_name1. $1var_name is not a legal variable name.</p></li>
                  <li>Variable names must not contain any spaces, $var name is not a legal variable name. You can use an underscore in place of the space <p>- e.g.$var_name.</p></li>
                </ol>
                <p>Let's now look at how PHP determines the data type depending on the attributes of the supplied data</p>
                <h6>Example:</h6>
                <img src="{{ asset('assets/images/phphard3.png') }}">
                <br>
                <br>
                <h2 style="text-align:center;">Variable Type Casting</h2>
                <br>
                <p>To Perform arithmetic operations using variables,you require the variables to be of the same data type.Type casting is converting a variable or value into the desired data type. This is very useful when performing arithmetic operations that require variables to be of the same datatype.</p>
                <p>Here is the example of Variable</p>
                <img src="{{ asset('assets/images/phphard4.png') }}">
                <p>Type casting in PHP is performed by the interpreter. PHP also allows you to cast the data type. This is known as explicit casting.The var_dump function is used to determine the data type.</p>
                <p>Here we use the same code used above in variable section to demonstrates the var_dump function.</p>
                <img src="{{ asset('assets/images/phphard5.png') }}">
                <br>
                <h2 style="text-align:center;">What is Constant?</h2>
                <br>
                <p>A constant is an identifier (variable) for a simple value. The value cannot be changed during the script.Suppose you are developing a program that uses the value of PI 3.14, you can use a constant to store its value.</p>
                <p>Let's see the example of constant to assign value 3.14 to PI</p>
                <img src="{{ asset('assets/images/phphard6.png') }}">
                <p>Once you define PI as 3.14 and if you try to reassign value to constant,it will generate an error.A valid constant name starts with a letter or underscore (no $ sign before the constant name).</p>
                <p>Note: Unlike variables, constants are automatically global across the entire script. There are two built-in constants, TRUE and FALSE (case-insensitive), which represent the two possible boolean values.</p>
                <br>
                <h2 style="text-align:center;">What are Operators?</h2>
                <br>
                <p>PHP offers several types of Operators and we will learn here</p>
                <h6>Arithmetic operators</h6>
                <p>Arithmetic operators are used to performing arithmetic operations on numeric data. The concatenate operator works on strings values too. PHP supports the following operators.</p>
                <img src="{{ asset('assets/images/phphard7.png') }}">
                <h6>Assignment Operators</h6>
                <p>Assignment operators are used to assigning values to variables. They can also be used together with arithmetic operators.</p>
                <p>Operator Name Description Example Output</p>
                <img src="{{ asset('assets/images/phphard8.png') }}">
                <h6>Comparison operators</h6>
                <p>Comparison operators are used to comparing values and data types.</p>
                <img src="{{ asset('assets/images/phphard9.png') }}">
                <h6>Logical operators</h6>
                <p>When working with logical operators, any number greater than or less than zero (0)evaluates to true. Zero (0) evaluates to false.</p>
                <img src="{{ asset('assets/images/phphard10.png') }}">

            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>