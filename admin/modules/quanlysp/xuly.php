

<?php
include('../../config/config.php');
$tensanpham = $_POST['tensanpham']; 
$masp = $_POST['masp'];
$giasp= $_POST['giasp'];
$soluong= $_POST['soluong'];
$tomtat= $_POST['tomtat'];
$noidung= $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
//xu ly hình ảnh  

$hinhanh_tmp = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];


if (isset($_POST['themsanpham'])) {
    // them 
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp.soluong,hinhanh,tomtat,noidung,tinhtrang ) VALUE('" .$tensanpham. "',
    '"  .$masp. "','"  .$giasp. "','"  .$soluong. "','"  .$hinhanh. "','"  .$tomtat. "','"  .$noidung. "','"  .$tinhtrang. "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=them');

}elseif(isset($_POST['suadanhmuc'])) {
      // sua 
      $sql_update = "UPDATE  tbl_danhmuc SET  tendanhmuc = '".$tenloaisp." ', thutu= '".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]' ";
      mysqli_query($mysqli,$sql_update);
      header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else{
    
   $id = $_GET['iddanhmuc'];
   $sql_xoa = "DELETE FROM tbl_danhmuc WHERE  id_danhmuc= '".$id."'";
   mysqli_query($mysqli,$sql_xoa);  
   header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>
