<?php

use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNotVerifiedException;
use Class\Login;
use Class\User;

require "../vendor/autoload.php";

$user = new User("John", 1234);
$login = new Login($user);

try {
    $login->login();
} catch (\Exception $e) {
    echo $e->getMessage() . ' dans le fichier ' . $e->getFile() . ' sur la ligne ' . $e->getLine();
} finally {
    echo ' Quelque soit la situation, affiche toi !';
}
