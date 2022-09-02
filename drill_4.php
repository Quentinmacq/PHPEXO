<?php
 $kids='11';
 $adult='18';
 $zombie='120';
 $femme= 'femme';
 $homme='homme'

 if (isset($_GET['age']) &&  (isset($_GET['genre']))) {
        if (( $_GET['age'] >$kids) && ($_GET['genre'] == 'femme'){
        echo 'bonjour jeune fille';
    }
     
 