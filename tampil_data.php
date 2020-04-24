<?php
//memasukkan file config.php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Pasien</title>
    <!-- CSS online dari bootstrap -->
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script>
        $(document).ready(function(){
            $("#myModal").on("show.bs.modal", function(event){
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
    <style>
    #nav-bar
    {
    position: sticky;
    top: 0;
    z-index: 10;
    }
    .navbar-brand img
    {
      height: 40px;
      padding-left: 30px;
    }
    .navbar-nav li
    {
      padding: 0 10px;
    }
    .navbar-nav li a
    {
      float: right;
      text-align: left;
    }
    #nav-bar ul li a:hover
    {
      color: #007bff!important;
    }
    .navbar
    {
      background: #29a89d;
    }
    .navbar-toggler
    {
      border: none!important;
    }
    .nav-link
    {
      color: #555!important;
      font-weight: 600px;
      font-size: 20px;
    }
    </style>
</head>
<body><section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light ">
<a class="navbar-brand" href="#"><img src="telkom.png"</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link" href="index.php">COVID-19</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">ABOUT ME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="check.php">CHECK UP</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tampil_data.php">PASIEN</a>
  </li>
</ul>
</div>
</nav>


	<div class="container" style="margin-top:20px">
		<h2 class="card-title"><i class="fas fa-edit"></i>Daftar Pasien</h2>
		<hr>
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
          <th>NO.</th>
          <th>NAMA </th>
					<th>USIA</th>
					<th>KELAMIN</th>
					<th>ALAMAT</th>
					<th>TELEPON</th>
					<th>STATUS</th>
          <!-- <th>ACTION</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel t_buku urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						?>
						<!-- //menampilkan data perulangan -->
						<tr>
              <td><?php echo $no;  ?></td>
						  <td><?php echo $data['nama'];  ?></td>
						  <td><?php echo $data['usia'];  ?></td>
						  <td><?php echo $data['kelamin'];  ?></td>
						  <td><?php echo $data['alamat'];  ?></td>
							<td><?php echo $data['telp'];  ?></td>
							<td><?php echo $data['status'];  ?></td>

							<!-- <td> -->
                                    <!-- <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> -->
                                    <!-- <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a> -->
                                    <!-- <?php include('modal_form.php'); ?> -->
						        <!-- </td> -->
						</tr>
						<?php
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>

        <!-- <div> -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-title="tambahBuku">Tambah Data</button> -->
        <!-- </div> -->
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="tambah_buku.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Buku</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Kode Buku:</label>
                                <input type="text" name="kode"class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Judul Buku:</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Pengarang:</label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            <div class="form-group">Ringkasan</label>
                            <input type="text" name="ringkasan" class="form-control">
                            </div>
														<div class="form-group">Cover</label>
                            <input type="text" name="cover" class="form-control">
                            </div>
														<div class="form-group">Stok</label>
                            <input type="number" name="stok" class="form-control">
                            </div>
														<div class="form-group">Kategori</label>
                            <input type="text" name="id_kategori" class="form-control">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>
