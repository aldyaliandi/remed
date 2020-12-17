@extends("layouts.app")

@section("content")
	<div class="container">
		<form action="/addProcess" method="POST" style="margin-top: 10px">
			@csrf
			<div class="form-group">
				<label for="pembeli">Nama Pembeli</label>
				<input type="text" class="form-control" placeholder="Masukan Nama Pembeli" name="name">
			</div>
			<div class="form-group">
				<label for="code">Kode Barang</label>
				<input type="text" class="form-control" placeholder="Masukan Kode Barang" name="code">
			</div>
			<div class="form-group">
				<label for="total">Jumlah</label>
				<input type="number" class="form-control" placeholder="Masukan Jumlah" name="total">
			</div>
			<div style="text-align: right">
				<button class="btn btn-success">Simpan</button>
			</div>
		</form>
	</div>
@stop