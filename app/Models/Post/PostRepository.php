<?php

namespace App\Models\Post;

use App\Models\Post\Post;

class PostRepository implements PostRepositoryInterface
{
    public function get()
    {
        return Post::all();
    }

    public function create($params)
    {        
       
    }

    public function store(array $params) 
    {
        return Post::create([
            'firstname' => $params['firstname'],
            'lastname' => $params['lastname'],
            'email' => $params['email'],
        ]);
    }

    public function delete($params)
    {
        return Post::destroy($params);
    }

    public function getById($id) 
    {
        return Post::find($id);
    }

    public function update($params,$id)
    {
        $data = $this->getById($id);
        $data->update($params);
    } 
}  

