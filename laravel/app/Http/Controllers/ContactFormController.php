<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function submit(Request $request) {

        // $teste = $this->validate($request, [
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);

        /*
          Add mail functionality here.
        */

        // return view('teste', compact('teste'));

        $rules = array(
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required',
        );
 
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(null, 422);
        }

        $postArray = $request->post();

        TestController::example($postArray['name']);

        return response()->json($postArray['name'], 200);
    }
}