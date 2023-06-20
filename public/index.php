<?php

use Class\User;
use Class\Login;
use Class\Exceptions\UserExceptions;

require "../vendor/autoload.php";

$user = new User("John", 1234);
$login = new Login($user);

try {
    $login->login();
} catch (UserExceptions $e) {
    echo $e->getMessage() . ' dans le fichier ' . $e->getFile() . ' sur la ligne ' . $e->getLine();
} 
// finally {
//     echo ' Quelque soit la situation, affiche toi !';
// }
