<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link rel="stylesheet" href="cssPage.css">
</head>
<body>
    <div class="cssDiv">
        <h2>What Can JavaScript Do?</h2>
        <p>JavaScript is the programming language of the web.<br/>
            It can calculate, manipulate and validate data.<br/>
            It can update and change both HTML and CSS.
        </p>
        <h2>JavaScript Can Change HTML Content</h2>
        <p>
            One of many JavaScript HTML methods is <span style="color: red;">getElementById().</span><br/>
            The example below "finds" an HTML element (with id="demo")
            changes the element content (innerHTML) to "Hello JavaScript":
        </p>
        <h2>Example</h2>
        <p>
            document.getElementByid("<span style="color: green;">demo</span>").innerHTML = <span style="color: green;">"Hello JavaScript";</span>
        </p>
        <h4>JavaScript accepts both double and single quotes</h4>
        <h2>Example</h2>
        <p>
            document.getElementByid(<span style="color: green;">'demo'</span>).innerHTML = <span style="color :green">'hello JavaScript';</span>
        </p>
        <h2>JavaScript Can Change HTML Styles (CSS)</h2>
        <p>Changing the style of an HTML element, is a variant of changing an HTML attribute:</p>
        <h2>Example</h2>
        <p>document.getElementByid(<span>"demo"</span>).style.fontSize = <span>"50px"</span>;
        </p>
        <h2>JavaScript can hide HTLM Element</h2>
        <p>
            Hiding HTML elements can be done by changing the display style:
        </p>
        <h2>Example</h2>
        <p>
            document.getElementByid(<span>"demo"</span>).style.display =<span>"none"</span>;
        </p>
        <h2>y</h2>
    </div>
</body>
</html>