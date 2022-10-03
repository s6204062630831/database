<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table style="width:50%">
        <tr>
            <th style="width:10%">รหัสสินค้า</th>
            <th style="width:20%">ชื่อสินค้า</th>
            <th style="width:50%">รายละเอียด</th>
            <th style="width:10%">ราคา</th>
        </tr>
</table>  
<?php
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();  
    while ($row = $stmt->fetch()) :
    ?>
    <table style="width:50%">
        <tr>
            <td style="width:10%"><?=$row ["pid"]?></td>
            <td style="width:20%"><?=$row ["pname"]?></td>
            <td style="width:50%"><?=$row ["pdetail"]?></td>
            <td style="width:10%"> <?=$row ["price"]?></td>
        </tr>
    </table>
<?php endwhile; ?>

</body>
</html>
