<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        $config = getSettings();
        return view('admin.settings.index', compact('config'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'companyName' => 'required',
            'companyEmail' => 'required',
            'companyPhone' => 'required',
            'companyAddress' => 'required',
            'siteTitleTR' => 'required',
            'siteKeywordTR' => 'required',
            'siteDescriptionTR' => 'required',
            'siteTitleEN' => 'required',
            'siteKeywordEN' => 'required',
            'siteDescriptionEN' => 'required',
            'aboutUsTR' => 'required',
            'aboutUsEN' => 'required',
            'image' => 'required',
            'logo' => 'image',
        ]);

        $config = getSettings();
        $uploadedImg = $request->image;

        if ($uploadedImg !== null) {
            $logo = adjustImage(
                $uploadedImg,
                $config->company_name,
                "uploads/",
                $config->logo,
                getLogoDimensions()["width"],
                getLogoDimensions()["height"]
            );
        } else {
            $logo = $config->logo;
        }

        Settings::where('id', 1)->update([
            'logo' => $logo,
            'about_us_tr' => $request->input('aboutUsTR'),
            'about_us_en' => $request->input('aboutUsEN'),
            'company_name' => $request->input('companyName'),
            'company_email' => $request->input('companyEmail'),
            'company_phone' => $request->input('companyPhone'),
            'company_address' => $request->input('companyAddress'),
            'seo_title_tr' => $request->input('siteTitleTR'),
            'seo_keywords_tr' => $request->input('siteKeywordTR'),
            'seo_description_tr' => $request->input('siteDescriptionTR'),
            'seo_title_en' => $request->input('siteTitleEN'),
            'seo_keywords_en' => $request->input('siteKeywordEN'),
            'seo_description_en' => $request->input('siteDescriptionEN'),
        ]);
        deleteTempImages();
        return redirect()->back()->with('success', 'Ayarlar başarıyla güncellendi.');
    }
}
