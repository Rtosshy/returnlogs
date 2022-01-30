<!DOCTYPE HTML>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<?php
    $pdo = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8","root","", [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $sth = $pdo->prepare("delete from returnlogs where id = :id");
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
    }
?>
<table class="table table-striped">
        <tbody>    
        
<?php
    $sth = $pdo->prepare("SELECT * FROM returnlogs ORDER BY id DESC");
    $sth->execute();
?>
            <tr>
                <td>名前</td>
                <td>部屋番号</td>
                <td>時間</td>
                <td>体調</td>
                <td>webclass検温報告</td>
            </tr>
<?php
    foreach($sth as $row) {
?>
            <tr>
                <td><?= htmlspecialchars($row['name'])?></td>
                <td><?= $row['roomnumber']?></td>
                <td><?= $row['time']?></td>
                <td><?= $row['status']?></td>
                <td><?= $row['webclass']?></td>
                <td>
                    <form method="POST">
                        <button type="submit" name="delete">削除</button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="hidden" name="delete" value="true">
                    </form>
                </td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
