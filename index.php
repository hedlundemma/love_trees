<?php
require(__DIR__ . '/functions.php');
require(__DIR__ . '/values.php');
require(__DIR__ . '/header.php');

?>

<main>
    <section class="container">
        <div class="flex-container-2">
            <img class="tree" src="<?php echo getRandomTree($trees); ?> " width="400px" height="400px" alt="" />
            <br>
            <form method="post" action="index.php">
                <button name="button" value="button-tree">Tree roulette</button>
            </form>
        </div>
</main>
