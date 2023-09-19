<?php

use App\Models\User;

include __DIR__.'/../vendor/autoload.php';

try {
    // fetch user using fActiveRecord model
    $user = new User(1);
}
// Try an exception
catch (fNotFoundException $e) {
    $user = new User();
    $user->setName('Sam Fonseca');
    $user->setEmail('samfonseca@test.com');
    $user->setPassword(fCryptography::hashPassword('secret'));
    $user->store();
}

?>

<table>
    <tbody>
        <tr>
            <th>ID</th>
            <td><?= $user->getUserId() ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $user->getName() ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $user->getEmail() ?></td>
        </tr>
    </tbody>
</table>
