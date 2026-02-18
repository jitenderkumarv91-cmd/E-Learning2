<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <style>
        #h1{
            font-size :60px ;
            margin-left: 15vh;
            color: rgb(240, 215, 183);
        }
    </style>
</head>
<body>
    <div id="div1">
         <h1 id="h1">Forgate</h1>
        <form id="loginForm">
            <h4>Enter New Password</h4>
            <input id="jitu" type="password" placeholder=" New Password"><br/><br/>
            <h4>Password</h4>
            <input id="con" type="password" placeholder="Conform Password"><br/><br/><br/>
            <input type="submit" value="Submit" id="submit_">
        </form>
    </div>
    <script>
    const jitu = document.getElementById('jitu').value;
    const con = document.getElementById('con').value;

    if (jitu === "" || con === "") {
        alert("Please fill in all fields!");
    } else {
        console.log("Login attempted with:", jitu);
        alert("Login successful for: " + jitu);
    }
    </script>
</body>
</html>