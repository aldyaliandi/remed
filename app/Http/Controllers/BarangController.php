<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public $items = array(
    	[
    		'code' => 'B001',
    		'name' => 'Buku',
    		'price' => 2000,
    		'qty' => 100
    	],
    	[
    		'code' => 'B002',
    		'name' => 'Pulpen',
    		'price' => 1500,
    		'qty' => 100
    	],
    	[
    		'code' => 'B003',
    		'name' => 'Pensil',
    		'price' => 1000,
    		'qty' => 100
    	],
    	[
    		'code' => 'B004',
    		'name' => 'Penghapus',
    		'price' => 500,
    		'qty' => 100

    	],
    	[
    		'code' => 'B005',
    		'name' => 'Penggaris',
    		'price' => 1300,
    		'qty' => 100

    	]
    );

    public $error;
    public $product;

    public function index() {
    	$items = $this->items;
    	return view('barang.index', compact('items'));
    }

    public function add() {
    	return view('barang.add');
    }

    public function addProcess(Request $request) {
    	foreach ($this->items as $item) {
    		if($request->code == $item['code']) {
    			$product = $item;
    			$error = false;
    			break;
    		}else{
    			$product = [];
    			$error = true;
    		}
    	}
    	return view('barang.show',['error' => $error,
    		'product' => $product,
    		'name' => $request->name,
    		'date' => date('d F Y'),
    		'code' => $request->code,
    		'jumlah' => $request->total]);
    }
}
