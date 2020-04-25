<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $posts=Post::latest()->paginate(5);
        return view('posts.index',compact('posts'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $category=Category::all();
if ($category->count()==0){
    return redirect()->route('category.create');
}

$tag=Tag::all();
if ($tag->count()==0){
    return redirect()->route('tag.create');
}

        return view('posts.create')->with('category',$category)->with('tag',$tag);
        //
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
'title'=>'required',
'content'=>'required',
'category_id'=>'required',
'tagvalue'=>'required',
'image'=>'required|image',
]);




$image=$request->file('image');
$new_name=rand() . '.' . $image->getClientOriginalExtension();
$image->move(public_path('images/'),$new_name);


$post=Post::create([
   
    
   "title"=>$request->title,
 "content"=>$request->content,
  "category_id"=>$request->category_id,
  "image"=> $new_name,
  "tagvalue"=> $request->tagvalue,
  "slug"=>str_slug($request->title)

]);
$post->tags()->attach($request->tag);

return redirect()->route('posts');
//dd($request->all());

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
        $post=Post::find($id);
        return view('posts.edit')->with('posts',$post)->with('category',Category::all());
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

        $post=Post::find($id);
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'category_id'=>'required',  
            ]);

            if($request->hasFile('image') )
            {


            $image=$request->file('image');
            $new_name=rand() . '.' . $image->getClientOriginalExtension();
             $image->move(public_path('images/'),$new_name);

            $post->image = $new_name;
            
        }

   $post->title = $request->title;
   $post->content = $request->content;
   $post->category_id = $request->category_id;
   $post->save();

   return redirect()->route('posts');
 
            
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
        $post=Post::find($id);
        $post->delete();

        return redirect()->back();
    }

    public function trashed()
    {
        // 
        $post=Post::onlyTrashed()->get();
       

        return view('posts.softdeleted')->with('posts',$post);
    }

    public function hdelete($id)
    {
        //
        $post=Post::withTrashed()->where('id',$id)->first();
        $post->forceDelete();

        return redirect()->back();
    }

    public function restore($id)
    {
        //
        $post=Post::withTrashed()->where('id',$id)->first();
        $post->restore();

        return redirect()->route('posts');
    }



}
