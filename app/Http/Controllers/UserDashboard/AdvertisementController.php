<?php

namespace App\Http\Controllers\UserDashboard;

use App\Models\Group;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvertisement;
use Illuminate\Support\Facades\DB;


class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = auth()->user()->advertisements()->orderBy('id', 'desc')->get();
        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $categories = Category::all();
        return view('admin.advertisements.create', \compact('groups','categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdvertisement $request)
    {
        !isset($request->meson_id) ?? $request->meson_id == null;
        DB::transaction(function () use ($request) {
       $advertisement = Advertisement::create(
           [
               'group_id' => $request->group_id,
               'cat_id' => $request->cat_id,
               'type' => $request->type,
               'sell_way' => $request->sell_way,
               'meson_id' => $request->meson_id,
               'name' => $request->name,
               'price' => $this->fa_num_to_en($request->price),
               'made_in' => $request->made_in,
               'market_price' => $this->fa_num_to_en($request->market_price),
               'brand' => $request->brand,
               'material' => $request->material,
               'buy_at' => $request->buy_at,
               'usage' => $request->usage,
               'description' => $request->description,
               'user_id' => auth()->user()->id,
           ]
        );

        if ($advertisement) {
            //image gallery
            if ($request->images != null) {
                foreach (array_slice($request->images, 0, 6) as $image) {
                    $image = $this->uploadFile($image, false, true);
                    Gallery::create([
                      'filename' => $image,
                      'advertisement_id' => $advertisement->id
                    ]);
                }
            }


            //get all features of product
            $featureIds = [];
            if ($request->get('features')) {
                foreach ($request->get('features') as $featureId=>$featureValue) {
                    $feature = Feature::find($featureId);
                    if ($feature) {
                        $featureIds[$feature->id] = ['value'=>$featureValue];
                    }
                }

                $advertisement->features()->sync($featureIds);
            }
        }
      });


        alert()->success('آگهی شما با موفقیت ثبت شد و پس از تایید ناظران بر روی سایت قرار خواهد گرفت.', 'ثبت شد')->autoclose(10000)->confirmButton('متوجه شدم');
        return redirect()->route('advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
      return view('admin.advertisements.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $request->validate([
       'id' => 'required|numeric|min:1|max:10000000000|regex:/^[0-9]+$/u',
      ]);
      $advertisement = Advertisement::find($request->id);
        if($advertisement->user_id !== auth()->user()->id)
        {
          alert()->error('شما مجوز مورد نظر را ندارید.', 'انجام نشد');
          return redirect()->back();
        }
         $advertisement->delete();
    }
}
