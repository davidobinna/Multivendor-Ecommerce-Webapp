<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $brands = Brand::orderBy('id','DESC')->get();
        return view('backend.brand.index',compact('brands'));
    }


    public function brandStatus(Request $request)
    {
       $data = strip_tags($request->mode);
       $data = htmlspecialchars($request->mode);
       $data = stripslashes($request->mode);
       $data = trim($request->mode);
       
     //   \Debugbar::messages($request->all());
       if ($data == 'true' ) {
           # code...
           DB::table('brands')->where('id',$request->id)->update(['status'=>'active']);
       } else {
           DB::table('brands')->where('id',$request->id)->update(['status'=>'inactive']);
       }
       return response()->json(['msg'=>'Sucessfully updated the brand status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
        'title'   => 'nullable|string',
        'photo'   => 'required',
        'status'  => 'nullable|in:active,inactive',
      ]);
      $data = $request->all();
      $slug = Str::slug($request->input('title')); 
            $slug_count=Brand::where('slug',$slug)->count();
            if ($slug_count > 0 ) {
                # code...
                $slug = time().'-'.$slug;
            } 

            $data['slug']=$slug;
            $status = Brand::create($data);
      if ($status) {
        # code...
         return \Redirect::route('brand.index')->with('success','Brand Successfully created');
      } else {
         return back()->with('error','something went wrong, please try agian');
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
      $brands = Brand::find($id);
      if ($brands) {
        # code...
         return view('backend.brand.edit',compact('brands'));

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
      $brand = Brand::find($id);
      # code...
      if ($brand) {
        # code...
        $this->validate($request,[
            'title'=>'string|required',
            'photo'=>'required',
        ]);

        $data = $request->all();
        $status = $brand->fill($data)->save();               
         if ($status) {
            # code...
            return \Redirect::route('brand.index')->with('success','Successfully updated a brand');
         } else {
            return back()->with('brand','something went wrong');
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
        $brand = Brand::find($id);
          if ($brand) {
            # code...
           $check = $brand->delete();
             if ($check) {
                # code...
                return \Redirect::route('brand.index')->with('success','Brand successfully deleted');
             } else {
                
                return back()->with('error','Someting went wrong');      
             }

          }  else {
                 return back()->with('error','Data not found');
        }
    }
}
