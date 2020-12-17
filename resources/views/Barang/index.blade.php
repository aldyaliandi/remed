@extends("layouts.app")

@section("content")
	<div class="container" style="margin-top: 10px">
		<a href="/add" class="btn btn-success">Tambah Transaksi</a>
		<table class="table" style="margin-top: 10px">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Code</th>
					<th scope="col">Nama Barang</th>
					<th scope="col">Harga</th>
					<th scope="col">Stok</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1 ?>
				@foreach($items as $item)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$item['code']}}</td>
					<td>{{$item['name']}}</td>
					<td>{{$item['price']}}</td>
					<td>{{$item['qty']}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop