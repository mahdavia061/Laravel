<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = plan::all();
        return view('admin.plans.list',compact('plans'))->with('panel_title', 'Plans list');
    }

    public function create()
    {
        return view('admin.plans.create')->with(['panel_title' => 'New Plan']);
    }


    public function store(Request $request)
    {

        $this->validate($request,
            [
                'plan_title' => 'required',
                'plan_limit_download_count' => 'required',
                'plan_price' => 'required',
                'plan_days_count' => 'required'
            ],
            [
                'plan_title.required' => 'Please Enter The plans\'s title.',
                'plan_limit_download_count.required' => 'Please Enter download limit.',
                'plan_price.required' => 'Please Enter The plans\'s price.',
                'plan_days_count.required' => 'Please Enter The Dead line.'

            ]);


        $new_plan_data = [
            'plan_title' => $request->input('plan_title'),
            'plan_limit_download_count' => $request->input('plan_limit_download_count'),
            'plan_price' => $request->input('plan_price'),
            'plan_days_count' => $request->input('plan_days_count')

        ];

        $new_plan = plan::create($new_plan_data);

        if ($new_plan) {
            return redirect()->route('admin.plans.list')->with('success','New plans created successfulate.');
        }

    }

    public function edit(Request $request,$plan_id)
    {
        $plan_id = intval($plan_id);
        $planItem = plan::find($plan_id);
        return view('admin.plans.edit',compact('planItem'));
    }

    public function update(Request $request,$plan_id)
    {
    $plan_id=intval($plan_id);
    //validation

        $planItem= plan::find($plan_id);
        $updated_plan = $planItem->update([

            'plan_title' => $request->input('plan_title'),
            'plan_limit_download_count' => $request->input('plan_limit_download_count'),
            'plan_price' => $request->input('plan_price'),
            'plan_days_count' => $request->input('plan_days_count')

        ]);
        if ($updated_plan){
            return redirect()->route('admin.plans.list')->with('success','The plan Edited successfulate.');
        }
    }

    public function delete(Request $request,$plan_id)
    {
        $plan_id=intval($plan_id);
        $planItem= plan::find($plan_id);
        if($planItem){
            $planItem->delete();

        }
        return redirect()->route('admin.plans.list')->with('success','The plan deleted was successfull.');

    }
}
