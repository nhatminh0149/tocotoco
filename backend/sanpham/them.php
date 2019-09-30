<?php // ob_start(); ?>
<?php
    require_once __DIR__ .'/../../dbconnect.php';

    //Lấy dl từ lsp
    $sql= <<<EOT
    SELECT * FROM loaisanpham;
EOT;
    $resultLsp=mysqli_query($conn,$sql);
    $datalsp=[];
    while($row=mysqli_fetch_array($resultLsp, MYSQLI_ASSOC)){
        $datalsp[]=array(
            'lsp_ma' => $row['lsp_ma'],
            'lsp_ten' => $row['lsp_ten'],
        );
    }

     //Lấy dl từ km
    $sql= <<<EOT
    SELECT * FROM khuyenmai;
EOT;
    $resultKm=mysqli_query($conn,$sql);
    $dataKm=[];
    while($row=mysqli_fetch_array($resultKm, MYSQLI_ASSOC)){
        $dataKm[]=array(
            'km_ma' => $row['km_ma'],
            'km_ten' => $row['km_ten'],
        );
    }
     /*print_r($data);
    die;*/
?>

<form id="themsp" name="themsp" method="post" action="">
    Tên sản phẩm: <input type="text" id="sp_ten" name="sp_ten" class="form-control"><br><br>
    Giá sản phẩm: <input type="text" id="sp_gia" name="sp_gia" class="form-control"><br><br>
    Mô tả sản phẩm: <input type="text" id="sp_mota" name="sp_mota" class="form-control"><br><br>
    Loại sản phẩm: 
    <select name="lsp_ma" id="lsp_ma" class="form-control">
        <?php foreach($datalsp as $lsp): ?>
            <option value="<?= $lsp['lsp_ma']?>"> <?= $lsp['lsp_ten']?>  </option>
        <?php endforeach; ?>
    </select>
    <br><br>
     Khuyến mãi: 
    <select name="km_ma" id="km_ma" class="form-control">
        <?php foreach($dataKm as $km):?>
            <option value="<?= $km['km_ma']?>"><?= $km['km_ten']?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <input type="submit" id="tsp" name="tsp" class="btn btn-primary" value="Thêm sản phẩm">
</form>

<?php
    if(isset($_POST['tsp'])){
        //print_r('fgfdgd'); die;
        $sp_ten=$_POST['sp_ten'];
        $sp_gia=$_POST['sp_gia'];
        $sp_mota=$_POST['sp_mota'];
        $lsp_ma=$_POST['lsp_ma'];
        $km_ma=isset($_POST['km_ma']) ? $_POST['km_ma'] : 'NULL';

        // Kiểm tra ràng buộc dữ liệu (Validation)
        // Tạo biến lỗi để chứa thông báo lỗi
        $errors = [];
        // required
        // ''
        // NULL
        if (empty($sp_ten)) {
            $errors['sp_ten'][] = [
                'rule' => 'required',
                'rule_value' => true,
                'value' => $sp_ten,
                'msg' => 'Vui lòng nhập tên Sản phẩm'
            ];
        }
        // minlength 3
        if (!empty($sp_ten) && strlen($sp_ten) < 3) {
            $errors['sp_ten'][] = [
                'rule' => 'minlength',
                'rule_value' => 3,
                'value' => $sp_ten,
                'msg' => 'Tên Sản phẩm phải có ít nhất 3 ký tự'
            ];
        }
        // maxlength 50
        if (!empty($sp_ten) && strlen($sp_ten) > 50) {
            $errors['sp_ten'][] = [
                'rule' => 'maxlength',
                'rule_value' => 50,
                'value' => $sp_ten,
                'msg' => 'Tên Sản phẩm không được vượt quá 50 ký tự'
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
            $sqlInsert = "INSERT INTO sanpham(sp_ten, sp_gia, sp_mota, lsp_ma, km_ma) VALUES (N'$sp_ten', $sp_gia, N'$sp_mota', $lsp_ma, $km_ma);";
            mysqli_query($conn, $sqlInsert);
            header('location:/tocotoco/backend/index.php?page=sanpham_danhsach');
            // ob_enf_fluch();
        }
    }

    ?>