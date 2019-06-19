@extends('main')
@section('content')

        <!-- Page Content -->
        <h1>Update Category</h1>
        <hr>
        <button class="btn-default"><a href="show">View all Category</a></button>
        <button class="btn-default"><a href="create">Create new Category</a></button>
        
       <hr>
       <form method="post" action="{{ route('category.update', $category->id ) }}">
        @method('PATCH')
         @csrf
         <label>Enter new Category</label>
         <input type="text" name="name" value="{{ $category->name }}">
         <br>
         <input type="submit" name="" value="Update">
       </form>

@endsection