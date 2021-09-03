<?php

require_once("configuration/database.php");

$q = $conn->query('SELECT * FROM uzytkownicy.klienci');

$result = $q->fetchAll(PDO::FETCH_ASSOC);

// var_dump($result);
?>
<table>
    <td>Imie</td>
    <td>Nazwisko</td>
    <td>Email</td>
    <td>Operacje</td>
<?php

foreach($result as $row) {
?>
    <tr>
        <td> <?php echo $row['imie']; ?></td>
        <td> <?php echo $row['nazwisko']; ?></td>
        <td> <?php echo $row['email']; ?></td>
        <td><button><a href="pages/edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
    </tr>
<?php
}
?>
</table>