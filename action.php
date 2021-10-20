<?php
//action.php
    switch($_GET['action']){
        case 'update':
            version = (int)$_GET['version'];
            result = version;
            echo result;
        break;

        case 'login':
        // code goes here
        break;
    }
?>