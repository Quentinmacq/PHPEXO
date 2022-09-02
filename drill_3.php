<?php
$kids = 12;
$adult = 18;
$zombie = 116;



if (isset($_GET['age'])) {
    if ($_GET['age'] < $kids) {
        echo "Hello Kiddo";
    } else if (($_GET['age'] > $kids) && ($_GET['age'] < $adult)) {
        echo "Hello Teenager";
    } else if (($_GET['age'] > $adult) && ($_GET['age'] < $zombie)) {
        echo "Hello adult";
    } else if ($_GET['age'] > $zombie)
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}

?>
<form method="get" action="">
    <label for="age">...</label>
    <input type="number" name="age">
    <input type="submit" name="submit" value="Greet me now">
</form>