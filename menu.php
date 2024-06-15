<?php
$sql_danhmuc = "SELECT * FROM  tbl_danhmuc ORDER BY  id_danhmuc DESC ";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);


?>



<div class=" menu">

    <ul class="list_menu">
        <li class="list_menu_con"> <a href="index.php">Trang chủ</a></li>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {

        ?>
            <li class="list_menu_con"> <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?> "><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
        <?php
        }
        ?>
        <li class="list_menu_con"> <a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <li class="list_menu_con"> <a href="index.php?quanly=dangky">Đăng Ký</a></li>
        <li class="list_menu_con"> <a href="index.php?quanly=lienhe">Liên hệ </a></li>
        <li>
            <form action = "index.php?quanly=timkiem" method = "POST">
            <input type = "text" placeholder="Tìm kiếm sản phẩm..." name = "tukhoa">
            <input type = "submit" name = "timkiem" value = "Tìm kiếm ">
            </form>
        </li>
    </ul>

</div>