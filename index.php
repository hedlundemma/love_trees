<?php
require(__DIR__ . '/functions.php');
require(__DIR__ . '/values.php');
// require(__DIR__ . '/svg.php');

require(__DIR__ . '/header.php');


?>



<div class="grid-container">
    <img class="grid-tree" src="/images/<?php echo getRandomTree(); ?>" width=400px height=400px alt="" />
    <form>
        <button>Tree roulette</button>
    </form>
</div>


<h3>What do you wanna know?</h3>

<div>
    <input type="submit" name="alternative-1" id="alternative-1" value="Just say hi to me" />

</div>

<div>
    <input type="submit" name="alternative-2" id="alternative-2" value="Tell me something about trees" />

</div>

<div>
    <input type="submit" name="alternative-3" id="alternative-3" value="Tips to feel better" />

</div>






<?php

$chatMessage = 'hi';
echo "You said " . $chatMessage . "\n";
echo "Chatbot said" . getChatbotResponse($chatMessage);

?>
