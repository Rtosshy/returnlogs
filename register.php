<?php
    /*$pdo = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8","root","", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $status = $_POST['status'];
        $webclass = $_POST['webclass'];
        $roomnumber = $_POST['roomnumber'];
        /*$sth = $pdo->prepare("INSERT INTO returnlogs (name, status, webclass, roomnumber) VALUES (:name, :status, :webclass, :roomnumber)");
        $sth->bindValue(':name', $name, PDO::PARAM_STR);
        $sth->bindValue(':status', $status, PDO::PARAM_STR);
        $sth->bindValue(':webclass', $webclass, PDO::PARAM_STR);
        $sth->bindValue(':roomnumber', $roomnumber, PDO::PARAM_STR);
        $sth->execute();
    }*/
?>
<!-- -->
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body class="container">
    <h1>帰寮報告</h1>
    <form method="post" action="confirmation.php">

    <label for="name">名前</label>
    <input type="text" id="name" name="name">
    
    <label for="roomnumber">部屋番号</label>
    <input type="text" id="roomnumber" name="roomnumber">

    <label for="status">体調</label>
        <input type="radio" id="status" name="status" value="良">良
        <input type="radio" id="status" name="status" value="不良">不良
    
    <label for="webclass">webclass検温報告</label>
        <input type="radio" id="webclass" name="webclass" value="報告済み">報告済み
        <input type="radio" id="webclass" name="webclass" value="未報告">未報告
        
        <input type="submit" name="submit" value="送信">
    </form>
</body>
</html>