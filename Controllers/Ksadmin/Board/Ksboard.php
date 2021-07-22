<?php


namespace App\Http\Controllers\Ksadmin\Board;
use App\Models\Ksboard\ks_board;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//작성날짜, 수정날짜 추가하기

class Ksboard extends Controller{

 public function index(){
   $oKa_b = new ks_board();
   $aAlldata = $oKa_b->all();
   $aRes = [
       'code'=>'200',
       'message'=>'success',
       'data'=>$aAlldata,
     ];
   return response()->json($aRes);
 }

 public function store(Request $oRequest){
   $oKa_b = new ks_board();
   $aPa = $oRequest->all();
   $aNewdata = $oKa_b->insert($aPa);
   if($aNewdata){
     $aRes = [
       'code'=>'200',
       'message'=>'success',
       'data'=>$aPa,
     ];}
   else {
     $aRes=[
       'code'=>'400',
       'message'=>''
     ];}
   return response()->json([$aRes]);
 }
public function detail(Request $oRequest){
  $oKa_b = new ks_board();
  $aPa = $oRequest->all();
  $aView = $oKa_b->where('kb_idx',$aPa['idx'])->first
  if($aView){
    $aRes = [
        'code'=>'200',
        'message'=>'success',
        'data'=>$aView,
      ];}
  else{
    $aRes = [
        'code'=>'400',
        'message'=>'No data',
      ];}
  return response()->json([$aRes]);
}





}
