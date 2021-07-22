<?php
namespace App\Http\Controllers\Ksadmin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ksadmin\ks_admin;

class Ksmember extends Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(Request $oRequest){
		$oKa = new ks_admin();
		$aData = $oKa->all();
		if ($aData){
			return $this->response->getResponse('200', 'success', $aData);
		} else {
			return $this->response->getResponse('400', 'no data');
		}
	}

	public function store(Request $oRequest){
		$oKa = new ks_admin();
		$aParams = $oRequest->all();
		if (!$aParams['id'] || !$aParams['pw'] || !$aParams['name'] || !$aParams['email']){
			return $this->response->getResponse('400', 'not enough params');
		}
		$aInsert = [
			'ka_id' => $aParams['id'],
			'ka_passwd' => hash('sha256', $aParams['pw']),
			'ka_name' => $aParams['name'],
			'ka_email' => $aParams['email']
		];
		$bResult = $oKa->create($aInsert);
		if (!$bResult){
			return $this->response->getResponse('400', 'fail to create');
		}

		return $this->response->getResponse('200', 'insert success');
	}

	public function detail(Request $oRequest){
		$oKa = new ks_admin();
		$aParams = $oRequest->all();
		if (array_key_exists('id', $aParams)){
			$aData = $oKa->where('ka_id', $aParams['id'])->first();
		} else if (array_key_exists('idx', $aParams)){
			$aData = $oKa->where('ka_idx', $aParams['idx'])->first();
		}
		if ($aData){
			return $this->response->getResponse('200', 'success', $aData);
		} else {
			return $this->response->getResponse('400', 'no data');
		}
	}

	public function remove(Request $oRequest){
		$oKa = new ks_admin();
		$aParams = $oRequest->all();
		print_r($aParams);
	}
}