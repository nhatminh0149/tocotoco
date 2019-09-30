<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm mới Hình thức thanh toán</h1>

    <form id="themhttt" name="themhttt" method="post" action="">
        Hình thức thanh toán:       <input type="text" id="httt_ten" name="httt_ten" class="form-control"><br><br>
                            <input type="submit" name="them" id="them" class="btn btn-primary" value="Thêm Hình thức thanh toán" />
    </form>

    <?php
        require_once __DIR__ .'/../../dbconnect.php';

        //Khi bấm nút Thêm
        if(isset($_POST['them'])) {
            $httt_ten = $_POST['httt_ten'];

            // Kiểm tra ràng buộc dữ liệu (Validation)
        // Tạo biến lỗi để chứa thông báo lỗi
        $errors = [];
        // required
        // ''
        // NULL
        if (empty($httt_ten)) {
            $errors['httt_ten'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $httt_ten,
                'msg' => 'Vui lòng nhập tên Hình thức thanh toán'
            ];
        }
        // minlength 3
        if (!empty($httt_ten) && strlen($httt_ten) < 3) {
            $errors['httt_ten'][] = [
                'rule' => 'minlength',
                'rule_value' => 3,
                'value' => $httt_ten,
                'msg' => 'Tên Hình thức thanh toán phải có ít nhất 3 ký tự'
            ];
        }
        // maxlength 50
        if (!empty($httt_ten) && strlen($httt_ten) > 50) {
            $errors['httt_ten'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $httt_ten,
                'msg' => 'Tên Hình thức thanh toán không được vượt quá 50 ký tự'
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
            $sqlInsert = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES (N'$httt_ten');";
            $resultInsert = mysqli_query($conn, $sqlInsert);
            header('location:/tocotoco/backend/index.php?page=hinhthucthanhtoan_danhsach');
        }
    }
    ?>
    
</body>
</html>
