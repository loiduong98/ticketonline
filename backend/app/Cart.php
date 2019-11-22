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
		
		$chitietve = ['SoLuong'=>0, 'Gia' => $item->Gia, 'item' => $item];
		
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$chitietve = $this->items[$id];
			}
		}
		$chitietve['SoLuong']++;
		
		$chitietve['Gia'] = $item->Gia * $chitietve['SoLuong'];
		
		
		$this->items[$id] = $chitietve;
		$this->totalQty++;

		$this->totalPrice += $item->Gia;
		
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['Gia'] -= $this->items[$id]['item']['Gia'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['Gia'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['Gia'];
		unset($this->items[$id]);
	}
}
