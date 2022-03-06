<?php
namespace App\Repositories;


interface CategoryInterface
{
    public function index();
    public function create();
    public function store(array $data);
    public function edit($id);
    public function update($id , array $data);
    public function destroy($id);
}
