<?php
  $sql_pro = "SELECT * FROM  tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC " ;
  $query_pro = mysqli_query($mysqli, $sql_pro);


?>


<ul class="maincontent_list">
    <?php 
    while($row_pro = mysqli_fetch_array($query_pro)) {
    ?>
    <li class="maincontent_list_con">
        <a class= "maincontent_list_con_child" href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham' ] ?> " >
        <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']  ?>">
        <p>Tên sản phẩm:<?php echo $row_pro['tensanpham']  ?> </p>
        <p>Giá: <?php echo number_format ($row_pro['giasp'],0,',','.' ) ?>vnd </p>
    </li>
    </a>
    <?php 
    }
    ?>
    


</ul>