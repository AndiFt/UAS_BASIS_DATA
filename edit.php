<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>UAS BASIS DATA</title>
</head>
<body style="background:white;">
<div class="modal-dialog">
    <div class="modal-content" style="hight:auto; right:auto;">
      <div class="modal-header bg-success">
        <h3 class="modal-title" style="padding-left:23%;">SMARTPHONE</h3>
       
      </div>
      <div class="modal-body">
	<h5 style="padding-left:27%;">EDIT SMARTPHONE</h5><br>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from penjualan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<th>BRAND</th>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="brand" value="<?php echo $d['brand']; ?>">
					</td>
				</tr>
				<tr>
					<th>FEATURE</th>
					<td><input type="text" name="feature" value="<?php echo $d['feature']; ?>"></td>
				</tr>
				<tr>
					<th>HARGA</th>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
			<a href="index.php" style="padding-left:80%; color:blue;"><button> Kembali</button></a>
		</form>
		<?php 
	}
	?>
 
</body>
</html>