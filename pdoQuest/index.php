<?php

require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);


$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);

$query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)';
$statement = $pdo->prepare($query);

$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);

$statement->execute();

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friendsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>

<body>

<?php foreach($friendsArray as $friend) : ?>
    <ul>
        <li><?= $friend['firstname'] . ' ' . $friend['lastname']?></li>
    </ul>
<?php endforeach; ?>


    <form action="index.php" method="POST">
    <div>
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter Firstname">
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter Lastname">
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
    </form>

</body>

</html>
