/*

Create a file named "form.php".  On this page you are going to create a form for a shop you are creating that sells items you're interested in.  Your form needs to have the following input fields and elements:

Field Sets
First* & Last* Name
Email address*
Selector* to choose which item to purchase.  Each item should also have a price.
Quantity*
Radio buttons* if a user wants to make a donation
Hidden field to store the time the form was submitted
Reset & Submit buttons

The labels and fields should be well aligned, but we do not want to use a table to structure this layout!  When an option is chosen from the selector, a picture that shows the item should be displayed on the page.

Pressing the reset button should clear all the fields and remove the picture if displayed.

Pressing the submit button should first validate all fields.  The fields above marked with a * are required.  Additionally, the first & last name should contain only letters, spaces, and apostrophes.  The email address should be well formed.  The quantity should be greater than zero.  If any of the validation steps fail, then display help text to the user alerting them what was not met.

We want the form to be submitted via post and processed by form_submit.php.  The submitted form should generate a receipt that prints back all information entered in the form.  The receipt should include the price per unit, quantity, and subtotal.  Hard code in a tax rate (7% or similar).  Display the tax on the subtotal.  If the donation radio button was checked, then calculate the cents needed to round up to the nearest dollar.  Finally, display the grand total for the purchase.
*/

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//Initializing variables to be empty strings
$firstErr = $lastErr = $emailErr = $selectorErr = $quantityErr = $donationErr = "";
$first = $last = $email = $selector = $quantity = $donation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //First name field
    if (empty($_POST["first"])) {
        $firstErr = "First name is required"; } 
    else {
        $first = test_input($_POST["first"]);
        //Confirm letters and whitespace only
        if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
            $firstErr = "Only letters and white space allowed";
        }
    }

    //Last name field
    if (empty($_POST["last"])) {
        $lastErr = "Last name is required"; } 
    else {
        $last = test_input($_POST["last"]);
        //Confirm letters and whitespace only
        if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
            $lastErr = "Only letters and white space allowed";
        }        
    }

    //Email field
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        //Confirm correct email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    //Selector field
    if (empty($_POST["selector"])) {
        $selectorErr = "Selection is required";
    } else {
        $selector = test_input($_POST["selector"]);
    }


    //Quantity field
    if (empty($_POST["quantity"])) {
        $quantityErr = "Quantity is required";
    } else {
        $quantity = test_input($_POST["quantity"]);
        if ($quantity <= 0) {
            $quantityErr = "Quantity must be greater than zero";
        }
    }

    //Donation field
    if (empty($_POST["donation"])) {
        $donationErr = "Donation selector is required";
    } else {
        $donation = test_input($_POST["donation"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Shop Form</h2>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    First Name: <input type="text" name="first">
    <span class="error">* <?php echo $firstErr;?></span>
    <br><br>

    Last Name: <input type="text" name="last">
    <span class="error">* <?php echo $lastErr;?></span>
    <br><br>  

    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    <!--
    Selection: <input type="text" name="selector">
    <span class="error"><?php echo $selectorErr;?></span>
    <br><br>
    -->
    Quantity: <input type="text" name="quantity">
    <span class="error">* <?php echo $quantityErr;?></span>
    <br><br>

    Do you want to round up to the nearest dollar for a donation?
    <input type="radio" name="donation" value="yes">Yes
    <input type="radio" name="donation" value="no">No
    <span class="error">* <?php echo $donationErr;?></span>

    <br><br>

    <input type="submit" name="submit" value="Submit">  
</form>

<p><span class="error">* required field</span></p>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>