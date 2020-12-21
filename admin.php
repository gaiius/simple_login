<?php
session_start();
include "koneksi.php";
//var_dump($_SESSION);
//exit();
$aku=$_SESSION['admin'];
if(empty($aku)){ 
echo("<script type='text/javascript'>
		alert('Upps harus lewat menu dulu');document.location='javascript:history.back(1)';
		</script>");
		}else{
?>
<h1>List Mahasiswa</>
<table class="table table-dark">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td colspan="2">Action</td>
	</tr>
	<?php
		$no=1;
		$query=mysqli_query($koneksi,"select * from mahasiswa");
		while($list_mahasiswa=mysqli_fetch_array($query))
		{
		?>
	<tr>
		<td><?php echo $no++?></td>
		<td><?php echo $list_mahasiswa ['nama'];?></td>
		<td><?php echo $list_mahasiswa ['jenis_kelamin'];?>
		<td><a href="edit_mahasiswa.php?id_mahasiswa=<?php echo $list_mahasiswa['id_mahasiswa'];?>">Edit</td>
		<td><a href="hapus_mahasiswa.php?id_mahasiswa=<?php echo $list_mahasiswa['id_mahasiswa'];?>">Hapus</td>
	</tr>	
	<?php } ?>
	
</table>
<?php
		}?>
<center>
<?php 
if($_SESSION['atasan']='atasan'); {?>
<h1>Test session</h1>
<?php } ?>


<a href="destroy.php">Back to menu</a>