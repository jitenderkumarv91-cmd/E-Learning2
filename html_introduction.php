<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="cssPage.css">
</head>
<body>
    <nav>
        <div class="page_name">
            <img src="logoDesign.png" id="logo">
            STUDY HERE
        </div>
        <div class="multiple_div">
        <div class="product_">
            <a id="product_1" href="">HOME</a><!--home page-->
        </div>
        <div class="resource_">
            <a id="resource_1" href="">COURSE</a><!--COURSE NAME-->
        </div>
        <div class="team_">
            <a id="team_1" href="">CURTIFICATE</a><!--teachers name-->
        </div>
        <div class="help_">
            <a id="help_1" href="">AUTHOR</a><!--AUTHOR-->
        </div>
        <div class="community_">
            <a id="community_1" href="">ABOUT</a><!--ABOUT-->
        </div>
        <div class="about_">
            <a id="about_1" href="">PROFILE</a>
        </div>
        </div>
        <div class="login">
            <a id="login_1" href="login.html" onclick="OpenLogin()">Login</a>
        
            <a id="singup_1" href="singin.html">Sing up</a>
        </div>
    </nav>
    <div class="searchBar">
        <input type="text" placeholder="Search Here" >
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>
    </div>
    <div class="cssMaincontant">
        <div class="manuBar">
        <h1>HTML Tutorial</h1>
            <a href="html_introduction.php">Html Introduction</a><br/>
            <a href="html_editors.php">html_editors</a><br/>
            <a href="selector.html"></a><br/>
            <a href="how-to.html">CSS How-to-Add</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
            <a href="">s</a><br/>
        </div>
    <div class="cssDiv">
        <h1 id="html_heading">HTML Introduction:-</h1>
        <hi id="html_heading2"><b>What is HTML:-</b></hi>
        <ul>
            <li>HTML stands for Hyper Text Markup Language.</li>  

            <li>HTML is the standard markup language for creating Web pages.</li>

            <li>HTML describes the structure of a Web page.</li>

            <li>HTML consists of a series of elements.</li>

            <li>HTML elements tell the browser how to display the content.</li>

            <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>
        </ul>
        <h1>A Simple HTML Document:-</h1>

        <h2>Example</h2>
        <div style="margin-left: 5vh;">
            <b>
                &lt;!DOCTYPE html &gt;<br/>
                &lt;html &gt;<br/>
                    &lt;head &gt;<br/>
                        &lt;title&gt;Page Title&lt;/title&gt;<br/>
                    &lt;/head><br/>
                    &lt;body><br/>
                        &lt;h1&gt;My First Heading&lt;/h1&gt;<br/>
                        &lt;p&gt;My first paragraph.&lt;/p&gt;<br/>
                    &lt;/body&gt;<br/>
                &lt;/html&gt;<br/>
            </b>
        </div>

        <h1>Example Explained:-</h1>
        <ul>
            <li>The <b>&lt;!DOCTYPE html&gt;</b> declaration defines that this document is an HTML5 document</li>
            <li>The <b>&lt;html&gt;</b> element is the root element of an HTML page</li>
            <li>The <b>&lt;head&gt;</b> element contains meta information about the HTML page</li>
            <li>The <b>&lt;title&gt;</b> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
            <li>The <b>&lt;body&gt;</b> element defines the document's body, and is a container for all the visible contents, such as headings,
                 paragraphs, images, hyperlinks, tables, lists, etc.</li>
            <li>The <b>&lt;h1&gt;</b> element defines a large heading</li>
            <li>The <b>&lt;p&gt;</b> element defines a paragraph</li>
        </ul>

        <h1>What is an HTML Element?</h1>
        <div style="margin-left: 5vh;">
            <b>
            An HTML element is defined by a start tag, some content, and an end tag:<br/>
                &lt;tagname&gt; Content goes here... &lt;/tagname&gt;<br/>
            The HTML element is everything from the start tag to the end tag:<br/>
                &lt;h1&gt; My First Heading &lt;/h1&gt;<br/>
                &lt;p&gt; My first paragraph. &lt;/p&gt;<br/>
            </b>
        </div>
    </div>
</body>
</html>