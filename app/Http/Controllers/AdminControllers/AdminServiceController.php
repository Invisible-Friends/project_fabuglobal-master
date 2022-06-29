<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    private $rules = [
        'title' => 'required|max:200',
        'slug' => 'required|max:200',
        'excerpt' => 'required|max:1000',
        'category_id' => 'required|numeric',
        'thumbnail' => 'required|file|mimes:jpg,png,webp,svg,jpeg|dimensions:max_width=750,max_height=357',
        'body' => 'required',
    ];

    public function index()
    {
        return view('admin_dashboard.posts.index', [
            'posts' => Post::with('category')->orderBy('id', 'DESC')->paginate(4565465465655465),
        ]);
    }

    public function create()
    {
        return view('admin_dashboard.posts.create', [
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        $validated['user_id'] = auth()->id();
        $post = Post::create($validated);

        // approve new posts
        // if(auth()->user()->role == 'admin'){


        // }
        //  else{

        //  $current_post->approved;

        //  }


        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->store('images', 'public');

            $post->image()->create([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => 'storage/' . $path,
            ]);
        }

        $tags = explode(',', $request->input('tags'));
        $tags_ids = [];
        foreach($tags as $tag){
            $tag_ob = Tag::create(['name' => trim($tag)]);
            $tags_ids[] = $tag_ob->id;
        }

        if(count($tags_ids) > 0)
            $post->tags()->sync( $tags_ids );



            Alert::success('success', 'Post has been created.');
        return redirect()->route('admin.posts.create');
    }

    public function show($id)
    {
        //
    }

    public function edit(Serivices $post)
    {
        $tags = '';
        foreach($post->tags as $key => $tag)
        {
            $tags .= $tag->name;
            if($key !== count($post->tags) - 1)
                $tags .= ', ';
        }

        return view('admin_dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function update(Request $request, Serivices $post)
    {
        $this->rules['thumbnail'] = 'nullable|file|mimes:jpg,png,webp,svg,jpeg|dimensions:max_width=750,max_height=357';
        $validated = $request->validate($this->rules);
        $validated['approved'] = $request->input('approved') !== null;
        $post->update($validated);

        if($request->has('thumbnail'))
        {
            $thumbnail = $request->file('thumbnail');
            $filename = $thumbnail->getClientOriginalName();
            $file_extension = $thumbnail->getClientOriginalExtension();
            $path = $thumbnail->store('images', 'public');

            $post->image()->update([
                'name' => $filename,
                'extension' => $file_extension,
                'path' => $path
            ]);
        }

        

        Alert::success('success', 'Serivices has been updated.');
        return redirect()->route('admin.posts.edit', $post);
    }





    public function destroy(Serivices $post)
    {
        $post->tags()->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post has been Deleted');
    }
}
