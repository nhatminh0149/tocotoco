<?php
    require_once __DIR__ .'/../../dbconnect.php';

    $sql = <<<EOT
    SELECT 
        ddh.dh_ma, ddh.dh_ngaylap, ddh.dh_noigiao, ddh.dh_trangthaithanhtoan, httt.httt_ten, kh.kh_ten, kh.kh_dienthoai
        , SUM(spddh.sp_dh_soluong * spddh.sp_dh_dongia) AS TongThanhTien
    FROM `dondathang` ddh
    JOIN `sanpham_dondathang` spddh ON ddh.dh_ma = spddh.dh_ma
    JOIN `khachhang` kh ON ddh.kh_tendangnhap = kh.kh_tendangnhap
    JOIN `hinhthucthanhtoan` httt ON ddh.httt_ma = httt.httt_ma
    GROUP BY ddh.dh_ma, ddh.dh_ngaylap, ddh.dh_noigiao, ddh.dh_trangthaithanhtoan, httt.httt_ten, kh.kh_ten, kh.kh_dienthoai
EOT;

    $result=mysqli_query($conn,$sql);

    $data=[];
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[]=array(
            'dh_ma' => $row['dh_ma'],
            'dh_ngaylap' => date('d/m/Y H:i:s', strtotime($row['dh_ngaylap'])),
            'dh_noigiao' => $row['dh_noigiao'],
            'dh_trangthaithanhtoan' => $row['dh_trangthaithanhtoan'],
            'httt_ten' => $row['httt_ten'],
            'kh_ten' => $row['kh_ten'],
            'kh_dienthoai' => $row['kh_dienthoai'],
            'TongThanhTien' => number_format($row['TongThanhTien'], 2, ".", ",") . ' vnđ',
        );
    }
    /* print_r($data);
    die;*/
?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Mã Đơn đặt hàng</th>
            <th>Khách hàng</th>
            <th>Ngày lập</th>
            <th>Nơi giao</th>
            <th>Hình thức thanh toán</th>
            <th>Tổng thành tiền</th>
            <th>Trạng thái thanh toán</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) : ?>
        <tr>
            <td> <?php echo $row['dh_ma']; ?></td>
            <td> <?php echo $row['kh_ten']; ?></td>
            <td> <?php echo $row['dh_ngaylap']; ?></td>
            <td> <?php echo $row['dh_noigiao']; ?></td>
            <td> <?php echo $row['httt_ten']; ?></td>
            <td> <?php echo $row['TongThanhTien']; ?></td>
            <td> <?php echo $row['dh_trangthaithanhtoan']; ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<br>
<!-- <a href="/tocotoco/backend/index.php?page=loaisanpham_themmoi" class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Loại Sản Phẩm </a>  -->
