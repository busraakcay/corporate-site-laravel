<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::withoutGlobalScopes()
            ->orderBy("id", "asc")
            ->paginate(getPaginationNumber());
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $languages = getLanguages();
        return view('admin.product.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'croppedProductImages' => 'required',
        ]);

        $imageNameValues = $request->input('croppedProductImages');
        $imageNames = explode(",", $imageNameValues);

        if (count($imageNames) > 0) {
            $product = Product::create([
                'code' => $request->input('code'),
                'size' => $request->input('size'),
                'name_tr' => $request->input('name_tr'),
                'name_en' => $request->input('name_en'),
                'base_tr' => $request->input('base_tr'),
                'base_en' => $request->input('base_en'),
                'color_tr' => $request->input('color_tr'),
                'color_en' => $request->input('color_en'),
                'material_tr' => $request->input('material_tr'),
                'material_en' => $request->input('material_en'),
                'description_tr' => $request->input('description_tr'),
                'description_en' => $request->input('description_en'),
            ]);

            foreach ($imageNames as $imageName) {
                $image = adjustImage(
                    $imageName,
                    $request->input('name_tr'),
                    "uploads/products/",
                    null,
                    getGeneralPhotoDimensions()["width"],
                    getGeneralPhotoDimensions()["height"]
                );

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $image,
                    'name_tr' => $product->name_tr,
                    'name_en' => $product->name_en,
                ]);
            }
        } else {
            return redirect()->back()->with('error', 'Ürün resimlerini yükleyiniz.');
        }

        deleteTempImages();
        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function edit($id)
    {
        $product = Product::withoutGlobalScopes()->findOrFail($id);
        $languages = getLanguages();
        return view('admin.product.edit', compact('product', 'languages'));
    }

    public function changeStatus(Request $request)
    {
        $product = Product::withoutGlobalScopes()->findOrFail($request->id);
        $product->status = $request->status;
        $product->update();
        return response()->json(['success' => 'Status change successfully.', "value" => $request->state]);
    }

    public function destroy($id)
    {
        $product = Product::withoutGlobalScopes()->findOrFail($id);
        // $languages = getLanguages();
        // foreach ($languages as $language) {
        //     if (!is_null($product['image_' . $language['code']])) {
        //         deleteImage("uploads/news/", $product['image_' . $language['code']]);
        //     }
        // }
        $product->delete();
        if (!Product::withoutGlobalScopes()->where('id', $id)->exists()) {
            return redirect()->back()->with('success', 'Ürün başarıyla silindi.');
        } else {
            return redirect()->back()->with('error', 'Ürün silinirken bir hata oluştu.');
        }
    }
}
