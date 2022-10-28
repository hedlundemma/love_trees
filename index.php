<?php
require(__DIR__ . '/functions.php');
require(__DIR__ . '/values.php');
// require(__DIR__ . '/svg.php');

require(__DIR__ . '/header.php');
?>


<div class="grid-container2">
    <h3>What do you wanna know?</h3>
    <form method="post">
        <div>
            <input type="radio" name="alternative-2" id="alternative-1" value="Just say hi to me" />
            <label for="question-1-answers-A">Just say hi to me</label>
        </div>
        <div>
            <input type="radio" name="alternative-2" id="alternative-2" value="Tell me something about trees" />
            <label for="question-1-answers-A">Tell me something about trees</label>
        </div>
        <div>
            <input type="radio" name="alternative-2" id="alternative-3" value="Tips to feel better" />
            <label for="question-1-answers-A">Tips to feel better </label>
        </div>

        <input type="submit" class="button-2" value="Submit" class="submitbtn" />
        <br>
        <br>
        <?php
        if (isset($_POST['alternative-2'])) {
            $chatMessage = $_POST['alternative-2'];
            echo getResponse($chatMessage);
        }
        ?>
        <br>
    </form>
</div>

<div class="grid-container">
    <img class="grid-tree" src="<?php echo getRandomTree(); ?> " width="400px" height="400px" alt="" />
    <form method="post" action="index.php">
        <button name="button">Tree roulette</button>
    </form>
</div>
