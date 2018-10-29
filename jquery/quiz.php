<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>JQuery Quiz</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="author" content="Lexie Ludeman">
    <link rel="stylesheet" type="text/css" href="../NavBar.css" />
    <link rel="stylesheet" type="text/css" href="quiz.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="quiz.js" ></script>
</head>
<body>
    <header>
        <h1>VideoGame Quiz</h1>
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
            <li><a href="../javascript/jsmouse.html">JavaScript Mouse</a></li>
            <li><a href="../javascript/jskeyboard.html">JavaScript Keyboard</a></li>      
            <li><a id="active" href="quiz.html">JQuery Quiz</a></li>      
        </ul>
    </header>
    <br><br><br>

    <aside id="questionHistory"><h3>Question History</h3></aside>
    <section>
        <h3>Question</h3>
        <p id="questionSpace"> </p> 
    </section>


    <br><br><br><br><br><br><br><br>


    <section>
        <h3>Answer</h3>
        <form id="answerSpace">
            <input type="radio" name="guess" value="true"> True<br>
            <input type="radio" name="guess" value="false"> False<br>
            <input type="submit" value="Check Answer">
        </form>
    </section>

    <br><br><br><br><br><br><br>

    <section>
        <p id="score">Score:<span id="decimal">0</span>/4(<span id="percent">0</span>%)</p>
    </section>

    <br><br>

    <section>
        <a class="qBox" id="first" href="">Zelda</a>
        <a class="qBox" id="second" href="">Pokemon</a>
        <a class="qBox" id="third" href="">Mario</a>
        <a class="qBox" id="fourth" href="">Super Smash Bros</a>
    </section>
    <footer>
        <br><br><p>Comments or suggestions? Please <a href="mailto:aludeman@mymail.mines.edu">email</a> me.</p>
    </footer>
        

</body>

</html>


