<?php


namespace App\Http\Controllers\Ksadmin\Board;
use App\Models\Ksadmin\ks_admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ksuser extends Controller{


   /*public function index(){

        $oKa_m = new ks_admin();
        $aAlluser = $oKa_m->all();
        $aRes=[
          'code'=>'200',
          'message'=>'success',
          'indexdata'=>$aAlluser,
        ];
        return  response()->json($aRes);
      }*/

	public function detail(Request $oRequest){
		$oKa_m = new ks_admin();
		$aPa = $oRequest->all();
		//print_r($aPa);
		$aUser = $oKa_m->where('ka_id',$aPa['id'])->first();
		if($aUser){
			$aRes = [
          'code'=>'200',
          'message'=>'success',
          'data'=>$aUser,
        ];}
		else{
      $aRes = [
          'code'=>'400',
          'message'=>'No data',
        ];}
    return response()->json([$aRes]);
  }

}
