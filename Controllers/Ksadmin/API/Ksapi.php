<?php

namespace App\Http\Controllers\Ksadmin\API;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

use App\Models\Ksboard\ks_board; // 마이그레이션 해서 자체 데이터 말고, ks_board에 있는 데이터 들고옴.
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ksapi extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //
	// public function __construct () {
	// 	// preload here
	// 	$this->response = new Response;
	// }

    // 데이터 목록 가지고 오기,
    public function index(){

        $oKa_b = new ks_board();
        $all_ks_admin = $oKa_b->all();
        return $all_ks_admin;

    }

    // 새 데이터를 만드는 화면을 반환  -> 여기서 view를 후에 front 에서 바로 보여주고 싶으면 설정하면 된다.
    // public function create(){
    //  지금 필요 없는 부분임.
    // }

    // 새 데이터 추가
    public function store(Request $oRequest){ // 배열 형식 맞추기. object면 o, int i 이런식.

    }

    // 특정 데이터 가져오기
    public function show($id){

    }

    // 기존 데이터를 수정하는 화면을 반환 -> front 넣을때 필요로 하고, api 설계시 무시
    // public function edit($id){
    // 여기도 api 설계시 필요없다.
    // }

    // 기존 데이터를 수정해서 -> 수정된 데이터를 반환, 대부분 json 형태로 ?
    public function update(Request $oRequest, $id){

    }

    // 기존 데이터 삭제하는 구간
    public function destroy($id){

    }

}
