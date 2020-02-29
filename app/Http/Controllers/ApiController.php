<?php

 

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;
use DB;
 

class ApiController extends Controller

{

    public function index()

    {
        $query = "
            SELECT *
            FROM `movies`
            WHERE 1
            ORDER BY `rating` DESC
            LIMIT 10
        ";

        $movies = DB::select($query);

        // get JSON string ...
        return $movies;


    }

}