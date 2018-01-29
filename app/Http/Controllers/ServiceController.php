<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
   /**
	 * Index Page
	 * 
	 * @return void
	 */
    public function index() 
    {
    	return view('admin.service.index');
    }
    
    /**
     * Service crate page
     * 
     * @return void
     */
    public function create() 
    {
    	return view('admin.service.create');
    }
    
    public function store() 
    {

    }

    public function edit( $id ) 
    {

    }

    public function update() 
    {

    }

    public function destroy( $id )
    {

    }
}
