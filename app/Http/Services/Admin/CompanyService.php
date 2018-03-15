<?php

namespace App\Http\Services\Admin;

use App\Company;

class CompanyService extends CommonService{
	public function getIndexDatas($keyword = null){
		$company = Company::find(1);
        return $company;
    }
}
