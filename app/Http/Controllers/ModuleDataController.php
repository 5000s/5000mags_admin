<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleDataController extends Controller
{
    public function index (Request $request){

        $moduledata = $request->moduledata;
        $config = "";

        $data = [];
        $data['moduledata'] = $moduledata;

        if ($moduledata != ""){
            $config = \SiteHelpers::CF_decode_json($moduledata);
            $data['config'] = json_encode($config);
        }else{
            $data['config'] = "";
        }


        return view("module.input", $data);
    }

    public function save (Request $request){

        $config = $request->config;
        $arr = json_decode($config);
        $moduledata = \SiteHelpers::CF_encode_json($arr);


        $data = [];
        $data['moduledata'] = $moduledata;
        $data['config'] = $config;

        return view("module.input", $data);
    }
}
