<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Javascript Mouse</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="author" content="Lexie Ludeman">
    <link rel="stylesheet" type="text/css" href="../NavBar.css" />
    <link rel="stylesheet" type="text/css" href="jsmouse.css" />
    <script type="text/javascript" src="jsmouse.js" ></script>
</head>
<body>
    <header>
        <h1>Javascript Mouse Page</h1>
        <ul class="navbar">
            <li><a href="../index.html">Index</a></li>
            <li><a href="../aboutme/aboutme.html">About Me</a></li>
            <div class="dropdown">
                <button class="dropbtn">CSS Projects</button>
                <div class="dropdown-content">
                    <a href="../csstutorials/turtlecoders.html">Turtle Coders</a>
                    <a href="../csstutorials/posex.html">Position Example</a>
                    <a href="../csstutorials/floatExBoxes.html">The Box Model</a>
                    <a href="../csstutorials/clearEx.html">Float and Clear</a>
                </div>
            </div>
            <li><a id="active" href="jsmouse.html">JavaScript Mouse</a></li>
            <li><a href="jskeyboard.html">JavaScript Keyboard</a></li>              
            <li><a href="../jquery/quiz.html">JQuery Quiz</a></li>          
        </ul>
    </header>

    <section>
        <h2>HTML5 Canvas</h2>
        <canvas id="myCanvas" width="500" height="500">
    </section>

    <button id="button" onmousedown="bDown(this)">Make Me Sad</button>
    <footer>
        <br><br><p>Comments or suggestions? Please <a href="mailto:aludeman@mymail.mines.edu">email</a> me.</p>
    </footer>
    
</body>
</html>