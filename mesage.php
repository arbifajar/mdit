<?php
$admin = 'arbimuhammad99@gmail.com'; //ganti email dg email admin (email penerima pesan)
	
	$nama	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$judul	= htmlentities($_POST['subject']);
	$pesan	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo '<script>swal("Sukses!", "Email Berhasil Terkirim!")</script>';
		echo "<meta http-equiv='refresh' content='5;url=index.html#contact'>";
	}else{
		echo '<script>swal("Gagal!", "Terjadi Kesalahan Teknis!", "danger")</script>';
		echo "<meta http-equiv='refresh' content='5;url=index.html#contact'>";
	}
 ?>
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script type="text/javascript">
	swal({
  title: "Error!",
  text: "Here's my error message!",
  type: "error",
  confirmButtonText: "Cool"
});
</script>