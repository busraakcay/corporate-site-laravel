<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::withoutGlobalScopes()
            ->orderByRaw("CASE WHEN place IS NULL THEN date ELSE place END ASC")
            ->paginate(getPaginationNumber());
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $languages = getLanguages();
        return view('admin.news.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date_equals:date',

            'image_tr' => 'required',
            'image_en' => 'required',

            'upload_image_tr' => 'image',
            'upload_image_en' => 'image',

            'title_tr' => 'required',
            'title_en' => 'required',
            'content_tr' => 'required',
            'content_en' => 'required',
        ]);

        $uploadedImgTR = $request->input('image_tr');
        $uploadedImgEN = $request->input('image_en');

        if ($uploadedImgTR !== null || $uploadedImgEN !== null) {
            $imageTR = adjustImage(
                $uploadedImgTR,
                $request->input('title_tr'),
                "uploads/news/",
                null,
                getGeneralPhotoDimensions()["width"],
                getGeneralPhotoDimensions()["height"]
            );
            $imageEN = adjustImage(
                $uploadedImgEN,
                $request->input('title_en'),
                "uploads/news/",
                null,
                getGeneralPhotoDimensions()["width"],
                getGeneralPhotoDimensions()["height"]
            );
        } else {
            return redirect()->back()->with('error', 'Kırpılmış fotoğraf mevcut değil tekrar deneyiniz');
        }

        News::create([
            'date' => $request->input('date'),
            'image_tr' => $imageTR,
            'image_en' => $imageEN,

            'title_tr' => $request->input('title_tr'),
            'title_en' => $request->input('title_en'),

            'content_tr' => $request->input('content_tr'),
            'content_en' => $request->input('content_en'),

        ]);
        deleteTempImages();
        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla eklendi.');
    }

    public function edit($id)
    {
        $news = News::withoutGlobalScopes()->findOrFail($id);
        $languages = getLanguages();
        return view('admin.news.edit', compact('news', 'languages'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'date' => 'required|date_equals:date',

            'upload_image_tr' => 'image',
            'upload_image_en' => 'image',

            'title_tr' => 'required',
            'title_en' => 'required',
            'content_tr' => 'required',
            'content_en' => 'required',
        ]);

        $uploadedImgTR = $request->input('image_tr');
        $uploadedImgEN = $request->input('image_en');

        if ($uploadedImgTR !== null) {
            $imageTR = adjustImage(
                $uploadedImgTR,
                $request->input('title_tr'),
                "uploads/news/",
                $request->input('oldImage_tr'),
                getGeneralPhotoDimensions()["width"],
                getGeneralPhotoDimensions()["height"]
            );
        } else {
            $imageTR = $request->input('oldImage_tr');
        }

        if ($uploadedImgEN !== null) {
            $imageEN = adjustImage(
                $uploadedImgEN,
                $request->input('title_en'),
                "uploads/news/",
                $request->input('oldImage_en'),
                getGeneralPhotoDimensions()["width"],
                getGeneralPhotoDimensions()["height"]
            );
        } else {
            $imageEN = $request->input('oldImage_en');
        }

        News::where('id', $id)->update([
            'date' => $request->input('date'),
            'image_tr' => $imageTR,
            'image_en' => $imageEN,

            'title_tr' => $request->input('title_tr'),
            'title_en' => $request->input('title_en'),

            'content_tr' => $request->input('content_tr'),
            'content_en' => $request->input('content_en'),

        ]);
        deleteTempImages();
        return redirect()->route('admin.news.index')->with('success', 'Haber başarıyla güncellendi.');
    }

    public function changePlace(Request $request)
    {
        $news = News::withoutGlobalScopes()->findOrFail($request->get('id'));
        $news->place =  $request->get('place');
        $news->update();
    }

    public function changeStatus(Request $request)
    {
        $news = News::withoutGlobalScopes()->findOrFail($request->id);
        $news->status = $request->status;
        $news->update();
        return response()->json(['success' => 'Status change successfully.', "value" => $request->state]);
    }

    public function destroy($id)
    {
        $news = News::withoutGlobalScopes()->findOrFail($id);
        $languages = getLanguages();
        foreach ($languages as $language) {
            if (!is_null($news['image_' . $language['code']])) {
                deleteImage("uploads/news/", $news['image_' . $language['code']]);
            }
        }
        $news->delete();
        if (!News::withoutGlobalScopes()->where('id', $id)->exists()) {
            return redirect()->back()->with('success', 'Haber başarıyla silindi.');
        } else {
            return redirect()->back()->with('error', 'Haber silinirken bir hata oluştu.');
        }
    }
}
