<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{

    public function index()
    {
        return response()->json(["msg" => "fdfdfdf"]);
    }

    public function store(TestRequest $request)
    {
        //$Validator = Validator::make($request->all(),["name" => "required"]);
        //if ($request->validator->fails()) return response()->json($request->validator->errors());
        return response()->json($request);
    }
}
