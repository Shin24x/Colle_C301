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
                
                <h2 style="text-align:center;">What Are Java Variables and Data Types?</h2>
                <br>
                <p >What is a Variable in Java?</p>
                <p>Variable in Java is a data container that stores the data values during Java program execution. Every variable is assigned data type which designates the type and quantity of value it can hold. Variable is a memory location name of the data. The Java variables have mainly three types : Local, Instance and Static.</p>               
                <p >In order to use a variable in a program you to need to perform 2 steps:</p>
                <ol>
                    <li>Variable Declaration</li>
                    <li>Variable Initialization</li>
                </ol>
                <p>In this Java tutorial, you will learn-</p>
                <ul>
                    <li>Variable Declaration</li>
                    <li>Variable Initialization</li>
                    <li>Types of variables</li>
                    <li>Data Types in Java</li>
                    <li>Type Conversion & Type Casting</li>
                </ul>
                <p>Variable Declaration: <br>To declare a variable, you must specify the data type & give the variable a unique name.</p>


                <b>Examples of other Valid Declarations are</b>
                <ul>
                <li>int a,b,c;</li>
                <li>float pi;</li>
                <li>double d;</li>
                <li>char a;</li>
                </ul>
                <b>Variable Initializationare</b>
                <p>To initialize a variable, you must assign it a valid value.</p>

                <b>Example of other Valid Initializations are</b>
                <ul>
                <li>pi =3.14f;</li>
                <li>do =20.22d;</li>
                <li>a=’v’;</li>
                </ul>
                <p>You can combine variable declaration and initialization.</p>
                <b>Example :</b>
                <ul>
                <li>int a=2,b=4,c=6;</li>
                <li>float pi=3.14f;</li>
                <li>double do=20.22d;</li>
                <li>char a=’v’;</li>
                </ul>
                <b>Types of variables</b>
                <p>In Java, there are three types of variables:</p>
                <ol>
                <li>Local Variables</li>
                <li>Instance Variables</li>
                <li>Static Variables</li>
                </ol>
                <ol>
                <li>Local Variables</li>
                <p>Local Variables are a variable that are declared inside the body of a method.</p>
                <li>Instance Variables</li>
                <p>Instance variables are defined without the STATIC keyword .They are defined Outside a method declaration. They are Object specific and are known as instance variables.</p>
                <li>Static Variables</li>
                <p>Static variables are initialized only once, at the start of the program execution. These variables should be initialized first, before the initialization of any instance variables.</p>
                </ol>

                <b>Example: Types of Variables in Java</b>
                <p>class Guru99 {<br>
    static int a = 1; //static variable <br>
    int data = 99; //instance variable  <br>
    void method() {<br>
        int b = 90; //local variable  <br>
       }<br>
}<br>
</p>
                
            
              <b>What is Data Types in Java?</b>
              <p>Data Types in Java are defined as specifiers that allocate different sizes and types of values that can be stored in the variable or an identifier. Java has a rich set of data types. Data types in Java can be divided into two parts :</P>
                <ol>
                <li>Primitive Data Types :- which include integer, character, boolean, and float</li>
                <li>Non-primitive Data Types :- which include classes, arrays and interfaces.</li>
</ol>
            <b>Primitive Data Types</b>
            <p>Primitive Data Types are predefined and available within the Java language. Primitive values do not share state with other primitive values.</p>
            <p>There are 8 primitive types: byte, short, int, long, char, float, double, and boolean</p>

            <b>Integer data types</b>
            <ol>

            <li>byte (1 byte)</li>
            <li>short (2 bytes)</li>
            <li>int (4 bytes)</li>
            <li>long (8 bytes)</li>
            </ol>
            <b>Floating Data Type</b>
            <ol>

            <li>float (4 bytes)</li>
            <li>double (8 bytes)</li>
            </ol>

            <b>Floating Data Type</b>
            <ol>

            <li>char (2 bytes)</li>
            </ol>
            <b>Logical</b>
            <ol>

            <li>boolean (1 byte) (true/false)</li>
            </ol>

            <br>
            <b>Points to Remember:</B>
            <ul>
            <li>All numeric data types are signed(+/-).</li>
            <li>The size of data types remain the same on all platforms (standardized)</li>
            <li>char data type in Java is 2 bytes because it uses UNICODE character set. By virtue of it, Java supports internationalization. UNICODE is a character set which covers all known scripts and language in the world</li>
            <ul>
</ul>


                


                
            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>