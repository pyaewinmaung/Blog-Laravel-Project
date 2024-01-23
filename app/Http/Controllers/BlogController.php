<?php

namespace App\Http\Controllers;
use App\Models\Blog\Blog;
use App\Models\Blog\BlogRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{    
    private $blogReposity;

    public function __construct(BlogRepositoryInterface $blogReposity)
    {
        $this->middleware('auth');
        $this->blogReposity = $blogReposity;
    }

    public function index()
    {
        // $data = Blog::all();
        $data = $this->blogReposity->get();
        return view('blog.blog', compact('data'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            //'lastname'=>'required', (don't need validate for nullable value)
            'email'=>'required|unique:blogs',
            'image'=>'required|file'
        ]);
        //dd($request->alll());

        //dd('hello.'.$request->file('image')->extension());
        $file_name = time().'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('images'),$file_name);

        $this->blogRepositycreate([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'image' => $file_name
        ]);
        
        //dd($request);
        return redirect(route('blog.index'));
    }

    public function edit($id)
    {
        $data = Blog::where('id', $id)->first();
        return view('blog.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = Blog::where('id', $id)->first();  
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');

        if($request->hasFile('image'))
        {
            $file_path = public_path('images/').$data->image; 
            //dd($file_path);     
            if(File::exists($file_path))
            {
                File::delete($file_path);
            }  

            $file_name = time().'.'.$request->file('image')->extension();
            $request->file('image')->move(public_path('images'),$file_name);
            
            $data->image = $file_name;

        }

        $data->save();        
        return redirect()->route('blog.index');
    }

    public function delete($id)
    {
        $deletedata = Blog::where('id',$id)->first();
        $file_path = public_path('images/').$deletedata->image; 
        //dd($file_path);

        if(File::exists($file_path))
        {
            File::delete($file_path);
        } 
        $deletedata->delete();
        return back();
    }
}
