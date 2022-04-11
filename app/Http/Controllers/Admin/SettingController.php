<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Setting;
use App\Models\SettingGroup;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function __construct()
    {

        $this->middleware(function ($request, $next) {
            if ((Auth::user()->isAdmin() && Auth::user()->can('Setting')) || Auth::user()->isSuperAdmin())
            {
                return $next($request);
            }else{
                abort(404);
            }
        });

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/settings.create',['types'=>['مدیر ارشد','ادمین','مشتری']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'value'=>'required|string',
            'group'=>'required|integer',
            'type'=>'required|string'
        ]);


        $setting = new Setting([
            'name'=> $validated['name'],
            'value'=> $validated['value'],
            'setting_group_id'=> $validated['group'],
            'description'=>$validated['description'],
            'type'=>$validated['type']
        ]);

        $setting->save();

        alert()->success('تنظیمات با موفقیت ایجاد شد');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $group = SettingGroup::findOrFail($id);
         return view('admin.settings.index',compact('group'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


                    Setting::where('id','=',$id)->update([
                        'value' => $request['value']
                    ]);



        alert()->success('ویرایش انجام شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
