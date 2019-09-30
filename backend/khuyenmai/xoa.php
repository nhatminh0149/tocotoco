<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php ob_start();
        require_once __DIR__ . '/../../dbconnect.php';
        $km_ma = $_GET['km_ma'];
        $sqlDelete = "DELETE FROM khuyenmai WHERE km_ma = $km_ma;";
        $resultSelect = mysqli_query($conn, $sqlDelete);
        header('location:/tocotoco/backend/index.php?page=khuyenmai_danhsach');
        ob_end_flush();
    ?>
</body>
</html>
