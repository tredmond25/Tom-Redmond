<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Human Powered Business</title>
        <meta name="Author" content="Tom Redmond">
        <meta name="Description" content="This website will go over how the human powered business model works and why it should be adopted mainstream across corporate America.">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time();?>" type="text/css">
        
    </head>

<?php

print '<body class="' . $pathParts['filename'] . '">';

include 'header.php';
    include 'nav.php';
    ?>