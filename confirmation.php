<?php
    $pdo = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8","root","", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $status = $_POST["status"];
        $webclass = $_POST["webclass"];
        $roomnumber = $_POST["roomnumber"];
    }
    if(isset($_POST['submit'])){
        $sth = $pdo->prepare("INSERT INTO returnlogs (name, status, webclass, roomnumber) VALUES (:name, :status, :webclass, :roomnumber)");
        $sth->bindValue(':name', $name, PDO::PARAM_STR);
        $sth->bindValue(':status', $status, PDO::PARAM_STR);
        $sth->bindValue(':webclass', $webclass, PDO::PARAM_STR);
        $sth->bindValue(':roomnumber', $roomnumber, PDO::PARAM_STR);
        $sth->execute();
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<h1>確認画面</h1>
<form  method="post" action="">
<h4>名前:<?php echo $name; ?></h4>
<h4>部屋番号:<?php echo $roomnumber; ?></h4>
<h4>体調:<?php echo $status; ?></h4>
<h4>webclass検温報告:<?php echo $webclass; ?></h4>

</form>
<input type="submit" name="submit" value="送信">
<button onclick="location.href = 'register.php'">登録画面に戻る</button>
</body>
</html>