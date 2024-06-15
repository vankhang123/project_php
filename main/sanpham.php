


<p class ="product_specific">Chi tiết sản phẩm </p>
<?php
  $sql_chitiet = "SELECT * FROM  tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1 ";

  $query_chitiet = mysqli_query($mysqli, $sql_chitiet); 
  while($row_chitiet = mysqli_fetch_array($query_chitiet )) {
?>
<div class = "wrapper_chitiet">

<div class = "hinhanh_sanpham">
<img  class ="hinhanh_img" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']  ?>">
</div>
<div class = "chitiet_sanpham">
    <p>  <span class = "ten_sp">Tên sản phẩm: </span><?php echo $row_chitiet['tensanpham'] ?></p>
    <p >  <span class = "ten_sp"> Mã sp:</span> <?php echo $row_chitiet['masp'] ?></p>
    <p> <span class = "ten_sp">Giá sp:</span> <?php echo number_format ($row_chitiet['giasp'],0,',','.' ) ?>vnd </p>
    <p> <span class = "ten_sp">Số lượng sp:</span> <?php  echo  $row_chitiet['soluong'] ?> </p>
    <p> <span class = "ten_sp"> Danh mục sp:</span><?php  echo $row_chitiet['tendanhmuc'] ?> </p>
    <p> <span class = "ten_sp"> Tóm Tắt :</span><?php  echo $row_chitiet['tomtat'] ?> </p>
    <p> <span class = "ten_sp">Nội dung:</span> <?php  echo $row_chitiet['noidung'] ?> </p>
   
</div>
</div>
<?php 
  }
?>