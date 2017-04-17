<?php 
if (isset($_GET['cat'])) {
	switch($_GET['cat']){
		case 'desainWeb':
			echo "<script>alert('maaf ".$_GET['cat']." belum tersedia !!!');</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.html#product'>";
			break;
		case 'desainGrapics':
			echo "<script>alert('maaf ".$_GET['cat']." belum tersedia !!!');</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.html#product'>";
			break;
		case 'training':
			echo "<script>alert('maaf ".$_GET['cat']." belum tersedia !!!');</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.html#product'>";
			break;
		case 'Services':
			echo "<script>alert('maaf ".$_GET['cat']." belum tersedia !!!');</script>";
			echo "<meta http-equiv='refresh' content='0;url=index.html#product'>";
			break;
	}
}
 ?>