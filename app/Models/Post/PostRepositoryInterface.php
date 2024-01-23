<?php

namespace App\Models\Post;

interface PostRepositoryInterface
{
    public function get();

    public function create($params);

    public function delete($params);

    public function getById($id);

    public function update($params , $id);

    public function store(array $params);
       
}