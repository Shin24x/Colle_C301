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
            <a href="library" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-grid-alt"></i>
              </span>
              <span class="navlink">Library</span>
            </a>
          </li>
		
		<ul class="menu_items">
          <li class="item">
            <a href="videos" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bxs-video"></i>
              </span>
              <span class="navlink">Videos</span>
            </a>
          </li>
  
		  <ul class="menu_items">
          <li class="item">
            <a href="flashcards" class="nav_link">
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
                
                    <h2 style="text-align:center;">What is (HTML) HyperText Markup Language?</h2>
                <br>
                    <p>HTML (HyperText Markup Language) is the code that is used to structure a web page and its content. For example, content could be structured within a set of paragraphs, a list of bulleted points, or using images and data tables. As the title suggests, this article will give you a basic understanding of HTML and its functions.</p>
                <br>    
                    <h2 style="text-align:center;">Anatomy of HTML elements:</h2> 
                <br>
                <ul>
                    <img src="{{ asset('assets/images/anatomy.png') }}" >
                    <h5>The opening tag</h5>
                    <li>This consists of the name of the element (in this case, p), wrapped in opening and closing angle brackets. This states where the element begins or starts to take effect – in this case where the paragraph begins.</li>
                <br>
                    <h5>The closing tag</h5>
                    <li>This is the same as the opening tag, except that it includes a forward slash before the element name. This states where the element ends – in this case where the paragraph ends. Failing to add a closing tag is one of the standard beginner errors and can lead to strange results.</li>
                <br>
                    <h5>The content</h5>
                    <li>This is the content of the element, which in this case, is just text.</li>
                <br>
                    <h5>The element</h5>
                    <li>The opening tag, the closing tag, and the content together comprise the element.</li>
                <br>
                </ul>
                    
                <h2 style="text-align:center;">Elements can also have attributes that look like the following:</h2>
                    <img src="{{ asset('assets/images/attribute.png') }}" >
                    <br>
                    <p>Attributes contain extra information about the element that you don’t want to appear in the actual content. Here, class is the attribute name and editor-note is the attribute value. The attribute allows you to give the element a non-unique identifier that can be used to target it (and any other elements with the same class value) with style information and other things. Some attributes have no value, such as required.</p>
                <br> 

                <ul>
                    <p>Attributes that set a value always have:</p>
                    <li>A space between it and the element name (or the previous attribute, it the element already has one or more attributes).</li>
                    <li>The attribute name followed by an equal sign.</li>
                    <li>The attribute value wrapped by opening and closing quotation marks.</li>
                </ul>

                    <p>Note: Simple attribute values that don't contain ASCII whitespace (or any of the characters " ' ` = < >) can remain unquoted, but it is recommended that you quote all attribute values, as it makes the code more consistent and understandable.</p> 
                <br>
                    <h2 style="text-align:center;">Nesting elements</h2>
                <br>
                    <p>You can out elements inside other elements too — this is called nesting. If we wanted to state that our cat is very grumpy, we could wrap the word “very” in a <"strong"> element, which means that word is to be strongly emphasized:</p>
                    <img src="{{ asset('assets/images/nesting.png') }}" >
                <br>
                    <p>You do however need to make sure that your elements are properly nested. In the example above, we opened the <"p"> element first, then the <"strong"> element; therefore, we have to close the <"strong"> element first, then the <"p"> element. The following is incorrect:</p>
                    <img src="{{ asset('assets/images/nesting1.png') }}" >
                <br>
                    <p>The elements have to open and close correctly so that they are clearly inside or outside one another. If they overlap as shown above, then your web browser will try to make the best guess at what you were trying to say, which can lead to unexpected results. So don’t do it!</p>
                <br>
                    <h2 style="text-align:center;">Void elements</h2>
                <br>
                    <p>Some elements have no content and are called void elements. Take the <"img"> element that we already have in our HTML page:</p>
                    <img src="{{ asset('assets/images/void.png') }}" >
                    <p>This contains two attributes, but there is no closing <"/img"> tag and no inner content. This is because an image element doesn’t wrap content to affect it. Its purpose is to embed an image in the HTML page in the place it appears.</p>
                <br>
                    <h2 style="text-align:center;">Anatomy of an HTML document</h2>
                <br>
                    <p>That wraps up the basics of individual HTML elements, but they aren’t handy on their own. Now we’ll look at how individual elements are combined to form an entire HTML page. Let’s revisit the code we put into our index.html example (which we first met in the Dealing with files article):</p>
                    <img src="{{ asset('assets/images/htmldoc.png') }}" >
                <br>

                <ul>
                    <h5>Anatomies of HTML document:</h5>
                <br>
                    <h5><"!DOCTYPE html"></h5>
                    <li>doctype. It is a required preamble. In the mists of time, when HTML was young (around 1991/92), doctypes were meant to act as links to a set rules that the HTML page had follow to be considered good HTML, which could mean automatic error checking and other useful things. However, these days, they don’t do much and are basically just needed to make sure your document behaves correctly. That’s all you need to know for now.</li>
                <br>
                    <h5><"html"><"/html'></h5>
                    <li>the <"html"> element. This element wraps all the content on the entire page and is sometimes known as the root element. It also includes the lang attribute, setting the primary language of the document.</li>
                <br>
                    <h5><"head"><"/head"></h5>
                    <li>the <"head"> element. This element acts as a container for all the stuff you want to include on the HTML page that isn’t the content you are showing to your page’s viewers. This includes things like keywords and a page description that you want to appear in search results, CSS to style out content, character set declarations, and more.</li>
                <br>
                    <h5><"meta charset="utf-8"> /h5>
                    <li>This element sets the character set your document should use to UTF-8 which includes most characters from the vast majority of written languages. Essentially, it can now handle any textual content you might put on it. There is no reason not to set this, and it can help avoid some problems later on.</li>
                <br>
                    <h5><"meta name="viewport" content="width=device-width"> </h5>
                    <li>This  viewport element ensures the page renders at the width of viewport, preventing mobile browsers from rendering pages wider than the viewport and then shrinking them down.</li>
                <br>
                    <h5><"title"><"/title'></h5>
                    <li>the <"title"> element. This sets the title of your page, which is the title that appears in the browser tab the page is loaded in. It is also used to describe the page when you bookmark/favorite it.</li>
                <br>
                    <h5><'body"><"/body"></h5>
                    <li>the <'body"> element. This contains all the content that you want to show to web users when they visit your page, whether that's text, images, videos, games, playable audio tracks, or whatever else.</li>
                </ul>

                <br>
                    <h2 style="text-align:center;">Images</h2>
                <br>
                    <p>The <"img"> tag is used to embed an image in an HTML page. Images are not technically inserted into a web page; images are linked to web pages. The <"img"> tag creates a holding space for the referenced image.</p>
                    <img src="{{ asset('assets/images/img.png') }}" >
                <br>
                    <h5>the <"img"> element:</h5>
                    <p>As we said before, it embeds an image into our page in the position it appears. It does this via the src (source) attribute, which contains the path to our image file.</p>
                    <p>We have also included an alt (alternative) attribute. In the alt attribute, you specify descriptive text for users who cannot see the image, possibly because of the following reasons:</p>
                <br>
                <ul>
                    <li>They are visually impaired. Users with significant visual impairments often use tools called screen readers to read out the alt text to them.</li>
                    <li>Something has gone wrong causing the image not to display. For example, try deliberately  changing the path inside your src attribute to make it incorrect. If you save and reload the page, you should see something like this in place of the image:</li>
                    <img src="{{ asset('assets/images/test.png') }}" >
                </ul>    
                    <p>The keywords for alt text are “descriptive text”. The alt text you write should provide the reader with enough information to have a good idea of what the image conveys. In this example, our current text of “My test image” is no good at all. A much better alternative for our Firefox logo would be “The Firefox logo: a flaming fox surrounding the Earth.”</p>
                <br>
                    <h2 style="text-align:center;">Marking up text</h2>
                <br>
                    <p>A markup language is a text-encoding system consisting of a set of symbols inserted in a text document to control its structure, formatting, or the relationship between its parts. Markup is often used to control the display of the document or to enrich its content to facilitate automated processing.</p>
                <br>
                    <h5>Headings</h5>
                    <li>Heading elements allow you to specify that certain parts of your content are headings — or subheadings. In the same way that a book has the main title, chapter titles, and subtitles, an HTML document can too. HTML contains 6 heading levels, <"h1"> - <"h6"> , although you’ll commonly only use 3 to 4 at most:</li>
                    <img src="{{ asset('assets/images/head.png') }}" >
                <br>
                    <h5>Paragraphs</h5>
                    <li>A paragraph element in an HTML document is made up of content — text, images, or other content like form fields — that appears between an opening <"p"> tag and closing <"/p"> tag. Paragraphs belong to the class of elements called block-level elements.</li>
                    <img src="{{ asset('assets/images/parag.png') }}" >
                <br>
                    <h5>Lists</h5>
                    <li>A lot of the web’s content is lists and HTML has special elements for these. Marking up lists always consists of at least 2 elements. The most common list types are ordered and unordered lists:</li>
                <br>
                <ul>
                    <h5>Unordered lists</h5>
                    <li>are for lists where the order of the items doesn’t matter, such as a shopping list. These are wrapped in a <"ul"> element.
                <br>
                    <h5>Ordered lists</h5>
                    <li>are for lists where the order of the items does matter, such as a recipe. These are wrapped in an <"ol"> element.</li>
                <br>
                </ul>
                    <h2 style="text-align:center;">Examples of List</h2>
                    <img src="{{ asset('assets/images/list.png') }}" >
                <br>    
                <img src="{{ asset('assets/images/list1.png') }}" >
                <br>
                    <h2 style="text-align:center;">Links</h2>
                <br>    
                    <p>Links are very important — they are what makes the web a web! To add a link, we need to use a simple element — <"a"> — “a” being the short form for “anchor”. To make text within your paragraph into a link, follow these steps:</p>
                <br>
                <ul>
                    <li>Choose some text. We chose the text “Manifesto”.</li>
                    <li>Wrap the text in an <"a"> element, as shown below:</li>
                    <li>Give the <"a"> element an href attribute, as shown below:</li>
                    <img src="{{ asset('assets/images/steps.png') }}" >
                    <li>Fill in the value of this attribute with the web address that you want the link to:</li>
                    <img src="{{ asset('assets/images/steps1.png') }}" >
                </ul>
                <br>
                    <p>You might get unexpected results if you omit the https:// or http:// part, called the protocol, at the beginning of the web address. After making a link, click it to make sure it is sending you where you wanted it to.</p>
                <br>    
                    <p>Note: href might appear like a rather obscure choice for an attribute name at first. If you are having trouble remembering it, remember that it stands for hypertext reference.</p>        
                <br>
                    <h2 style="text-align:center;">Conclusion</h2>
                <br>
                    <p>To conclude, HTML (Hypertext Markup Language) is the foundational element of the World Wide Web, serving as a standardized markup language for organizing content online. Its user-friendly nature and adaptability cater to both novices and seasoned developers, facilitating the design of engaging and interactive web pages. Complemented by CSS (Cascading Style Sheets) and JavaScript, HTML plays a pivotal role in shaping the user experience and ensuring smooth communication between browsers and web servers. As technology progresses, HTML evolves with new standards and features, ensuring its continued relevance in the ever-changing field of web development. Ultimately, HTML remains an essential tool for individuals involved in creating and managing online content, embodying the fundamental principles of web design and accessibility.</p> 

            </div>
        </div>
      </nav>
    </main>

              <!-- JavaScript -->
    <script src="{{ asset('assets/js/homejs.js') }}"></script>
    



    </body>
  </html>