<?php

require(__DIR__ . '/header.php');
require(__DIR__ . '/functions.php');
?>

<main>
    <section class="container">
        <!-- form that contains different radio-inputs with a submit-button -->
        <div class="flex-container">
            <h2>What do you wanna know?</h2>
            <br>
            <form method="post">
                <div>
                    <input type="radio" name="choose" id="alternative-1" size="48px" value="Just say hi to me" />
                    <label for="alternative-1">Just say hi to me</label>
                </div>
                <div>
                    <input type="radio" name="choose" id="alternative-2" value="Tell me something about trees" />
                    <label for="alternative-2">Tell me something about trees</label>
                </div>
                <div>
                    <input type="radio" name="choose" id="alternative-3" value="Tips to feel better" />
                    <label for="alternative-3">Tips to feel better </label>
                </div>
                <input type="submit" class="button-2" value="Submit" class="submitbtn" />
            </form>
            <br>
            <?php
            // if a value has been choosen - show the answer when pushing the button - not otherwise
            if (isset($_POST['choose'])) {
                $chatMessage = $_POST['choose'];

                echo getResponse($chatMessage, $responseMaps);
            }
            ?>
        </div>
        <br>
    </section>
    <br>
    <section class="container-emojis">
        <div class="emojis">
            <?php
            // print 60 tree-emojis on the page
            for ($i = 0; $i <= 60; $i++) {
                echo "🌳 ";
            }
            ?>
        </div>
    </section>
</main>
