<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Consign;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class ApiController extends BaseController 
{
    function getCycle( $cycle_id ){
        if ($cycle = Cycle::where("id",$cycle_id)->first()) {
            // dd($cycle);
            return $this->sendResponse($cycle,"success");
        } else return $this->sendError("error ");
    }

    function getAllConsign(Request $request ){

        if (isset($request->ids)) {
            $ids = $request->ids;
            $ids = explode(",",$ids);
            // dd($ids);
            $consigns = Consign::whereIn('id', $ids)->with("cycle")->get();
            return $this->sendResponse($consigns,"success");
        } else {
            $consigns = Consign::with("cycle")->get();
            return $this->sendResponse($consigns,"success");
        }

    }

    function getcycleConsign($consign_id ){
        if ($id = $consign_id) {
            $cycle = (Consign::where('id', $id)->first())->cycle;
            return $this->sendResponse($cycle,"success");
        }
    }
}
