<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
class SettingController extends Controller
{
    public function create()
    {
        return view('setting');
    }

    public function store(Request $request)
    {

        // Validation
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_email' => 'required|email|max:255',
            'phone' => 'string|max:20',
            'logo' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
            'address' => 'string|max:255',
            'site_title' => 'string|max:255',
            'site_description' => 'string',
            'facebook' => 'url',
            'twitter' => 'url',
            'instagram' => 'url',
            'linkedin' => 'url',
        ]);

        // Logo upload
        if ($request->hasFile('logo')) {
            $fileName = time() . '.' . $request->logo->extension();
            $path = public_path('uploads/logo/' . $fileName);
            $request->logo->move(public_path('uploads/logo'), $fileName);
            $validated['logo'] = $path;
        }

        $settings = Setting::first();

        if(!$settings){
            $settings = new Setting;
        }

        $settings->company_name = $validated['company_name'];
        $settings->company_email = $validated['company_email'];
        $settings->phone = $validated['phone'];
        $settings->logo = $validated['logo'];
        $settings->address = $validated['address'];
        $settings->site_title = $validated['site_title'];
        $settings->site_description = $validated['site_description'];
        $settings->facebook = $validated['facebook'];
        $settings->twitter = $validated['twitter'];
        $settings->instagram = $validated['instagram'];
        $settings->linkedin = $validated['linkedin'];

        $settings->save();

        return redirect()->back()->with('success', 'Settings saved successfully!');
    }
}
