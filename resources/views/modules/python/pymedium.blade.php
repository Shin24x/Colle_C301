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
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
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
                
                <h2 style="text-align:left;">Python</h2>
                <br>
<p>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
<p>Python is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly procedural), object-oriented and functional programming. It is often described as a "batteries included" language due to its comprehensive standard library.</P>
<p>Guido van Rossum began working on Python in the late 1980s as a successor to the ABC programming language and first released it in 1991 as Python 0.9.0. Python 2.0 was released in 2000. Python 3.0, released in 2008, was a major revision not completely backward-compatible with earlier versions. Python 2.7.18, released in 2020, was the last release of Python 2.</p>
<p>Python consistently ranks as one of the most popular programming languages.</p>
<br>
<h4 style="text-align:left;">Methods</h4>
<p>Methods on objects are functions attached to the object's class; the syntax instance.method(argument) is, for normal methods and functions, syntactic sugar for Class.method(instance, argument). Python methods have an explicit self parameter to access instance data, in contrast to the implicit self (or this) in some other object-oriented programming languages (e.g., C++, Java, Objective-C, Ruby). Python also provides methods, often called dunder methods (due to their names beginning and ending with double-underscores), to allow user-defined classes to modify how they are handled by native operations including length, comparison, in arithmetic operations and type conversion.</p>
<br>
<h4 style="text-align:left;">Typing</h4>
<p>Python uses duck typing and has typed objects but untyped variable names. Type constraints are not checked at compile time; rather, operations on an object may fail, signifying that it is not of a suitable type. Despite being dynamically typed, Python is strongly typed, forbidding operations that are not well-defined (for example, adding a number to a string) rather than silently attempting to make sense of them.</p>
<p>Python allows programmers to define their own types using classes, most often used for object-oriented programming. New instances of classes are constructed by calling the class (for example, SpamClass() or EggsClass()), and the classes are instances of the metaclass type (itself an instance of itself), allowing metaprogramming and reflection.</p>
<p>Before version 3.0, Python had two kinds of classes (both using the same syntax): old-style and new-style, current Python versions only support the semantics new style.</p>
<p>The Python programming language allows for optional type annotations, which are not mandatory but serve as hints for programmers. However, the default implementation of Python (CPython) does not actively support these annotations; they are merely read by the parser without enforcement. While present in the source code, these annotations function primarily as readability aids for programmers. Other implementations or tools may choose to interpret them more rigorously.</p>
<p>Python's optional syntax for type annotations enables the specification of static types. The experimental type-checker, mypy, supports compile-time type checking and aims to encompass almost all Python language constructs. It already provides substantial support for Python features and idioms, including partial support for the latest Python 3.12.</p>
<p>Including type hints in Python source code is considered safe, as all future versions of CPython should support them. However, tools like mypy may lag behind new Python syntax additions. For instance, mypy might not immediately support the latest Python features, such as the 'match' keyword. Despite mypy potentially failing on code using the latest features, the code remains valid in later versions of CPython.</p>
<p>Mypy, applied to large codebases, claims to frequently identify bugs. While parts of mypy are marked as experimental, there's a sub-project called mypyc, an actual compiler that leverages annotations for performance improvements. Mypyc generates C code compiled into native code, supporting a substantial subset of Python. Starting from version 1.2, mypyc includes support for signed 32-bit and 64-bit integer types, in addition to the arbitrary-precision int type. This is unlike Python's default integer type, providing possibilities for overflow when using these integer types, a situation not present in (C)Python.</p>
<br>

<table>
  <tr>
    <th>Type</th>
    <th>Mutability</th>
    <th>Description</th>
    <th>Syntax examples</th>
  </tr>
  <tr>
    <td>bool</td>
    <td>immutable</td>
    <td>Boolean value</td>
    <td>True<br>False</td>
  </tr>
  <tr>
    <td>bytearray</td>
    <td>mutable</td>
    <td>
Sequence of bytes
</td>
    <td>bytearray(b'Some ASCII')<br>
bytearray(b"Some ASCII")<br>
bytearray([119, 105, 107, 105])</td>
  </tr>
  <tr>
    <td>bytes</td>
    <td>immutable</td>
    <td>
Sequence of bytes
</td>
    <td>b'Some ASCII'<br>
b"Some ASCII"<br>
bytes([119, 105, 107, 105])</td>
  </tr>
  <tr>
    <td>complex</td>
    <td>immutable</td>
    <td>
Complex number with<br> real and imaginary parts
</td>
    <td>3+2.7j<br>
3 + 2.7j</td>
  </tr>

<tr>
    <td>dict</td>
    <td>mutable</td>
    <td>Associative array (or dictionary)<br> of key and value pairs; can<br> contain mixed types (keys and values),<br> keys must be a hashable type</td>
    <td>{'key1': 1.0, 3: False}<br>
{}</td>
  </tr>
  <tr>
    <td>
types.EllipsisType
</td>
    <td>immutable</td>
    <td>An ellipsis placeholder to be used as<br> an index in NumPy arrays</td>
    <td>...<br>
