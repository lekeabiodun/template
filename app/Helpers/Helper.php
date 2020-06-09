<?php

use Illuminate\Support\Str;

if(!function_exists('getImage')){
	function getImage($imageLink){
		if(file_exists($imageLink)){
			return asset($imageLink);
		} else{
			return asset('storage/not-available.png');
		}
	}
}

if(!function_exists('user')){
	function user(){
		return auth()->user();
	}
}

if(!function_exists('str_plural')){
	function str_plural($str){
		return Str::plural($str);
	}
}