@extends("layouts.app")

@section("content")
	<div class="container" style="margin-top: 10px">
		@if($error)
	</br>
		<div class="alert alert-danger">
			Kode Barang {{$code}} Tidak Terdaftar!!!
		</div>

	@elseif($jumlah > 100)
	</br>
		<div class="alert alert-danger">
			Data Tidak Bisa Diproses, Stok Barang {{$code}} Hanya Tinggal 100!!!
		</div>

	@else
	<h2><b>Transaksi Penjualan</b></h2>
	<p>Nama Pembeli : {{$name}}</p>
	<p>Tanggal Transaksi : {{$date}}</p>
	<p>Kode Transaksi : {{$code}}</p>
	<p>Nama Barang : {{$product['name']}}</p>
	<p>Harga Barang : Rp. {{$product['price']}}</p>
	<p>Jumlah Beli : {{$jumlah}}</p>
	<p>Total : Rp. {{$product['price']*$jumlah}}</p>

	@if($code=="B001" && $jumlah>=50)
		<p>Diskon : 10%= Rp. {{$product['price']*$jumlah*0.1}}</p>
	@elseif($code=="B002" && $jumlah>=50)
		<p>Diskon : 7.5%= Rp. {{$product['price']*$jumlah*0.075}}</p>
	@elseif($code=="B003" && $jumlah>=50)
		<p>Diskon : 5%= Rp. {{$product['price']*$jumlah*0.05}}</p>
	@elseif($code=="B004" && $jumlah>=100)
		<p>Diskon : 5%= Rp. {{$product['price']*$jumlah*0.05}}</p>
	@elseif($code=="B005" && $jumlah>=50)
		<p>Diskon : 7.5%= Rp. {{$product['price']*$jumlah*0.075}}</p>
	@endif



	@if($code=="B001" && $jumlah>=50)
		<p>Total Bayar : Rp. {{($product['price']*$jumlah)-($product['price']*$jumlah*0.1)}}</p>
	@elseif($code=="B002" && $jumlah>=50)
		<p>Total Bayar : Rp. {{($product['price']*$jumlah)-($product['price']*$jumlah*0.075)}}</p>
	@elseif($code=="B003" && $jumlah>=50)
		<p>Total Bayar : Rp. {{($product['price']*$jumlah)-($product['price']*$jumlah*0.05)}}</p>
	@elseif($code=="B004" && $jumlah>=100)
		<p>Total Bayar : Rp. {{($product['price']*$jumlah)-($product['price']*$jumlah*0.05)}}</p>
	@elseif($code=="B005" && $jumlah>=50)
		<p>Total Bayar : Rp. {{($product['price']*$jumlah)-($product['price']*$jumlah*0.075)}}</p>
	@endif
	@endif
	</div>
@stop