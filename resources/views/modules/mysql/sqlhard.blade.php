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
                
                <h2 style="text-align:center;">What is MySQL?</h2>
                <br>
                <p>MySQL, the most popular Open Source SQL database management system, is developed, distributed, and supported by Oracle Corporation.</p>
                <h6>The MySQL website provides the latest information about MySQL software.</h6>
                <ul>
                  <li>MySQL is a database management system.
                    <p>- A database is a structured collection of data. It may be anything from a simple shopping list to a picture gallery or the vast amounts of information in a corporate network. To add, access, and process data stored in a computer database, you need a database management system such as MySQL Server. Since computers are very good at handling large amounts of data, database management systems play a central role in computing, as standalone utilities, or as parts of other applications.</p>
                  </li>
                  <li>MySQL databases are relational.
                    <p>- A relational database stores data in separate tables rather than putting all the data in one big storeroom. The database structures are organized into physical files optimized for speed. The logical model, with objects such as databases, tables, views, rows, and columns, offers a flexible programming environment. You set up rules governing the relationships between different data fields, such as one-to-one, one-to-many, unique, required or optional, and “pointers” between different tables. The database enforces these rules, so that with a well-designed database, your application never sees inconsistent, duplicate, orphan, out-of-date, or missing data.</p>
                    <p>- The SQL part of “MySQL” stands for “Structured Query Language”. SQL is the most common standardized language used to access databases. Depending on your programming environment, you might enter SQL directly (for example, to generate reports), embed SQL statements into code written in another language, or use a language-specific API that hides the SQL syntax.</p>
                    <p>- SQL is defined by the ANSI/ISO SQL Standard. The SQL standard has been evolving since 1986 and several versions exist. In this manual, “SQL-92” refers to the standard released in 1992, “SQL:1999” refers to the standard released in 1999, and “SQL:2003” refers to the current version of the standard. We use the phrase “the SQL standard” to mean the current version of the SQL Standard at any time.</p>
                  </li>
                  <li>MySQL software is Open Source.
                    <p>- Open Source means that it is possible for anyone to use and modify the software. Anybody can download the MySQL software from the Internet and use it without paying anything. If you wish, you may study the source code and change it to suit your needs. The MySQL software uses the GPL (GNU General Public License) to define what you may and may not do with the software in different situations. If you feel uncomfortable with the GPL or need to embed MySQL code into a commercial application, you can buy a commercially licensed version from us.</p>
                  </li>
                  <li>The MySQL Database Server is very fast, reliable, scalable, and easy to use.
                    <p>- If that is what you are looking for, you should give it a try. MySQL Server can run comfortably on a desktop or laptop, alongside your other applications, web servers, and so on, requiring little or no attention. If you dedicate an entire machine to MySQL, you can adjust the settings to take advantage of all the memory, CPU power, and I/O capacity available. MySQL can also scale up to clusters of machines, networked together.</p>
                    <p>- MySQL Server was originally developed to handle large databases much faster than existing solutions and has been successfully used in highly demanding production environments for several years. Although under constant development, MySQL Server today offers a rich and useful set of functions. Its connectivity, speed, and security make MySQL Server highly suited for accessing databases on the Internet.</p>
                  </li>
                  <li>MySQL Server works in client/server or embedded systems.
                    <p>- The MySQL Database Software is a client/server system that consists of a multithreaded SQL server that supports different back ends, several different client programs and libraries, administrative tools, and a wide range of application programming interfaces (APIs).</p>
                    <p>- We also provide MySQL Server as an embedded multithreaded library that you can link into your application to get a smaller, faster, easier-to-manage standalone product.</p>
                  </li>
                  <li>A large amount of contributed MySQL software is available.
                    <p>- MySQL Server has a practical set of features developed in close cooperation with our users. It is very likely that your favorite application or language supports the MySQL Database Server.</p>
                  </li>
                  <li>MySQL HeatWave.
                    <p>- MySQL HeatWave is a fully managed database service, powered by the HeatWave in-memory query accelerator. It is the only cloud service that combines transactions, real-time analytics across data warehouses and data lakes, and machine learning in one MySQL Database; without the complexity, latency, risks, and cost of ETL duplication. It is available on OCI, AWS, and Azure.</p>
                  </li>
                </ul>
                <p>The official way to pronounce “MySQL” is “My Ess Que Ell” (not “my sequel”), but we do not mind if you pronounce it as “my sequel” or in some other localized way.</p>
                <br>
                <h2 style="text-align:center;">The Main Features of MySQL</h2>
                <br>
                <h6>This section describes some of the important characteristics of the MySQL Database Software. In most respects, the roadmap applies to all versions of MySQL. For information about features as they are introduced into MySQL on a series-specific basis, see the “In a Nutshell” section of the appropriate Manual:</h6>
                <ul>
                  <li>MySQL 8.0:</li>
                  <li>MySQL 5.7:</li>
                  <li>Internals and Portability</li>
                  <li>Written in C and C++</li>
                  <li>Tested with a broad range of different compilers.</li>
                  <li>Works on many different platforms.</li>
                  <li>For portability, configured using CMake.</li>
                  <li>Tested with Purify (a commercial memory leakage detector) as well as with Valgrind, a GPL tool.</li>
                  <li>Uses multi-layered server design with independent modules.</li>
                  <li>Designed to be fully multithreaded using kernel threads, to easily use multiple CPUs if they are available.</li>
                  <li>Provides transactional and nontransactional storage engines.</li>
                  <li>Uses very fast B-tree disk tables (MyISAM) with index compression.</li>
                  <li>Designed to make it relatively easy to add other storage engines. This is useful if you want to provide an SQL interface for an in-house database.</li>
                  <li>Uses a very fast thread-based memory allocation system.</li>
                  <li>Executes very fast joins using an optimized nested-loop join.</li>
                  <li>Implements in-memory hash tables, which are used as temporary tables.</li>
                  <li>Implements SQL functions using a highly optimized class library that should be as fast as possible. Usually there is no memory allocation at all after query initialization.</li>
                  <li>Provides the server as a separate program for use in a client/server networked environment.</li>
                </ul>
                <h6>Data Types</h6>
                <ul>
                  <li>Many data types: signed/unsigned integers 1, 2, 3, 4, and 8 bytes long, FLOAT, DOUBLE, CHAR, VARCHAR, BINARY, VARBINARY, TEXT, BLOB, DATE, TIME, DATETIME, TIMESTAMP, YEAR, SET, ENUM, and OpenGIS spatial types.</li>
                  <li>Fixed-length and variable-length string types.</li>
                </ul>
                <h6>Statements and Functions</h6>
                <ul>
                  <li>Full operator and function support in the SELECT list and WHERE clause of queries. For example:
                    <img src="{{ asset('assets/images/mysqlhard1.png') }}">
                  </li>
                  <li>Full support for SQL GROUP BY and ORDER BY clauses. Support for group functions (COUNT(), AVG(), STD(), SUM(), MAX(), MIN(), and GROUP_CONCAT()).</li>
                  <li>Support for LEFT OUTER JOIN and RIGHT OUTER JOIN with both standard SQL and ODBC syntax.</li>
                  <li>Support for aliases on tables and columns as required by standard SQL.</li>
                  <li>Support for DELETE, INSERT, REPLACE, and UPDATE to return the number of rows that were changed (affected), or to return the number of rows matched instead by setting a flag when connecting to the server.</li>
                  <li>Support for MySQL-specific SHOW statements that retrieve information about databases, storage engines, tables, and indexes. Support for the INFORMATION_SCHEMA database, implemented according to standard SQL.</li>
                  <li>An EXPLAIN statement to show how the optimizer resolves a query.</li>
                  <li>Independence of function names from table or column names. For example, ABS is a valid column name. The only restriction is that for a function call, no spaces are permitted between the function name and the “(” that follows it.</li>
                  <li>You can refer to tables from different databases in the same statement.</li>
                </ul>
               <h6>Security</h6>
               <ul>
                <li>A privilege and password system that is very flexible and secure, and that enables host-based verification.</li>
                <li>Password security by encryption of all password traffic when you connect to a server.</li>
               </ul>
               <h6>Scalability and Limits</h6>
               <li>Support for large databases. We use MySQL Server with databases that contain 50 million records. We also know of users who use MySQL Server with 200,000 tables and about 5,000,000,000 rows.</li>
               <li>Support for up to 64 indexes per table. Each index may consist of 1 to 16 columns or parts of columns. The maximum index width for InnoDB tables is either 767 bytes or 3072 bytes. The maximum index width for MyISAM tables is 1000 bytes. An index may use a prefix of a column for CHAR, VARCHAR, BLOB, or TEXT column types.</li>
               <h6>Connectivity</h6>
               <ul>
                <li>Clients can connect to MySQL Server using several protocols:
                  <p>- Clients can connect using TCP/IP sockets on any platform.</p>
                  <p>- On Windows systems, clients can connect using named pipes if the server is started with the named_pipe system variable enabled. Windows servers also support shared-memory connections if started with the shared_memory system variable enabled. Clients can connect through shared memory by using the --protocol=memory option.</p>
                  <p>- On Unix systems, clients can connect using Unix domain socket files.</p>
                </li>
               </ul>
               <li>MySQL client programs can be written in many languages. A client library written in C is available for clients written in C or C++, or for any language that provides C bindings.</li>
               <li>PIs for C, C++, Eiffel, Java, Perl, PHP, Python, Ruby, and Tcl are available, enabling MySQL clients to be written in many languages.</li>
               <li>The Connector/ODBC (MyODBC) interface provides MySQL support for client programs that use ODBC (Open Database Connectivity) connections. For example, you can use MS Access to connect to your MySQL server. Clients can be run on Windows or Unix. Connector/ODBC source is available. All ODBC 2.5 functions are supported, as are many others. See  The Connector/J interface provides MySQL support for Java client programs that use JDBC connections. Clients can be run on Windows or Unix. Connector/J source is available.</li>
               <li>MySQL Connector/NET enables developers to easily create .NET applications that require secure, high-performance data connectivity with MySQL. It implements the required ADO.NET interfaces and integrates into ADO.NET aware tools. Developers can build applications using their choice of .NET languages. MySQL Connector/NET is a fully managed ADO.NET driver written in 100% pure C#.</li>
               <h6>Localization</h6>
               <ul>
                <li>The server can provide error messages to clients in many languages.</li>
                <li>Full support for several different character sets, including latin1 (cp1252), german, big5, ujis, several Unicode character sets, and more. For example, the Scandinavian characters “å”, “ä” and “ö” are permitted in table and column names.</li>
                <li>All data is saved in the chosen character set.</li>
                <li>Sorting and comparisons are done according to the default character set and collation. It is possible to change this when the MySQL server is. To see an example of very advanced sorting, look at the Czech sorting code. MySQL Server supports many different character sets that can be specified at compile time and runtime.</li>
                <li>The server time zone can be changed dynamically, and individual clients can specify their own time zone.</li>
               </ul>
               <h6>Clients and Tools</h6>
               <ul>
                <li>MySQL includes several client and utility programs. These include both command-line programs such as mysqldump and mysqladmin, and graphical programs such as MySQL Workbench.</li>
                <li>MySQL Server has built-in support for SQL statements to check, optimize, and repair tables. These statements are available from the command line through the mysqlcheck client. MySQL also includes myisamchk, a very fast command-line utility for performing these operations on MyISAM tables.</li>
                <li>MySQL programs can be invoked with the --help or -? option to obtain online assistance.</li>
               </ul>
                
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>