<?php
    require_once __DIR__ .'/../../dbconnect.php';

    $sql= "select * from `hinhthucthanhtoan`;";
    $result=mysqli_query($conn,$sql);

    $data=[];
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[]=array(
            'httt_ma' => $row['httt_ma'],
            'httt_ten' => $row['httt_ten'],
        );
    }
    /* print_r($data);
    die;*/
?>

<table class="table table-bordered table-hover">
    <tr>
        <th>Mã</th>
        <th>Tên hình thức thanh toán</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach($data as $row) : ?>
        <tr>
        <td> <?php echo $row['httt_ma']; ?></td>
        <td> <?php echo $row['httt_ten']; ?></td>

        <!-- Truyền dữ liệu GET trên URL, theo dạng ?KEY1=VALUE1&KEY2=VALUE2 -->
        <td><a href="/tocotoco/backend/index.php?page=hinhthucthanhtoan_sua&httt_ma=<?php echo $row['httt_ma']; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa </a>
            <a href="/tocotoco/backend/index.php?page=hinhthucthanhtoan_xoa&httt_ma=<?php echo $row['httt_ma']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</a>
        </td>
        </tr>
        
    <?php endforeach; ?>

</table>
<br>
<a href="/tocotoco/backend/index.php?page=hinhthucthanhtoan_themmoi" class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Hình Thức Thanh Toán</a>
