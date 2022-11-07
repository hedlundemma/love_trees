INSERT MANDATORY GIF

# Project Title

This project is a webpage with a tree-roulette where you can look at different trees.

Theres also an tips-page where you can choose from three different categories and learn about trees and get some tips on how to feel better - related to trees. You can choose the same alternative multiple times and get different answers by pressing the submit button one more time.

Link to one.com-website: https://emma-hedlund.se/love_trees

# Installation

Add the installation instructions.

# Code Review

Code review written by [Simon Lövbacka](https://github.com/lovbackan).

1. `info.php:31-32` - You dont need the (=== true) in the if statement since it already is a boolean.

2. `info.php:15` - I dont think the (size="48px") has any function and even if it had u probably dont want to have inline css in ur html code.

3. `info.php:43-48` - I think it would be good practice to make this forloop inside a function in functions.php, where u can put a number in the function and it would echo that amount of trees and then just call the function in this line. Then u could reuse this function everytime u would need the pretty tree emoji.

4. `main.css: 55-56 -I dont think u need the .flex-container-2 since it has the same values as .flex-container.

5. `header.php: 12 ` - The title of ur loveley site should probably not be named document.

# Testers

Tested by the following people:

1. Filip Jonasson
2. Vali Al Osachi
