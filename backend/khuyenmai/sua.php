<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Sửa Khuyến mãi</h1>

    <?php
        $km_ma=$_GET['km_ma'];
        //echo 'Đang sửa khóa chính là: ' . $km_ma;

        require_once __DIR__ .'/../../dbconnect.php';

        $sqlSelect = "SELECT * FROM khuyenmai WHERE km_ma = $km_ma;";
        $resultSelect = mysqli_query($conn, $sqlSelect);

        $loaisanphamRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC);
        // print_r($loaisanphamRow);
    ?>

    <form id="sualsp" name="sualsp" method="post" action="">
        Mã Khuyến mãi:   <input type="text" id="km_ma" name="km_ma" readonly value="<?= $loaisanphamRow['km_ma']?>" class="form-control"/><br><br>
        Tên Khuyến mãi:       <input type="text" id="km_ten" name="km_ten" value="<?= $loaisanphamRow['km_ten'] ?>" class="form-control"/><br><br>
        Nội dung Khuyến mãi:     <input type="text" id="km_noidung" name="km_noidung" value="<?= $loaisanphamRow['km_noidung'] ?>"class="form-control" /><br><br>
        Khuyến mãi từ ngày:     <input type="text" id="km_tungay" name="km_tungay" value="<?= $loaisanphamRow['km_tungay'] ?>"class="form-control" /><br><br>
        Khuyến mãi đến ngày:     <input type="text" id="km_denngay" name="km_denngay" value="<?= $loaisanphamRow['km_denngay'] ?>"class="form-control" /><br><br>
                             <input type="submit" name="sua" id="sua" value="Sửa Khuyến Mãi" class="btn btn-primary"/>
    </form>

    <?php
        //Khi bấm nút lưu
        if(isset($_POST['sua'])) {
            $km_ten = $_POST['km_ten'];
            $km_noidung = $_POST['km_noidung'];
            $km_tungay = $_POST['km_tungay'];
            $km_denngay = $_POST['km_denngay'];

            $sqlUpdate = "UPDATE khuyenmai SET km_ten = N'$km_ten', km_noidung = N'$km_noidung', km_tungay = N'$km_tungay', km_denngay = N'$km_denngay' WHERE km_ma = $km_ma;";
            mysqli_query($conn, $sqlUpdate);
            echo 'Lưu thành công!';

            // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
            header('location:/tocotoco/backend/index.php?page=khuyenmai_danhsach');
        }
    ?>
</body>
</html>