<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banners = Banner::orderBy('id','DESC')->get();
        return view('backend.banners.index',compact('banners'));
    }

     public function bannerStatus(Request $request)
     {
        $data = strip_tags($request->mode);
        $data = htmlspecialchars($request->mode);
        $data = stripslashes($request->mode);
        $data = trim($request->mode);

      //   \Debugbar::messages($request->all());
        if ($data == 'true' ) {
            # code...
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        } else {
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Sucessfully updated banner status','status'=>true]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.banners.create');

        //Make sure to remove this later
        $data = strip_tags($request->mode);
        $data = htmlspecialchars($request->mode);
        $data = stripslashes($request->mode);
        $data = trim($request->mode);

      //   \Debugbar::messages($request->all());
        if ($data == 'true' ) {
            # code...
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        } else {
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Sucessfully updated banner status','status'=>true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $this->validate($request,[
                'title'=>'string|required',
                'photo'=>'required',
                'description'=>'string|nullable',
                'condition'=>'nullable|in:banner,promo',
                'status'=>'nullable|in:active,inactive',
            ]);

            $data = $request->all();
            $slug = Str::slug($request->input('title'));
            $slug_count=Banner::where('slug',$slug)->count();
            if ($slug_count > 0 ) {
                # code...
                $slug = time().'-'.$slug;
            }

            $data['slug']=$slug;
            $status = Banner::create($data);

            if ($status) {
                # code...
                return \Redirect::route('banner.index')->with('success','Successfully created banner ');
            } else {
                return back()->with('error', 'Please fill the required data! '.$e->getMessage());
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $banner = Banner::find($id);
          if ($banner) {
            # code...
             return view('backend.banners.edit',compact('banner'));

          }  else {
                 return back()->with('error','Data not found');
        }

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
        //
    //    try {
            $banner = Banner::find($id);
              # code...
              if ($banner) {
                # code...
                $this->validate($request,[
                    'title'=>'string|required',
                    'photo'=>'required',
                    'description'=>'string|nullable',
                    'condition'=>'nullable|in:banner,promo',
                    'status'=>'nullable|in:active,inactive',
                ]);

                $data = $request->all();
                $status = $banner->fill($data)->save();
                 if ($status) {
                    # code...
                    return \Redirect::route('banner.index')->with('success','Successfully updated banner');
                 } else {
                    return back()->with('error','something went wrong');
                 }
            }  else {
                 return back()->with('error', 'Data not found!');
           }
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
        $banner = Banner::find($id);
          if ($banner) {
            # code...
           $check = $banner->delete();
             if ($check) {
                # code...
                return \Redirect::route('banner.index')->with('success','Successfully deleted banner');
             } else {

                return back()->with('error','Someting went wrong');
             }

          }  else {
                 return back()->with('error','Data not found');
        }
    }
}
