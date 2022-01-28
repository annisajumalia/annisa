<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>TABEL SENDAL</title>
</head>
<body style="background:black; font-family:roboto;">
 
 <div class="modal-dialog">
   <div class="modal-content">
	 <div class="modal-header bg-info">
	   <h5 class="modal-title">TABEL SENDAL</h5>
	 </div>
	 <div class="modal-body"><br/>
	<h4>Edit Data Sendal</h4><br>
	<a href="index.php">Kembali</a>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from sendal where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php"><br>
			<table>
				<tr>			
					<td>Merek</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="merek" value="<?php echo $d['merek']; ?>">
					</td>
				</tr>
				<tr>
					<td>Size</td>
					<td><input type="number" name="size" value="<?php echo $d['size']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>