<?php

namespace App\Http\Services\Admin;

use App\ProductCategory;

class ProductCategoryService extends CommonService{
	public function getIndexDatas($keyword = null){
		if($keyword){
            $keyword = '%'.$keyword.'%';
            $datas = ProductCategory::where('name', 'like', $keyword)->paginate($this->listRows);
        }else{
    	    $datas = ProductCategory::paginate($this->listRows);
        }
        return $datas;
	}
}