/*
Fall.2018

    Home
    Modules
    Piazza
    Grades
    Syllabus
    People

PHP Basics

    Due Monday by 11:59pm Points 100 Submitting a file upload File Types zip, tar, and gz

In this assignment, you will use PHP to create simplify your page layout and process form data.
Part 1 - Converting our Layout

With our past assignments, we purposefully went through the painful steps of updating our header and nav bar of EVERY page when we added a new page.  With PHP, we can build a single webpage from multiple files.  If one of these files contains our header and nav bar, then every page that includes that file will have the contents.  Therefore, we only have one file and place to make changes and have it propagate to every webpage.
Step 0 - Rename ALL of our pages

Previously all of our webpages were of type HTML.  We're now working with PHP so we need to change the extension of all our webpages to .php.  This should include:

    index.php
    aboutme/aboutme.php
    javascript/jsmouse.php
    javascript/jskeyboard.php
    jquery/quiz.php

At this point, as long as Apache is set properly, then you can point your browser to index.php and see your webpages just as you left them!  Navigate to another page and see them work.  Oh no, the nav bar links are still to aboutme.html and such!  Before we go through each page and fix them one by one, let's create a more efficient solution.  Move on to Step 1.
Step 1 - Create a Templated Header

Create a file called templateHeader.php.  This file will contain the necessary HTML/CSS to display the same header and nav bar we have been using all along.  Copy your header and nav bar code into this file.  Go through and update the links to point to the corresponding *.php page.  We will leave all of the CSS Tutorials as their respective *.html file types.

Now every page that has the header and nav bar can simply include this PHP file in its place.  

Almost there: we still need to be able to customize the header and/or nav bar to display where we currently are on our site.  On each individual page, before you include the templateHeader.php file create a variable to keep track of the current page.  Use this variable in your templateHeader.php file to highlight the corresponding tab(s) in your nav bar.

To give an example, you will create the variable in index.php but use it in templateHeader.php.  Be sure you understand why the variable is accessible in templateHeader.php despite not setting its value within the file.
Step 2 - Create a Templated Footer

Similarly, create a file called templateFooter.php that contains all the footer information for your pages.  Include this file at the bottom of every page.  Make sure your validation links represent the current page as well.

If you view your pages at this point, then you should see your jQuery submission reproduced in PHP form.

We're going to make one addition to the footer.  Add a line somewhere that states "This page was last updated MM/dd/YY hh:mm" with the file's last edit time for the Mountain Timezone.
Part 2 - Set Up Shop

We're now going to get to the form part of HTML/JS/PHP.  On your nav bar, add a dropdown titled "PHP" with an entry for "Form" (we'll be adding two more options to this dropdown shortly).  These new files will go in a php/ subfolder.

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
Part 3 - Create the Ledger

We're going to improve our store by having a more intelligent item list and create an order history.  Create a new page called io.php and add a "File I/O" option to our PHP dropdown.

The io.php page should contain the same form you developed for the prior part.  Instead of hard coding in the items and prices, we will read these values from a file.  Create a file called itemlist.csv that contains a comma separated list of item names and prices.  Using PHP, read and parse this csv file to populate your item drop down.  Store any other relative information you need in the csv as well.

When the form is submitted, to a corresponding io_submit.php page, the same receipt page should be shown.  We will perform one additional step to log all orders placed.  Write out the following information to a file named orders.csv:

    Customer name
    Purchase time
    Item Name
    Purchase Quantity
    Purchase Total

If this file already exists, then we want to be sure to append the latest purchase to the end of the file.

NOTE: Due to server permissions on Luna, an orders.csv file has already been created in your folder.  If you are testing on Luna, then edit this existing file. */