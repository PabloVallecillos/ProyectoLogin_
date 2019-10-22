<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;

class ValidationController extends Controller
{
     function loginCreate(){
        return view('form');
    }
      function forgotCreate(){
        return view('forgot');
    }
    
    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ValidationRequest $request){
        $datosValidados = $request->validated();
    }
}
