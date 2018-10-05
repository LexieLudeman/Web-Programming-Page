var questionBoxState = false;
var answer;


$(document).ready(function(){
    if (questionBoxState==false){
        $(".qBox").hover(function(){
            $(this).css("background-color", "yellow");
            $('#questionSpace').text("Click to see the question");
        }, function(){
            $(this).css("background-color", "#bd8eff");
            $('#questionSpace').text("");
        });
    }

    $("#first").click(function(){
        $('#questionSpace').text("A Link to the Past is the only Zelda game released for SNES");         
        questionBoxState=true;
        answer=false;
    });

    $("second").click(function(){
        $('#questionSpace').text("Clefairy was supposed to be the Pokemon mascot");         
        questionBoxState=true;
        answer=true;
    });

    $("third").click(function(){
        $('#questionSpace').text("Mario was originally called Jumpman and was a carpenter");         
        questionBoxState=true;
        answer=true;
    });

    $("fourth").click(function(){
        $('#questionSpace').text("Roy is the only previous fighter that will not be included in the newest game");         
        questionBoxState=true;
        answer=false;
    });
});









/* TO DO:

Part 3:
When the user clicks on a box to select a question:
    The appropriate question is displayed in the question box
    If the "Check Answer" button is clicked when true/false are not selected, display an alert with an appropriate message ("Must select true/false")
    If the user attempts to choose another question without answering the current question, an alert will display ("Must answer current question")
    If a question is currently displayed but has not been answered, when hovering over a question box change the background color but do NOT display "Click to see the question" (don't overwrite the current question the user needs to answer)


Part 4:
Once the user has selected an answer and pressed "Check Answer":

    Display whether the answer is correct or not
    The box for the question should be removed from the list
    The question topic is displayed in the Questions Attempted sidebar
    Reset the true/false buttons to be unselected


Part 5:
After all questions, have been answered:

    Display some type of figure telling the user the game has ended.
    When the user double clicks the figure, some interesting visual effect should happen.



*/