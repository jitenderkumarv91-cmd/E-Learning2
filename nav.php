<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
    background-color: black;
    height: 60px;
    display: flex;
    justify-content: space-around;
    position: relative;
}
.searchBar{
    width: 85vh ;
    height: 35px;
    margin-left: 70vh;
    background-color: white;
    border-radius: 12px;
    border-color: rgb(48, 42, 42) ;
}
.searchBar input{
    width: 76vh;
    height: 5vh;
    padding: 8px;
    border: none;
    margin-top: 2px;
    display: flex;
    outline: none;
    border: none;
    border-radius: 12px;
}
.searchBar button{
    z-index: 1;
    margin-left: 78vh;
    position: relative; top: -27px;
    background-color: transparent;
    outline: none;
    border: none;
}
.search{
    width: 3vh;
    height: 3vh;
    margin-top: -3px;
    margin-left: 8px;
}
    .page_name{
    color: white;
    font-family: inherit;
    width: fit-content;
    margin-top: 20px;
    display: flex;
}
.page_name img{
    width: 50px;
    height:40px;
    margin-top: -18px;
    margin-right: 0px;
}
#logo{
    border-radius: 10px;
}
.multiple_div{
    display: flex;
    justify-content: space-around;
    width: 40%;
    margin-top: 20px;  
    margin-left: 10%;
}
nav #product_1:hover{
    font-size: 20px;
}
nav #team_1:hover{
    font-size: 20px;
}
nav #resource_1:hover{
    font-size: 20px;
}
nav #community_1:hover{
    font-size: 20px;
}
nav #help_1:hover{
    font-size: 20px;
}
nav #about_1:hover{
    font-size: 20px;
}
.multiple_div #product_1{
    text-decoration: none;
    color: white;
    font-family: inherit;
    width: fit-content;
}
.multiple_div #team_1{
    text-decoration: none;
    color: white;
    width: fit-content;
}
.multiple_div #resource_1{
    text-decoration: none;
    color: white;
    width: fit-content;
}
.multiple_div #community_1{
    text-decoration: none;
    color: white;
    width: fit-content;
}
.multiple_div #help_1{
    text-decoration: none;
    color: white;
    width: fit-content;
}
.multiple_div #about_1{
    text-decoration: none;
    color: white;
    width: fit-content;
}
.login{
    margin-top: 20px;
    width: fit-content;
    margin-left: 60px;
}
.login #login_1{
    text-decoration: none;
    color: white;
    margin-left: 50px;
    width: fit-content;

}
.login #singup_1{
    text-decoration: none;
    background-color: white;
    color: black;
    border-radius: 5px;
    padding: 5px;
   
}
#brand-img{
    width: 80vh;
    margin-top: 30px;
    margin-left: 65vh;
    z-index: -1;
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
    <div class="content">
        <h2>CSS Syntax</h2>
        <p>
            CSS syntax defines how CSS rules are written.
            Each CSS rule consists of a selector and a declaration block.
        </p>
        <h3>Basic Structure:</h3>
        <pre>
    selector {
        property: value;
    }
        </pre>
    
        <h3>Explanation:</h3>
        <ul>
            <li><b>Selector</b> – Selects the HTML element</li>
            <li><b>Property</b> – Defines what you want to change</li>
            <li><b>Value</b> – Defines the change</li>
        </ul>
    
        <h3>Example:</h3>
        <pre>
    p {
        color: red;
        font-size: 18px;
    }
        </pre>
    
        <p>
            You can write multiple properties inside one selector.
        </p>
    </div>
    
</body>
</html>