<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('id','DESC')->get();
        return view('backend.category.index',compact('categories'));
    }

    public function categoryStatus(Request $request)
    {
       $data = strip_tags($request->mode);
       $data = htmlspecialchars($request->mode);
       $data = stripslashes($request->mode);
       $data = trim($request->mode);

     //   \Debugbar::messages($request->all());
       if ($data == 'true' ) {
           # code...
           DB::table('categories')->where('id',$request->id)->update(['status'=>'active']);
       } else {
           DB::table('categories')->where('id',$request->id)->update(['status'=>'inactive']);
       }
       return response()->json(['msg'=>'Sucessfully updated category status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parents = Category::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.category.create',compact('parents'));

        //make sure to remove this
        $data = strip_tags($request->mode);
        $data = htmlspecialchars($request->mode);
        $data = stripslashes($request->mode);
        $data = trim($request->mode);

      //   \Debugbar::messages($request->all());
        if ($data == 'true' ) {
            # code...
            DB::table('categories')->where('id',$request->id)->update(['status'=>'active']);
        } else {
            DB::table('categories')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Sucessfully updated category status','status'=>true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[
            'title'     => 'string|required',
            'summary'   => 'string|nullable',
            'is_parent' => 'sometimes|in:1',
            'parent_id' => 'nullable',
            'status'    =>  'nullable|in:active,inactive'
         ]);

         $data = $request->all();
         $slug = Str::slug($request->input('title'));
         $slug_count=Category::where('slug',$slug)->count();
         if ($slug_count > 0 ) {
             # code...
             $slug = time().'-'.$slug;
         }

         $data['slug']=$slug;
         if ($request->input('is_parent') == '1') {
            # code...
            $data['parent_id'] == null;
         } else {
            $data['is_parent'] = false;
         }

        // $data['is_parent']=$request->input('parent_id',0);
         $status = Category::create($data);
         if ($status) {
            # code...
            return \Redirect::route('category.index')->with('success','Category Successfully Inserted');
         } else {
            return back()->with('error','something went wrong!');
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
        $parents = Category::where('is_parent',1)->orderBy('title','ASC')->get();
        $category=Category::find($id);
        if ($category) {
            return view('backend.category.edit',compact('category','parents'));
        } else {
            return back()->with('error','category not found');
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
       // return $request->all();
        $category=Category::find($id);
        if ($category) {
            $this->validate($request,[
                'title'     => 'string|required',
                'summary'   => 'string|nullable',
                'is_parent' => 'nullable',
                'parent_id' => 'nullable',
                'status'    =>  'nullable|in:active,inactive'
             ]);

             $data = $request->all();
             if ($request->input('is_parent') == '1') {
                # code...
                $data['parent_id'] == null;
             } else {
                $data['is_parent'] = false;
             }
            // return $data;
             $status = $category->fill($data)->save();
             if ($status) {
                # code...
                return \Redirect::route('category.index')->with('success','Category Successfully Updated');
              } else {
                  return back()->with('error','Something went wrong, Please try again later');
             }
        } else {
             return back()->with('error','This Data no longer exist');
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
        $child_cat_id = Category::where('parent_id',$id)->pluck('id');
        $category = Category::find($id);
        if ($category) {
         $check = $category->delete();
           if ($check) {
              # code...
              if (count($child_cat_id) > 0) {
                # code...
                Category::shiftChild($child_cat_id);
              }
              return \Redirect::route('category.index')->with('success','Successfully deleted a category');
           } else {

              return back()->with('error','Someting went wrong');
           }

        }  else {
               return back()->with('error','Data not found');
      }

    }
}
