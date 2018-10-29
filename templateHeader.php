<header>
    <h1>Index Page</h1>
    <ul class="navbar">
        <li><a id="active" href="index.php">Index</a></li>
        <li><a href="aboutme/aboutme.php">About Me</a></li>
        <div class="dropdown">
            <button class="dropbtn">CSS Projects</button>
            <div class="dropdown-content">
                <a href="csstutorials/turtlecoders.html">Turtle Coders</a>
                <a href="csstutorials/posex.html">Position Example</a>
                <a href="csstutorials/floatExBoxes.html">The Box Model</a>
                <a href="csstutorials/clearEx.html">Float and Clear</a>
            </div>
        </div>
        <li><a href="javascript/jsmouse.php">JavaScript Mouse</a></li>
        <li><a href="javascript/jskeyboard.php">JavaScript Keyboard</a></li>               
        <li><a href="jquery/quiz.php">JQuery Quiz</a></li> 
    </ul>
</header>

/*Create a file called templateHeader.php.  This file will contain the necessary HTML/CSS to display the same header and nav bar we have been using all along.  Copy your header and nav bar code into this file.  Go through and update the links to point to the corresponding *.php page.  We will leave all of the CSS Tutorials as their respective *.html file types.

Now every page that has the header and nav bar can simply include this PHP file in its place.  

Almost there: we still need to be able to customize the header and/or nav bar to display where we currently are on our site.  On each individual page, before you include the templateHeader.php file create a variable to keep track of the current page.  Use this variable in your templateHeader.php file to highlight the corresponding tab(s) in your nav bar.

To give an example, you will create the variable in index.php but use it in templateHeader.php.  Be sure you understand why the variable is accessible in templateHeader.php despite not setting its value within the file.*/