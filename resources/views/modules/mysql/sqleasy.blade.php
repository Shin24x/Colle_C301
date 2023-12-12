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
                
                <h2 style="text-align:center;">MySQL Basics</h2>
                <br>
                <p>This MySQL basics section teaches you how to use SQL statements to manage data in MySQL. It'll provide you with everything you need to know to work with MySQL effectively.</p>
                <h6>Querying data</h6>
                <ul>
                  <li>SELECT - learn how to use the SELECT statement without referencing a table.</li>
                  <li>SELECT FROM - show you how to use a simple SELECT FROM statement to query the data from a single table.</li>
                </ul>
                <h6>Sorting data</h6>
                <ul>
                  <li>ORDER BY - show you how to sort the result set using the ORDER BY clause. The custom sort order with the FIELD function will be also covered.</li>
                </ul>
                <h6>Filtering data</h6>
                <ul>
                  <li>WHERE - learn how to use the WHERE clause to filter rows based on specified conditions.</li>
                  <li>SELECT DISTINCT - show you how to use the DISTINCT operator in the SELECT statement to eliminate duplicate rows in a result set.</li>
                  <li>AND - introduce you to the AND operator to combine Boolean expressions to form a complex condition for filtering data.</li>
                  <li>OR - introduce you to the OR operator and show you how to combine the OR operator with the AND operator to filter data.</li>
                  <li>IN – show you how to use the IN operator in the WHERE clause to determine if a value matches any value in a set.</li>
                  <li>NOT IN – negate the IN operator using the NOT operator to check if a value doesn’t match any value in a set.</li>
                  <li>BETWEEN – show you how to query data based on a range using BETWEENoperator.</li>
                  <li>LIKE  – provide you with a technique to query data based on a pattern.</li>
                  <li>LIMIT – use LIMIT to constrain the number of rows returned by the SELECT statement.</li>
                  <li>IS NULL – test whether a value is NULL or not by using the IS NULL operator.</li>
                </ul>
                <h6>Joining tables</h6>
                <ul>
                  <li>Table & Column Aliases – introduce you to table and column aliases.</li>
                  <li>Joins  – give you an overview of joins supported in MySQL including inner join, left join, and right join.</li>
                  <li>Self-Join – join a table to itself using a table alias and connect rows within the same table using inner join and left join.</li>
                  <li>INNER JOIN – query rows from a table that has matching rows in another table.</li>
                  <li>LEFT JOIN – return all rows from the left table and matching rows from the right table or null if no matching rows are found in the right table.</li>
                  <li>RIGHT JOIN – return all rows from the right table and matching rows from the left table or null if no matching rows are found in the left table.</li>
                  <li>CROSS JOIN – make a Cartesian product of rows from multiple tables.</li>
                </ul>
                <h6>Grouping data</h6>
                <ul>
                  <li>GROUP BY – show you how to group rows into groups based on columns or expressions.</li>
                  <li>HAVING – filter the groups by a specific condition.</li>
                  <li>HAVING COUNT – show you how to use the HAVING clause with the COUNT function to filter groups by the number of items.</li>
                  <li>ROLLUP –  generate multiple grouping sets considering a hierarchy between columns specified in the GROUP BY clause.</li>
                </ul>
                <h6>Subqueries</h6>
                <ul>
                  <li>Subquery – show you how to nest a query (inner query) within another query (outer query) and use the result of the inner query for the outer query.</li>
                  <li>Derived table – introduce you to the derived table concept and show you how to use it to simplify complex queries.</li>
                  <li>EXISTS – test for the existence of rows.</li>
                </ul>
                <h6>Common Table Expressions</h6>
                <ul>
                  <li>Common Table Expression or CTE – explain to you the common table expression concept and show you how to use CTE for querying data from tables.</li>
                  <li>Recursive CTE –  use the recursive CTE to traverse the hierarchical data.</li>
                </ul>
                <h6>Set operators</h6>
                <ul>
                  <li>UNION – combine two or more result sets of multiple queries into a single result set.</li>
                  <li>EXCEPT – show you how to use the EXCEPT operator to find the set difference between two sets of data.</li>
                  <li>INTERSECT –  show you how to use the INTERSECT operator to find common rows of two or more queries.</li>
                </ul>
                <h6>Managing databases</h6>
                <p>This section shows you how to manage MySQL databases.</p>
                <ul>
                  <li>Selecting a database – show you how to use the USE statement to set the current database.</li>
                  <li>CREATE DATABASE – show you step by step how to create a new database in MySQL Server.</li>
                  <li>DROP DATABASE – walk you through the steps of deleting a database from the database server.</li>
                </ul>
                <h6>Working with tables</h6>
                <p>This section shows you how to manage the most important database objects in MySQL, including databases and tables.</p>
                <ul>
                  <li>MySQL storage engines– it is essential to understand the features of each storage engine so that you can use them effectively to maximize the performance of your databases.</li>
                  <li>CREATE TABLE – show you how to create new tables in a database using the CREATE TABLE statement.</li>
                  <li>MySQL data types – show you various data types in MySQL so that you can apply them effectively in designing database tables.</li>
                  <li>AUTO_INCREMENT – show you how to use an AUTO_INCREMENT column to generate unique numbers automatically for the primary key.</li>
                  <li>ALTER TABLE – learn how to change the structure of a table using the ALTER TABLE statement.</li>
                  <li>Renaming tables –  show you how to rename a table using the RENAME TABLE statement.</li>
                  <li>Removing a column from a table – show you how to use the ALTER TABLE DROP COLUMN statement to remove one or more columns from a table.</li>
                  <li>Adding a new column to a table – show you how to add one or more columns to an existing table using the ALTER TABLE ADD COLUMN statement.</li>
                  <li>DROP TABLE – show you how to remove existing tables using the DROP TABLE statement.</li>
                  <li>Temporary tables – discuss MySQL temporary tables and show you how to manage temporary tables effectively.</li>
                  <li>TRUNCATE TABLE – show you how to delete all data from a table quickly and more efficiently using the TRUNCATE TABLE statement.</li>
                  <li>Generated columns – guide you on how to use the generated columns to store data computed from an expression or other columns.</li>
                </ul>
                <h6>MySQL constraints</h6>
                <ul>
                  <li>Primary key – guide you on how to use the primary key constraint to create the primary key for a table.</li>
                  <li>Foreign key – introduce you to the foreign key and show you step by step how to create and drop foreign keys.</li>
                  <li>Disable foreign key checks – learn how to disable foreign key checks.</li>
                  <li>NOT NULL– introduce you to the NOT NULL constraint and show you how to declare a NOT NULL column or add a NOT NULL constraint to an existing column.</li>
                  <li>UNIQUE constraint – show you how to use the UNIQUE constraint to enforce the uniqueness of values in a column or a group of columns in a table.</li>
                  <li>CHECK constraint – learn how to create CHECK constraints to ensure data integrity.</li>
                  <li>DEFAULT – show you how to set a default value for a column using the DEFAULT constraint.</li>
                </ul>
                <h6>MySQL data types</h6>
                <ul>
                  <li>BIT – introduce you to BIT datatype and how to store bit values in MySQL.</li>
                  <li>INT – show you how to use integer data type.</li>
                  <li>BOOLEAN – explain to you how MySQL handles Boolean values by using TINYINT(1) internally.</li>
                  <li>DECIMAL – show you how to use DECIMAL datatype to store exact values in decimal format.</li>
                  <li>CHAR – a guide to CHAR data type for storing the fixed-length string.</li>
                  <li>VARCHAR – give you the essential guide to VARCHAR datatype.</li>
                  <li>TEXT – show you how to store text data using TEXT datatype.</li>
                  <li>DATETIME – introduce you to the DATETIME datatype and some useful functions to manipulate DATETIME values.</li>
                  <li>TIMESTAMP – introduce you to TIMESTAMP and its features called automatic initialization and automatic update, which allow you to define auto-initialized and auto-updated columns for a table.</li>
                  <li>DATE – introduce you to the DATE datatype and show you some date functions to handle the date data effectively.</li>
                  <li>TIME – walk you through the features of TIME datatype and show you how to use some useful temporal functions to handle time data.</li>
                  <li>BINARY – show you how to store fixed-length byte data.</li>
                  <li>VARBINARY – learn how to store variable-length byte data.</li>
                  <li>ENUM – learn how to use ENUM datatype correctly to store enumeration values.</li>
                  <li>JSON – show you how to use JSON data type to store JSON documents.</li>
                </ul>
                <h6>Modifying data in MySQL</h6>
                <p>In this section, you will learn how to insert, update, and delete data from tables using various MySQL statements.</p>
                <ul>
                  <li>INSERT – use various forms of the INSERT statement to insert data into a table.</li>
                  <li>INSERT Multiple Rows – insert multiple rows into a table.</li>
                  <li>INSERT INTO SELECT – insert data into a table from the result set of a query.</li>
                  <li>Insert datetime values – show you how to insert datetime values into a DATETIME column.</li>
                  <li>Insert date values – learn how to insert date values into a DATE column.</li>
                  <li>UPDATE – learn how to use the UPDATE statement to update data in database tables.</li>
                  <li>UPDATE JOIN – show you how to perform cross-table updates using the UPDATE JOIN statement with INNER JOIN and LEFT JOIN.</li>
                  <li>DELETE – show you how to use the DELETE statement to delete rows from one or more tables.</li>
                  <li>ON DELETE CASCADE – learn how to use ON DELETE CASCADE referential action for a foreign key to delete data from a child table automatically when you delete data from a parent table.</li>
                  <li>DELETE JOIN – show you how to delete data from multiple tables.</li>
                  <li>REPLACE – learn how to insert or update data depending on whether data exists in the table or not.</li>
                  <li>Prepared Statement – show you how to use the prepared statement to execute a query.</li>
                </ul>
                <h6>MySQL transaction</h6>
                <ul>
                  <li>Transaction – learn about MySQL transactions, and how to use COMMIT and ROLLBACK to manage transactions in MySQL.</li>
                  <li>Table locking – learn how to use MySQL locking for cooperating table access between sessions.</li>
                </ul>
                <h6>MySQL globalization</h6>
                <ul>
                  <li>Character Set – discuss character set and show you step by step how to perform various operations on character sets.</li>
                  <li>Collation – discuss collation and show you how to set character sets and collations for the MySQL server, database, tables, and columns.</li>
                </ul>
                <h6>MySQL import & export CSV</h6>
                <ul>
                  <li>Import CSV File Into MySQL Table – show you how to use LOAD DATA INFILE statement to import CSV files into a MySQL table.</li>
                  <li>Export MySQL Table to CSV –  learn various techniques of how to export MySQL table to a CSV file format.</li>
                </ul>

                
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>