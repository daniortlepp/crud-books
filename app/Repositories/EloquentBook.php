<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class EloquentBook extends BaseRepository implements BookRepository {

    /* MODEL
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Book";
    }

    public function with($relations)
    {
        return parent::with($relations);
    }

    public function getAll($string = null)
    {
        return parent::where('title', 'LIKE', '%' . $string . '%')->orWhere('description', 'LIKE', '%' . $string . '%')->orWhere('author', 'LIKE', '%' . $string . '%')->get();
    }

    public function create(array $attributes = [])
    {
        return parent::create($attributes);
    }

    public function delete($id) {
        return parent::delete($id);
    }

    public function update(array $attributes, $id) {
        return parent::update($attributes, $id);
    }
}