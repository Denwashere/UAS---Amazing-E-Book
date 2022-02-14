
@extends('layouts.main')

@section('container')
    <a href="/" style="margin-left:5px;" class="btn-outline-dark text-decoration-none text-secondary">Back to Home</a>
    <div class="my-4 d-flex justify-content-between">
        <h2 style="margin-left:5px;">E-Book Detail</h2>
    </div>
   
    <table class="table table-borderless">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">{{ $post->title }}</th>
            </tr>
            <tr>
                <th scope="row">Author</th>
                <td>{{ $post->author }}</td>
            </tr>
    
            <tr>
                <th scope="row">Description</th>
                <td>{{ $post->body }}</td>
            </tr>
    </table>
    <div class="row d-flex justify-content-between">
        <a href="/contact" class="btn btn-dark my-4 py-2 mx-2" style="padding-right:2em;"><strong>Rent</strong></a>
    </div>
    
    

    
    
    
@endsection

