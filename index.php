
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TABEL SENDAL</title>
  </head>
  <style type="text/css">


  </style>
  <body style="background:black; font-family:roboto;">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">TABEL SENDAL</h5>
       
      </div>
      <div class="modal-body"><br/>	
	 <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">MEREK</th>
      <th scope="col">SIZE</th>
      <th scope="col">HARGA</th>
	  <th scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from sendal");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['merek']; ?></td>
				<td><?php echo $d['size']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>

  </tbody>
</table>

      <div class="modal-header"><button onclick='change();'  value='show' id='btn1' type="button" class="btn btn-primary">TAMBAH SENDAL</button></a>
  </div>
<br>


<div id='div1' style="visibility:hidden;">
<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Merek</td>
				<td><input type="text" name="merek"></td>
			</tr>
			<tr>
				<td>Size</td>
				<td><input type="number" name="size"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</div>

<script>
function change()
{
    var btn_text = $("#btn1").val();
    if(btn_text == "hide")
    {
      document.getElementById("div1").style.visibility = "hidden";
      $("#btn1").val("show");

    }
    else if(btn_text == "show")
    {
      document.getElementById("div1").style.visibility = "visible";
      $("#btn1").val("hide");

    }
}
</script>
      </div>
    </div>
  </div>


<script type="text/JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>