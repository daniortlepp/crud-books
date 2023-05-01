<?php

namespace App\Repositories;

interface BookRepository
{
    /** Show all items */
    public function getAll();

    /** Create new item */
    public function create(array $attributes = []);

    /** Update the existed item */
    public function update(array $attributes, $id);

    /** Delete the existed item */
    public function delete($id);
}