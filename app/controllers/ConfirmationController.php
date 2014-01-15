<?php
class  ConfirmationController extends BaseController{
	public function page(){
		return View::make('base.confirmation');
	}
	
	public function confirmed($code){
	$confirmationDone = DB::table('users')->where('confirmation_code',$code)->pluck('confirmation');
	//$value=$confirmationDone['confirmation']; //ignore this
	
		if($confirmationDone==0){ //note still need to do a already register
			DB::table('users')
				->where('confirmation_code', $code)
				->update(array('confirmation' => 1));
			return View::make('base.emailRegister');
		}	
		else{
			return View::make('base.alreadyVerify');
		}
	
	}
}