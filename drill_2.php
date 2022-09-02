<?php




$goodnight1 = date('H:i:s', strtotime("5 AM"));
$goodmorning1 = date('H:i:s', strtotime("9 AM"));
$goodday1 = date('H:i:s', strtotime(" 12 AM"));
$goodafternernon1 = date('H:i:s', strtotime("4 PM"));
$goodevening1 = date('H:i:s', strtotime("9 PM"));
$datenow = date('H:i:s');




if (($goodnight1 < $datenow)  && ($datenow < $goodmorning1)) {
    echo "good morning";
    echo "<br>$datenow";
};

if (($goodmorning1 < $datenow)  && ($datenow < $goodday1)) {
    echo "good day";
    echo "<br>$datenow";
};

if (($goodday1 < $datenow)  && ($datenow < $goodafternernon1)) {
    echo "good afternoon";
    echo "<br>$datenow";
};

if (($goodafternernon1 < $datenow)  && ($datenow < $goodevening1)) {
    echo "good evening";
    echo "<br>$datenow";
};

if (($goodevening1 < $datenow)  && ($datenow < $goodnight1)) {
    echo "good night";
    echo "<br>$datenow";
};




// if ($goodafternernon2 < date('H:i:s')) {
//     echo "good day";
// } else {
//     echo "rien";
// }

// if ($goodafternoon1 < date('H:i:s') < $goodafternernon2) {
//     echo "good afternoon";
// };
// if ($goodevening1 < date('H:i:s') < $goodevening2) {
//     echo "good evening";
// };
// if ($goodnight1 < date('H:i:s') < $goodnight2) {
//     echo "good night";
// };