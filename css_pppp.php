<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>/* ===== NAVBAR FIX ===== */
nav{
    position: fixed;        /* CHANGE: navbar fixed */
    top: 0;                 /* CHANGE */
    left: 0;                /* CHANGE */
    width: 100%;            /* CHANGE */
    background-color: black;
    height: 60px;
    display: flex;
    justify-content: space-around;
    z-index: 1000;          /* CHANGE: upar dikhne ke liye */
}

/* ===== SEARCH BAR ADJUST ===== */
.searchBar{
    position: fixed;
    margin-top: 60px;       /* CHANGE: navbar ke neeche lane ke liye */
    height: 45px;
    background: linear-gradient(to bottom, black 10%, white);
}

/* ===== MAIN LAYOUT ===== */
.cssMaincontant{
    display: flex;
    margin-top: 45px;       /* CHANGE: search bar ke neeche */
}

/* ===== MENU BAR FIX ===== */
.manuBar{
    position: fixed;        /* CHANGE: menu bar fixed */
    top: 105px;             /* CHANGE: nav + search bar height */
    left: 0;                /* CHANGE */
    width: 40vh;
    height: calc(100vh - 105px); /* CHANGE: full height minus header */
    background-color: rgb(207, 204, 204);
    padding-left: 2vh;
    overflow-y: auto;       /* CHANGE: agar menu lamba ho to scroll */
}

/* ===== MAIN CONTENT SCROLL ===== */
.cssDiv{
    margin-left: 42vh;      /* CHANGE: menu bar ke baad content */
    padding: 20px;          /* CHANGE */
    font-size: 20px;
}
</style>
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
        <h1>CSS Tutorial</h1>
            <a href="">CSS Introduction</a><br/>
            <a href="nav.html">CSS Syntax</a><br/>
            <a href="selector.html">CSS Selector</a><br/>
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
            <h1 id="css_heading"> CSS introduction :</h1>
            <h2>What is CSS ?</h2>
                <ul id="ul_list">
                <li>CSS stands for Cascading Style Sheets</li>
                <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
                <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
                <li>External stylesheets are stored in CSS files</li>
            </ul>
            <h2>Why Use CSS?</h2>
            <ul>
                <li>CSS is used to define styles for your web pages, including the design, layout, and variations in display for different devices and screen sizes.</li>
                <li>It allows you to separate content (HTML) from design (CSS), making your code cleaner and easier to maintain.</li>
                <li>CSS helps to improve the look and feel of websites, making them more attractive and user-friendly.</li>
                <li>It gives you control over the layout and structure of web pages, including positioning, colors, fonts, and responsiveness.</li>
                <li>CSS makes your website responsive, meaning it will look good on desktops, tablets, and mobile devices.</li>
            </ul>
        <div class="Allexample">
            <h2>
            Example
            </h2>
            <p class="example">
            <span style="color: rgb(196, 36, 196);">body</span>{<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(214, 39, 39);">background-color :</span>
                <span style="color: rgba(45, 45, 214, 0.952);">&nbsp;red;</span><br/>}<br/>
                <span style="color: rgb(196, 36, 196);">h1</span>{<br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(214,39,39);">color:&nbsp;</span>&nbsp;
                    <span style="color: rgb(44, 44, 185);">white</span>;<br/>
                } 
            </p>
            <br/>
            <br/>
        </div>
             <h1 id="css_syntex">CSS Syntex :</h1>
            <h2>CSS Rule Structure</h2>
            <ul>
                <li>The selector points to the HTML element you want to style.</li>
                <li>The declaration block contains one or more declarations separated by semicolons.</li>
                <li>Each declaration includes a CSS property name and a value, separated by a colon.</li>
                <li>Multiple CSS declarations are separated with semicolons, and declaration blocks are 
                <br/>surrounded by curly braces.</li>
            </ul>
            <div class="Allexample">
                <h2>Example</h2>
                
                <div class="example">
                    <ul>
                        <li>In this example, all &lt;p&gt; elements will be center-aligned, with a red text color:</li>
                        </ul>
                <p>
                P&#123;<br/>&nbsp;&nbsp;&nbsp;color: red;<br/>
                &nbsp;&nbsp;&nbsp;text-align: center;<br/>&#125;
                </p>
            </div>
        </div>
    </div>
</body>
