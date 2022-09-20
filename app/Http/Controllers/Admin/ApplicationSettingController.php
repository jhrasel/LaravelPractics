<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class ApplicationSettingController extends Controller
{

    // create
    public function create(){
        return view('admin.application_setting.create');
    }

    // index
    public function index(){
        $app_settings = ApplicationSetting::all();
        return view('admin.application_setting.index', compact('app_settings'));
    }

    // Update
    public function updateSetting(Request $request){

        
        foreach ($request->types as $type) {

            if ($type === 'app_logo') {
                
                $this->upload($request->app_logo, $type);
                
            }
            
            elseif ($type === 'app_favicon') {
                
                $this->upload($request->app_favicon, $type);
                
            } else {
                $business_settings = ApplicationSetting::where('key', $type)->first();
                if($business_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
                else{
                    $business_settings = new ApplicationSetting;
                    $business_settings->type = $type;
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
            }
            
        }

        return redirect()->route('application_setting.index');

    }

    public function upload($request, $data)
    {
         
        if($data !== null){
           
            $image = $request->file($data);
            $imageName = $data.'-'.time().'.'.$image->getClientOriginalExtension();
            
            Image::make($image)->save('uploads/logo/'.$imageName);
            $saveUrl = 'uploads/logo/'.$imageName;

            dd($saveUrl);
            
            $business_settings = ApplicationSetting::where('key', $data)->first();
            $business_settings->value = $saveUrl;
            $business_settings->save();
        }
    }


}
