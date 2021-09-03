<?php

require_once("../configuration/database.php");

$q = $conn->query('SELECT * FROM uzytkownicy.klienci');
$result = $q->fetchAll(PDO::FETCH_ASSOC);


if(isset($_POST['update'])){
    $id = $_GET['id'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];

    $edit = "UPDATE uzytkownicy.klienci SET imie=:imie, nazwisko=:nazwisko, email=:email WHERE id=:id";
    $edit_run = $conn->prepare($edit);
    $edit_exec = $edit_run->execute(array(":imie"=>$imie, ":nazwisko"=>$nazwisko, ":email"=>$email, ":id"=>$id));

    if($edit_exec){
        header("Location: ../index.php");
        exit();
    }else{
        echo '<script>alert("Pole nie zostało zaktualizowane")</script>';
    }
}

foreach($result as $row) {
    $row['imie']; 
    $row['nazwisko'];
    $row['email']; 
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>PHP</title>
</head>
<body>

<div class="wrapper">
    
<div class="logo">
        <h1>Edycja</h1>
    </div>

    <div class="container">
    
    <form method="POST">
        <p>Imie:</p><input type="text" name="imie" value="<?php echo $row['imie']; ?>"><br>
        <p>Nazwisko:</p><input type="text" name="nazwisko" value="<?php echo $row['nazwisko']; ?>"><br>
        <p>Email:</p><input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" name="update" value="Update">
    </div>

    <div class="footer">
        <h1>Użytkownik</h1>
    </div>

</div>
</body>
</html>