Ellipsis
</td>
  </tr>
  <tr>
    <td>float</td>
    <td>immutable</td>
    <td>
Double-precision floating-point number.<br> The precision is machine-dependent<br> but in practice is generally implemented<br> as a 64-bit IEEE 754 number with 53 bits<br> of precision.

</td>
    <td>1.33333</td>
  </tr>
  <tr>
    <td>frozenset</td>
    <td>immutable</td>
    <td>
Unordered set, contains no duplicates;<br> can contain mixed types, if hashable
</td>
    <td>frozenset([4.0, 'string', True])</td>
  </tr>
  <tr>
    <td>int</td>
    <td>immutable</td>
    <td>Integer of unlimited magnitude</td>
    <td>42</td>
  </tr>
  <td>list</td>
    <td>mutable</td>
    <td>
List, can contain mixed types

</td>
    <td>[4.0, 'string', True]<br>
[]
</td>
  </tr>
  <td>types.NoneType</td>
    <td>immutable</td>
    <td>Boolean</td>
    <td>
    None
</td>
  </tr>
  <td>types.NotImplementedType</td>
    <td>immutable</td>
    <td>
A placeholder that can be returned from<br> overloaded operators to indicate<br> unsupported operand types.

</td>
    <td>NotImplemented</td>
  </tr>
  <td>range</td>
    <td>immutable</td>
    <td>
An immutable sequence of numbers commonly<br> used for looping a specific<br> number of times in for loops

</td>
    <td>range(-1, 10)<br>
range(10, -5, -2)</td>
  </tr>
  <td>set</td>
    <td>mutable</td>
    <td>
Unordered set, contains no duplicates; can<br> contain mixed types, if hashable

</td>
    <td>{4.0, 'string', True}<br>
set()</td>
  </tr>
  <td>str</td>
    <td>immutable</td>
    <td>
A character string: sequence of <br>Unicode codepoints

</td>
    <td>'Wikipedia'<br>
"Wikipedia"<br>
"""Spanning<br>
multiple<br>
lines"""<br>


Spanning<br>
multiple<br>
lines<br>
</td>
  </tr>
  <td>tuple</td>
    <td>immutable</td>
    <td>
Can contain mixed types

</td>
    <td>(4.0, 'string', True)<br>
('single element',)<br>
()
</td>
  </tr>
  </table>

  <br>
<h4 style="text-align:left;">Arithmetic operations</h4>
<p>Python has the usual symbols for arithmetic operators (+, -, *, /), the floor division operator // and the modulo operation % (where the remainder can be negative, e.g. 4 % -3 == -2). It also has ** for exponentiation, e.g. 5**3 == 125 and 9**0.5 == 3.0, and a matrix‑multiplication operator @ .[109] These operators work like in traditional math; with the same precedence rules, the operators infix (+ and - can also be unary to represent positive and negative numbers respectively).</p>
<p>The division between integers produces floating-point results. The behavior of division has changed significantly over time:</p>
<ul>
<li>Current Python (i.e. since 3.0) changed / to always be floating-point division, e.g. 5/2 == 2.5.
</li>
<li>The floor division // operator was introduced. So 7//3 == 2, -7//3 == -3, 7.5//3 == 2.0 and -7.5//3 == -3.0. Adding from __future__ import division causes a module used in Python 2.7 to use Python 3.0 rules for division (see above).
</li>
</ul>

<p>In Python terms, / is true division (or simply division), and // is floor division. / before version 3.0 is classic division.</P>
<p>Rounding towards negative infinity, though different from most languages, adds consistency. For instance, it means that the equation (a + b)//b == a//b + 1 is always true. It also means that the equation b*(a//b) + a%b == a is valid for both positive and negative values of a. However, maintaining the validity of this equation means that while the result of a%b is, as expected, in the half-open interval [0, b), where b is a positive integer, it has to lie in the interval (b, 0] when b is negative.</p>
<p>Python provides a round function for rounding a float to the nearest integer. For tie-breaking, Python 3 uses round to even: round(1.5) and round(2.5) both produce 2. Versions before 3 used round-away-from-zero: round(0.5) is 1.0, round(-0.5) is −1.0.</P>
<p>Python allows Boolean expressions with multiple equality relations in a manner that is consistent with general use in mathematics. For example, the expression a < b < c tests whether a is less than b and b is less than c. C-derived languages interpret this expression differently: in C, the expression would first evaluate a < b, resulting in 0 or 1, and that result would then be compared with c. </p>
<p>Python uses arbitrary-precision arithmetic for all integer operations. The Decimal type/class in the decimal module provides decimal floating-point numbers to a pre-defined arbitrary precision and several rounding modes. The Fraction class in the fractions module provides arbitrary precision for rational numbers.</p>
<p>Due to Python's extensive mathematics library, and the third-party library NumPy that further extends the native capabilities, it is frequently used as a scientific scripting language to aid in problems such as numerical data processing and manipulation.</p>

<br>
<h4 style="text-align:left;">Programming example</h4>

// image here 




            
            </div>
        </div>
  </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>