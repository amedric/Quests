<?php

require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
// $friends = $statement->fetchAll(PDO::FETCH_BOTH);

public function listFriends(){
$friendsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($friendsArray as $friend) {

    echo $friend['firstname'] . ' ' . $friend['lastname'].'<br>';
}
}



// // A exécuter afin d'insérer une ligne dans votre table friends
// $query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";
// $statement = $pdo->exec($query);


// $firstname = trim($_POST['firstname']); 
// $lastname = trim($_POST['lastname']);

?>
