<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới Khuyến mãi</h1>

    <form id="themkm" name="themkm" method="post" action="">
        Tên Khuyến mãi:       <input type="text" id="km_ten" name="km_ten" class="form-control"><br><br>
        Nội dung Khuyến mãi:       <input type="text" id="km_noidung" name="km_noidung" class="form-control"><br><br>
        Khuyến mãi từ ngày:       <input type="text" id="km_tungay" name="km_tungay" class="form-control"><br><br>
        Khuyến mãi đến ngày:       <input type="text" id="km_denngay" name="km_denngay" class="form-control"><br><br>
                            <input type="submit" name="them" id="them" class="btn btn-primary" value="Thêm Khuyến mãi" />
    </form>

    <?php
        require_once __DIR__ .'/../../dbconnect.php';

        //Khi bấm nút Thêm
        if(isset($_POST['them'])) {
            $km_ten = $_POST['km_ten'];
            $km_noidung = $_POST['km_noidung'];
            $km_tungay = $_POST['km_tungay'];
            $km_denngay = $_POST['km_denngay'];

            // Kiểm tra ràng buộc dữ liệu (Validation)
        // Tạo biến lỗi để chứa thông báo lỗi
        $errors = [];
        // required
        // ''
        // NULL
        if (empty($km_ten)) {
            $errors['km_ten'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $km_ten,
                'msg' => 'Vui lòng nhập tên Khuyến mãi'
            ];
        }
        // minlength 3
        if (!empty($km_ten) && strlen($km_ten) < 3) {
            $errors['km_ten'][] = [
                'rule' => 'minlength',
                'rule_value' => 3,
                'value' => $km_ten,
                'msg' => 'Tên Khuyến mãi phải có ít nhất 3 ký tự'
            ];
        }
        // maxlength 50
        if (!empty($km_ten) && strlen($km_ten) > 50) {
            $errors['km_ten'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $km_ten,
                'msg' => 'Tên Khuyến mãi không được vượt quá 50 ký tự'
            ];
        }
        // Nếu như có lỗi -> thông báo lỗi ra màn hình
        if (!empty($errors)) { ?>
    <div id="thongbao" class="alert alert-danger face" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            <?php foreach($errors as $fields) : ?>
                <?php foreach($fields as $field) : ?>
                <li><?= $field['msg']; ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
        <?php
        }
        else {
            $sqlInsert = "INSERT INTO `khuyenmai`(km_ten, km_noidung, km_tungay, km_denngay) VALUES (N'$km_ten', N'$km_noidung', N'$km_tungay', N'$km_denngay');";
            $resultInsert = mysqli_query($conn, $sqlInsert);
            header('location:/tocotoco/backend/index.php?page=khuyenmai_danhsach');
        }
    }
    ?>
    
</body>
</html>
