<?php

namespace App\Http\Controllers;

use Uploader;
use App\Bike;
use App\Category;
use Illuminate\Http\Request;
/*use App\Services\UploaderService;*/
use App\Http\Requests\BikeRequest;

class BikesController extends Controller
{
    public function index () {
        $bikes = Bike::orderBy('id', 'desc')->paginate(10);
        return view('bikes.index')->with('bikes', $bikes);
    }

    public function form ( Bike $bike = null ) {
        
        $categoryList = Category::pluck('name', 'id')->toArray();
        $bike = $bike ?: new Bike;
        return view('bikes.form')->with('bike', $bike)->with('categoryList', $categoryList);
    }

    public function post (BikeRequest $request) {

        $bike = Bike::firstOrNew(['id' => $request->get('id')]);
        $bike->brand = $request->get('brand');
        $bike->model = $request->get('model');
        $bike->category_id = $request->get('category_id');
        $bike->price = $request->get('price');
        $bike->country = $request->get('country');
        $bike->quality = $request->get('quality');
        $bike->quantity = $request->get('quantity');
        $bike->sold_item = $request->get('sold_item');
        $bike->cc = $request->get('cc');
        $bike->color = $request->get('color');
        $bike->warranty = $request->get('warranty');
        $bike->comment = $request->get('comment');

        if ($request->file('image'))
        {
            $uploadedFile = Uploader::upload($request->file('image'), 'bikes')->watermark();
            $bike->image = $uploadedFile->saveFileName;
            /*$bike->image = Uploader::upload($request->file('image'), 'bikes');*/
        }

        $bike->save();
        
        return redirect()->route('bike.index');
    }

    public function delete (Bike $bike) {
        $bike->delete();
        return redirect()->back();
    }
}
