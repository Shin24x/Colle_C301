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
                
                <h2 style="text-align:center;">MySQL</h2>
                <br>
                <ul>
                <p style="text-align: center;">- MySQL is an open-source relational database management system (RDBMS).</p>
                <p style="text-align: center;">- It is widely used for managing and manipulating structured data.</p>
                <p style="text-align: center;">- Developed, distributed, and supported by Oracle Corporation.</p>
                </ul>
                <h6>Scalability:</h6>
                <p>- MySQL can handle databases of various sizes, from small applications to large enterprise systems.</p>
                <h6>High Performance:</h6>
                <p>- Optimized for fast execution of queries and transactions.</p>
                <h6>Reliability:</h6>
                <p>- Provides ACID (Atomicity, Consistency, Isolation, Durability) compliance for data integrity.</p>
                <h6>Flexibility:</h6>
                <p>- Supports various data types and indexing options.</p>
                <h6>Security:</h6>
                <p>- Offers robust security features, including access controls and encryption.</p>
                <br>
                <h4>What is SQL?</h4>
                <ul>
                  <li>MySQL is a powerful and versatile RDBMS widely used in the industry.</li>
                  <li>Understanding basic SQL commands and database concepts is essential for effective database management.</li>
                  <li>MySQL Workbench provides a user-friendly interface for interacting with MySQL databases.</li>
                </ul>
                <h6>Index Types:</h6>
                <p>- MySQL supports various types of indexes, including B-tree indexes, full-text indexes, and spatial indexes. Each type is suitable for specific use cases.</p>
                <h6>B-tree Index:</h6>
                <p>- This is the most common type of index in MySQL. It is efficient for equality and range queries, making it suitable for columns used in WHERE clauses.</p>
                <h6>Unique Index:</h6>
                <p>- Ensures that all values in the indexed column(s) are unique. It is useful for enforcing the uniqueness of data in a specific column.</p>
                <h6>Full-Text Index:</h6>
                <p>- Designed for searching within the content of large text fields, like articles or blog posts.</p>
                <h6>Query Optimization:</h6>
                <p>- Properly designed indexes can significantly improve the performance of SELECT, JOIN, and WHERE clauses in SQL queries.</p>
                <br>
                <h2 style="text-align:center;">Databases and Tables</h2>
                <br>
                <h6>Database:</h6>
                <p>- A container for tables and related objects. Each MySQL server can have multiple databases.</p>
                <h6>Table:</h6>
                <p>- A collection of data organized into rows and columns.</p>
                <br>
                <h2 style="text-align:center;">SQL (Structured Query Language)</h2>
                <br>
                <p >SQL is the language used to interact with relational databases.</p>
                <h6>Data Query Language (DQL):</h6>
                <p>- SELECT statements to retrieve data.</p>
                <h6>Data Definition Language (DDL):</h6>
                <p>- CREATE, ALTER, DROP statements for database and table structure.</p>
                <h6>Data Manipulation Language (DML):</h6>
                <p>- INSERT, UPDATE, DELETE statements for data manipulation.</p>
                <h6>Data Control Language (DCL):</h6>
                <p>- GRANT, REVOKE statements for access control.</p>
                <p>The software used to store, manage, query, and retrieve data stored in a relational database is called a relational database management system (RDBMS). The RDBMS provides an interface between users and applications and the database, as well as administrative functions for managing data storage, access, and performance.</p>
                
                

                
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>