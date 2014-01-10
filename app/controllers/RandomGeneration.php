<?php
class RandomGeneration{ // generates a random code for emails

	public static function generate($length){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
		$size = strlen( $chars );
		$code='';
		for( $i = 0; $i < $length; $i++ ){
			$code .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $code;
	}	

}