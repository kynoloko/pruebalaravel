<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function index()
    {
        return "hola desde aqui y desde allas";
    }
	
	public function nombre($nombre)
	{
		return "hola mi nombre es" . $nombre;
	}
}