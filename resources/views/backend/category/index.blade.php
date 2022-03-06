@extends('layouts.app')

@section('content')
    <div class="card">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create Post</a>
        <div class="card-body">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Descriptio</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
