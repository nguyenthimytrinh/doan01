<?php
$act = isset($_GET["act"])?$_GET["act"]:"";
if ($act =="chitiet")
	include ROOT."/san-pham/sanpham_chitiet.php";

if ($act =="loai")
	include ROOT."/san-pham/sanpham_loai.php";


