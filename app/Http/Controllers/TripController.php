<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    function create_trip(){
        
        return("Trip is created");     
    }

    function generate_trip(){

        return("Trip is generated");
        
    }

    function delete_trip(){

        return("Trip is deleted");
    }

    function update_trip(){

        return("Trip is updated");
    }
}
