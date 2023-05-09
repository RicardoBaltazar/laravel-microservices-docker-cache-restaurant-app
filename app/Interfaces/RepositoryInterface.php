<?php

namespace App\Interfaces;

interface RepositoryInterface
{
    public function all();
    public function create(array $attributes);
    public function find(int $id);
    public function delete(int $id);
    public function update(int $id, array $attributes);
}
