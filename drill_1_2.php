<?php
// Create the array of possible states
$possible_states = ['health hazard', 'filthy', 'dirty', 'clean'];
// when testing, change the index value to navigation 

$room_filthiness = $possible_states[2];

if ($room_filthiness == 'filty') {
    echo "Yuk, Room is dirty : let's clean it cleanup room";
} else if ($room_filthiness  == "clean") {
    echo "<br>Room is now clean !";
    //...  
} else {
    echo "<br> Nothing to do, room is neat.";
}