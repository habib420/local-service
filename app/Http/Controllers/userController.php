
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function index(){
    	$users = [
    		'0' => [
    			'fast_name' => 'Md Habib',
    			'last_name' => 'Ullah',
    			'location'  => 'Bangladesh'
    		],
    		'1' => [
    			'fast_name' => 'Md Ariful',
    			'last_name' => 'Islam',
    			'location'  => 'Bangladesh'
    		],
    	];

    	return $users;
    }
}

