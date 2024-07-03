<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Services\MediaFile;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BlogController extends Controller
{
    private $root = 'backend.blogs.';

    public function index()
    {
        $blogs = Blog::all();
        return view($this->root . 'index', ['blogs' => $blogs]);
    }


    public function create()
    {
        return view($this->root . 'create');
    }

    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'category' => 'required',
                'description' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $blog = new Blog();
            $blog->title = $request->title;
            $blog->category = $request->category;
            $blog->description = $request->description;

            if($request->hasFile('image'))
                $blog->image = (new MediaFile)->upload('blogs/', $request->image);

            if ($blog->save()) {
                return redirect()->back()->with('success', 'Blog has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
   
    public function show($id)
    {
        $blog = blog::findOrFail($id);
        return view($this->root . 'edit', ['blog' => $blog]);
    }
    
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view($this->root . 'edit', ['blog' => $blog]);
    }

    public function update(Request $request,  $id)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', $validator->errors());
            }

            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->category = $request->category;
            $blog->description = $request->description;

            if($request->hasFile('image')){
                if (!empty($blog->image) && file_exists(public_path('storage/blogs/' . $blog->image))) {
                    unlink(public_path('storage/blogs/' . $blog->image));
                }
                $blog->image = (new MediaFile)->upload('blogs/', $request->image);
            }
            if ($blog->save()) {
                return redirect()->route('blogs.index')->with('success', 'Blog has been created');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function destroy($id)
    {
        try {
            $blog = blog::findOrFail($id);
            if ($blog->delete()) {
                if (!empty($blog->image) && file_exists(public_path('storage/blogs/' . $blog->image))) {
                    unlink(public_path('storage/blogs/' . $blog->image));
                }
                return redirect()->back()->with('success', 'Blog has been deleted');
            }
            return redirect()->back()->with('error', 'Something went wrong!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
