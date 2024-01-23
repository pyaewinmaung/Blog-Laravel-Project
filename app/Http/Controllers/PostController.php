<?php

namespace App\Http\Controllers;

use App\Models\Post\Post;
use App\Models\Post\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $postReposity;

    public function __construct(PostRepositoryInterface $postReposity)
    {
        $this->middleware('auth');
        $this->postReposity = $postReposity;
    }
    
    public function index()
    {
        // $postdatas = Post::all();  
        $postdatas = $this->postReposity->get();
        return view('post.post',compact('postdatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->postReposity->store($request->all());
        //dd($request);
        return redirect(route('post.index'));       
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //string $id
        // return view('post.read');      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       // $data = Post::where('id',$id)->first();
        $data = $this->postReposity->getById($id);
        return view('post.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id )
    {
        //$data = Post::where('id',$id)->first();
        $data = $this->postReposity->getById($id);

        // $data->update([
        //     'firstname' => $request->firstname,
        //     'lastname' => $request->lastname,
        //     'email' => $request->email
        // ]);  
        
        $this->postReposity->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email
        ],$id);  

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {        
        //$data = Post::where('id',$id)->first(); 
        $data = $this->postReposity->delete($id);
        return back();
    }
}
