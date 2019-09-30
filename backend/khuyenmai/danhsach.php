<?php
    require_once __DIR__ .'/../../dbconnect.php';

    $sql= "select * from `khuyenmai`;";
    $result=mysqli_query($conn,$sql);

    $data=[];
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[]=array(
            'km_ma' => $row['km_ma'],
            'km_ten' => $row['km_ten'],
            'km_noidung' => $row['km_noidung'],
            'km_tungay' => $row['km_tungay'],
            'km_denngay' => $row['km_denngay'],
        );
    }
    /* print_r($data);
    die;*/
?>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Nội dung khuyến mãi</th>
            <th>Khuyến mãi từ ngày</th>
            <th>Khuyến mãi đến ngày</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) : ?>
        <tr>
            <td> <?php echo $row['km_ma']; ?></td>
            <td> <?php echo $row['km_ten']; ?></td>
            <td> <?php echo $row['km_noidung']; ?></td>
            <td> <?php echo $row['km_tungay']; ?></td>
            <td> <?php echo $row['km_denngay']; ?></td>

            <!-- Truyền dữ liệu GET trên URL, theo dạng ?KEY1=VALUE1&KEY2=VALUE2 -->
            <td>
                <a href="/tocotoco/backend/index.php?page=khuyenmai_sua&km_ma=<?php echo $row['km_ma']; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa </a>
                <a href="/tocotoco/backend/index.php?page=khuyenmai_xoa&km_ma=<?php echo $row['km_ma']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Xóa</a>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<br>
<a href="/tocotoco/backend/index.php?page=khuyenmai_themmoi" class="btn btn-primary"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Khuyến Mãi </a> 
