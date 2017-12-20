<!--
    Author: Mario Hernandez
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookmark</title>
    <link rel="stylesheet" href="bookmark.css" />
    <link rel="script" href="bookmark.js" />
    <meta charset="UTF-8">
</head>
<body>
    <p> Hello, 
<?php
$name = $_POST["name"];
echo "${name}";
?>
<p>
</body>

</html>