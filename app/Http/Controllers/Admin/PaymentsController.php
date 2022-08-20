<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PaymentsController extends Controller
{

    public function index()
    {
        $payments=Payment::all();

    return view('admin.payments.list',compact('payments'))->with('panel_title','Payments List');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }


}
