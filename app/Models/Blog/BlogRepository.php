<?php

namespace App\Models\Blog;

use App\Models\Blog\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    public function get()
    {
        return Blog::all();
    }

    public function create($params)
    {
        return view('blog.create');
    }

    public function delete($params)
    {

    }

    public function edit($params) 
    {
        
    }
}