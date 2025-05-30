<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModalFormRequest;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function modal() {
        Log::debug('Values old: '.json_encode(old()));
        return view('app.modal');
    }

    public function modalPost(ModalFormRequest $request) {
        dd($request->all());
    }

    public function testSubmit(TestRequest $request) {
        //
    }
}

