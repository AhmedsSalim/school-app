<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Toastr;
class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('dashboard.Pages.Setting.index', compact('setting'));
    }


    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'logo' => 'nullable|image|mimes:jpeg,png,bmp,gif,svg|max:2048',
        ]);
    
        $setting = Setting::first();
    
        if ($request->hasFile('logo')) {
            $logoName = 'logo_' . now()->format('YmdHis') . '.' . $request->file('logo')->getClientOriginalExtension();
            $logoPath = $request->file('logo')->storeAs('public/img', $logoName);
            
            if ($setting->logo) {
                $oldImagePath = public_path('img/' . $setting->logo);
    
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $validatedData['logo'] = str_replace('public/', '', $logoPath);
        }
    
        $setting->update($validatedData);
    
        Toastr::success('تم حفظ البيانات بنجاح.');
    
        return redirect()->back();
    }
}
