<?php
namespace App\Repositories;
use App\Category;

class CategoryRepository implements CategoryInterface
{
    public function index()
    {
        //get categories where parent_id is null
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        //get categories where parent_id is null
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.category.create', compact('categories'));
    }

    public function store(array $data)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id , array $data)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
