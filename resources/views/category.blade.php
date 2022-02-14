@extends('layouts.main')

@section('container')
    
    <div class="row">
        <div class="col-sm-8">
        <h2 class="bg-warning">{{ $category }}</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($Home as $post)
                    <tr>
                        <td><a class="text-decoration-none link-dark" href="/home/{{ $post->slug}}">{{ $post->title }}</a></td>
                        <td>{{ $post->author }}</td>
                    </tr>
                  
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
        <h2 class="bg-warning">Category</h2>
            <div class="d-flex flex-column">
                <div class="p-2 text-primary"><a class="text-decoration-none" href="/categories/fiction">Fiction</a></div>
                <div class="p-2 text-primary"><a class="text-decoration-none" href="/categories/science">Science</a></div>
                <div class="p-2 text-primary"><a class="text-decoration-none" href="/categories/computer">Computer</a></div>
            </div>
        </div>
    </div>
    
@endsection
