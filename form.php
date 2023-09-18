<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Human Powered Business</title>
        <meta name="Author" content="Tom Redmond">
        <meta name="Description" content="This website will go over how the human powered business model works and why it should be adopted mainstream across corporate America.">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        
    </head>

    <body>
        <header>
            <h1>Human Powered Business Model Survey</h1>
            <h2>Who wants Coporate America to employ the HPB method? Lets hear your voice.</h2>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="detail.php">Example Businesses</a>
            <a href="form.php">Survey</a>
        </nav>
        <main>
            <section>
                <?php
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>';
                ?>
            </section>
            <section>
                <form action="#"
                      method="POST">
                    <fieldset>
                        <legend>Contact Information</legend>
                        <p>
                            <label for="txtEmail">Email Address:</label>
                            <input type="text" name="txtEmail" id="txtEmail">
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>Do you think corporate America should adopt a HPB model</legend>
                        <p>
                            <input type="radio" name="action" id="Yes" value="Yes" tabindex="200">
                            <label for="Yes">Yes</label>
                        </p>
                        <p>
                            <input type="radio" name="action" id="Needmoreinformation" value="Needmoreinformation" tabindex="200">
                            <label for="Needmoreinformation">Need more information</label>
                        </p>
                        <p>
                            <input type="radio" name="action" id="No" value="No" tabindex="200">
                            <label for="No">No</label>
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend>Why do you think are the two most important aspects of HPB model</legend>
                        <p>
                            <input type="checkbox" name="chkClimate" id="chkClimate" value="1" tabindex="200">
                            <label for="chkClimate">Climate change</label>
                        </p>
                        <p>
                            <input type="checkbox" name="chkEconomic" id="chkEconomic" value="1" tabindex="200">
                            <label for="chkEconomic">Economic inequality</label>
                        </p>
                        <p>
                            <input type="checkbox" name="chkRace" id="chkRace" value="1" tabindex="200">
                            <label for="chkRace">Race ineqaulity</label>
                        </p>
                    </fieldset>
            </section>
        </main>
        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer>
    </body>
</html>