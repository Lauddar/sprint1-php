<?php
require_once "t4_n3_account_class.php";
$account = new Account(123456789, 'Elon', 'Musk', 1000);

if (isset($_GET['deposit'])) {
    if (is_numeric($_GET['income']) && ($_GET['income'] > 0)) {
        echo "Titular: " . $account->getName() . " " . $account->getSurname() . "<br>";
        echo "Número de compte: " . $account->getAccountNumber();
        echo "<br><br>";
        echo "Quantitat ingressada: " . $_GET['income'] . " $<br>";
        echo $account->deposit($_GET['income']);
        echo "Balanç total: " . $account->getCurrentBalance() . " $<br>";
    } else {
        echo "La quantitat introduïda no és correcta.";
    }
}


if (isset($_GET['withdraw'])) {
    if (is_numeric($_GET['withdrawal']) && ($_GET['withdrawal'] > 0)) {
        echo "Titular: " . $account->getName() . " " . $account->getSurname() . "<br>";
        echo "Número de compte: " . $account->getAccountNumber();
        echo "<br><br>";
        echo "Quantitat retirada: " . $_GET['withdrawal'] . " $<br>";
        echo $account->withdraw($_GET['withdrawal']);
        echo "Balanç total: " . $account->getCurrentBalance() . " $<br>";
    } else {
        echo "La quantitat introduïda no és correcta.";
    }
}

?>