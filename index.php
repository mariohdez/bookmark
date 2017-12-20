<!--
    Author: Mario Hernandez
-->
<?php
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookmark</title>
    <link rel="stylesheet" href="bookmark.css" />
    <link rel="script" href="bookmark.js" />
    <meta charset="UTF-8">
</head>

<body>
    <h1>
        Bookmark
    </h1>
    <p>
        Keep track of what you want to visit.
    </p>
    <div class="container">
        <form>
            <fieldset>
                <legend>
                    New Bookmark
                </legend>

                <label class="heading" for="name">Name:</label>
                <input type="text" name="name" id="name"/> <br />

                <label class="heading" for="address">Address:</label>
                <input type="text" name="address" id="name"/> <br />

                <input type="submit" value="Sign up" />
            </fieldset>
        </form>
    </div>
</body>

</html>