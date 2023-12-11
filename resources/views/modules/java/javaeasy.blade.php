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
                
                <h2 style="text-align:center;">What is Java?</h2>
                <br>
                <p>Java is a popular programming language, created in 1995. It is owned by Oracle, and more than 3 billion devices run Java.</p>
                <p >It is used for:</p>
                <ul>
                    <li>Mobile applications (especially Android apps)</li>
                    <li>Desktop applications</li>
                    <li>Web applications</li>
                    <li>Web servers and application servers</li>
                    <li>Games</li>
                    <li>Database</li>
                </ul>
                <h2 style="text-align:center;">Why is Java?</h2> 
                <br>
                <ul>
                    <li>Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
                    <li>It is one of the most popular programming language in the world</li>
                    <li>It has a large demand in the current job market</li>
                    <li>It is easy to learn and simple to use</li>
                    <li>It is open-source and free</li>
                    <li>It is secure, fast and powerful</li>
                    <li>It has a huge community support (tens of millions of developers)</li>
                    <li>Java is an object oriented language which gives a clear structure to programs and allows code to be reused, lowering development costs</li>
                    <li>As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or vice versa</li>
                </ul> 
                <br>
                <br>
                <h6>Example of Java:</h6>
                <img src="{{ asset('assets/images/javaeasy1.png') }}">
                <p>Explanation of this example:</p>
                <ol>
                    <li>In this program, an object of Scanner class, reader is created to take inputs from standard input, which is keyboard.</li>
                    <li>Then, enter a number prompt is printed to give the user a visual clue as to what they should do next.</li>
                    <li>reader.nextInt()then reads all entered integers from the keyboard unless it encounters a new line character \n (Enter). The entered integers are then saved to the integer variable number.</li>
                    <li>If you enter any character which is not an integer, the compiler will throw an InputMismatchException.</li>
                    <li>Finally, number is printed onto the standard output (System.out) - computer screen using the function println().</li>
                </ol> 
                <br>
                <br>
                <h2 style="text-align:center;">Introduction to Classes</h2>
                <br>
                <p>Imagine you want to create a list of books of your personal library. To characterize each book, you can create a list of words that describe it. This list would be made of general characteristics of each book. Here is an example:</p>
                <h6>Book</h6>
                <ul>
                    <li>BookTitle</li>
                    <li>Author</li>
                    <li>Publisher</li>
                    <li>YearPublished</li>
                </ul>
                <p>In the computer world, the work Book in the above example is referred to as a class: A class is a list of criteria used to describe something. Each word or group of words, in bold in the above example, is called a property of the class. In our example, Book Title is a property of the Book class. In the same way, Author is another property of the of the Book class. In Java, there is never space between two words that represent the same entity. This means that the above list is better represented as follows:</p>
                <h6>Book</h6>
                <ul>
                    <li>BookTitle</li>
                    <li>Author</li>
                    <li>Publisher</li>
                    <li>YearPublished</li>
                </ul>
                <p>Every property that is created in the class is referred to as its member. For example, in the above lists, Nationality is a member of the Author class while Publisher is a member of the Book class.</p>
                <br>
                <h2 style="text-align:center;">Introduction to Objects</h2>
                <br>
                <p>In the Java programming language, an object is an instance of a Java class, meaning it is a copy of a specific class. Java objects have three primary characteristics: identity, state, and behavior. These characteristics are the building blocks of any class object and set the scene  for how they are used.</p>
                <p>To describe a particular book of your collection, you can provide information for each characteristic of the class used to describe it. Here is an example:</p>
                <h6 style="padding-left:30px;">Author: Mojang</h6>
                <h6 style="padding-left:30px;">Name: Ferdinand Oyono</h6>
                <h6 style="padding-left:30px;">Nationality: Cameroon for how they are use.</h6>
                <br>
                <p>In the same way, you can describe each author of the collection by filling out its characteristics using the above criteria. When describing an object as done in this example, you must first give a name to the object (this is not always necessary as we will see in future lessons). In the above example, Modjang is the name of the object. Author is (still) the name of the class. This name is necessary because you would need it in a class where Author must be used as a member. Based on this, you can use the name of the above class when describing a Book object. Here is an example:</p>
                <h6 style="padding-left:30px;">Book: First Item</h6>
                <h6 style="padding-left:30px;">Book Title: Houseboy</h6>
                <h6 style="padding-left:30px;">Author: Mojang</h6>
                <h6 style="padding-left:30px;">Publisher: Heinemann</h6>
                <h6 style="padding-left:30px;">Year Published: 1991</h6>
                <br>
                <p>It is important to understand the difference between a class and an object. An object is the result of describing something using the preset criteria of a (known) class. In the strict sense, you must first create a class by specifying each criterion you want to use to eventually describe some objects. On the other hand, you can create an object only that is based on an existing class.</p>
                <br>
                <br>
                <h2 style="text-align:center;">Methods</h2>    
                <br>
                <p>A method in Java is a block of code that, when called, performs specific actions mentioned in it. For instance, if you have written instructions to draw a circle in the method, it will do that task. You can insert values or parameters into methods, and they will only be executed when called.</p>        
                <br>
                <h6>Example of Method in java:</h6>
                <img src="{{ asset('assets/images/javaeasy2.png') }}">
                <p>Here,</p>
                <p>returnType - It specifies what type of value a method returns For example if a method has an int return type then it returns an integer value.
                <br>If the method does not return a value, its return type is void.
                <br>methodName - It is an identifier that is used to refer to the particular method in a program.
                <br>method body - It includes the programming statements that are used to perform some tasks. The method body is enclosed inside the curly braces { }.</p>
                <br>
                <img src="{{ asset('assets/images/javaeasy3.png') }}">   
                <h2 style="text-align:center;">Creating a File in Java in Netbeans</h2>
                <p>Java code consists of instructions written in plain English. The simplest document of a Java code contains a class and something called main. The formula we will use and accept at this time is:</P>
                <img src="{{ asset('assets/images/javaeasy4.png') }}">  
                <h2 style="text-align:center;">Comments</h2>    
                <p>A comment is text that is not part of your code but serves as guide when trying to figure out what the lines of code of your program are. This means that a comment is not taken into consideration when your code is built. For this reason, when writing a comment, you use plain language as you wish.</p>
                <p>There are two usual ways of including comments in your program. To comment the contents of one line, you start it with double forward slashes like this //</p>
                <br>
                <p>Here is an example:</p>
                <p style="color: lightgreen;">// Here is a simple sentence</p>
                <p>You can include many lines of comments in your program. To do that, comment each line with the double slashes. An alternative is to start the beginning of the commented line or paragraph with /* and end the commented section with */</p>
                <p>Here is another commented version of our program:</p>
                <p style="color: lightgreen;">// A simple exercise
                <br>/* Here is a simple sentence that I want to display
                <br>when the program starts. It doesn't do much.
                <br>I am planning to do more stuff in the future. */</p>
                <p style="color: lightgreen;">// The end of my program</p>
            
            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>