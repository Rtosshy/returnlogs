<!DOCTYPE HTML>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<?php
    $pdo = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8","root","", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
?>

<table class="table table-striped">
        <tbody>    
        
<?php
    $sth = $pdo->prepare("SELECT * FROM returnlogs where webclass like '%未報告%' ORDER BY id DESC");
    $sth->execute();
?>
            <tr>
                <td>名前</td>
                <td>部屋番号</td>
            </tr>

<?php
    foreach($sth as $row) {
?>
            <tr>
                <td><?= htmlspecialchars($row['name'])?></td>
                <td><?= $row['roomnumber']?></td>
            </tr>
<?php
    }
?>   
        </tbody>
    </table>         