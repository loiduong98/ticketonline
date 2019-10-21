<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $id){
		if($item->promotion_price == 0){
			$giohang = ['soluong'=>0, 'gia' => $item->unit_price, 'item' => $item];
		}
		else{
			$giohang = ['soluong'=>0, 'gia' => $item->promotion_price, 'item' => $item];
		}
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$giohang = $this->items[$id];
			}
		}
		$giohang['soluong']++;
		if($item->promotion_price == 0){
			$giohang['gia'] = $item->unit_price * $giohang['soluong'];
		}
		else{
			$giohang['gia'] = $item->promotion_price * $giohang['soluong'];
		}
		$this->items[$id] = $giohang;
		$this->totalQty++;
		if($item->promotion_price == 0){
			$this->totalPrice += $item->unit_price;
		}
		else{
			$this->totalPrice += $item->promotion_price;
		}
		
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['gia'] -= $this->items[$id]['item']['gia'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['gia'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['gia'];
		unset($this->items[$id]);
	}
}
