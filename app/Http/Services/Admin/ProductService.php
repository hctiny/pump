<?php

namespace App\Http\Services\Admin;

use App\Product;

class ProductService extends CommonService{
	public function getIndexDatas($keyword = null){
		if($keyword){
            $keyword = '%'.$keyword.'%';
            $datas = Product::where('name', 'like', $keyword)
            	->whereOr('version', 'like', $keyword)
            	->paginate($this->listRows);
        }else{
    	    $datas = Product::paginate($this->listRows);
        }
        return $datas;
	}
}