<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Data Siswa</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Data
				</button>
			</div>
			
			<table class="table table_hover">
				<tr>
					<th>NAMA DEPAN</th>
					<th>NAMA BELAKANG</th>
					<th>JENIS KELAMIN</th>
					<th>AGAMA</th>
					<th>ALAMAT</th>
				</tr>
				@foreach($data_siswa as $siswa)
				<tr>
					<td>{{$siswa->nama_depan}}</td>
					<td>{{$siswa->nama_belakang}}</td>
					<td>{{$siswa->jenis_kelamin}}</td>
					<td>{{$siswa->agama}}</td>
					<td>{{$siswa->alamat}}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/siswa/create" method="POST">
				        	{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Depan</label>
						    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
						  </div>
						 
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Belakang</label>
						    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="L">Laki-Laki</option>
						      <option value="P">Perempuan</option>
						    </select>
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Agama</label>
						    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
						  <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Submit</button>
					    </form>
						</div>
						   
					</div>
				  </div>
					</div>
				</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

