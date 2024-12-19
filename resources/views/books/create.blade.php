@extends('layouts.app')

@section('title', 'Create a new book')

@section('sidebar')
    @parent

    <p>Create a new book</p>
@endsection

@section('content')
    <h1 class="text-2xl font-bold">Create a new book</h1>
    <form method="POST" action="/books" class="grid grid-cols-2 gap-2 p-4">
    @csrf
    <label for="title" class="text-sm text-gray-500">Title</label>
    <input type="text" name="title" placeholder="Title" class="border border-gray-300 rounded-md p-2" id="title" value="{{ old('title') }}">
    @if($errors->has('title'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('title') }}</p>
    @endif
    <label for="author" class="text-sm text-gray-500">Author</label>
    <input type="text" name="author" placeholder="Author" class="border border-gray-300 rounded-md p-2" id="author" value="{{ old('author') }}">
    @if($errors->has('author'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('author') }}</p>
    @endif
    <label for="publisher" class="text-sm text-gray-500">Publisher</label>
    <input type="text" name="publisher" placeholder="Publisher" class="border border-gray-300 rounded-md p-2" id="publisher" value="{{ old('publisher') }}">
    @if($errors->has('publisher'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('publisher') }}</p>
    @endif
    <label for="publication_date" class="text-sm text-gray-500">Publication Date</label>
    <input type="date" name="publication_date" placeholder="Publication Date" class="border border-gray-300 rounded-md p-2" id="publication_date" value="{{ old('publication_date') }}">
    @if($errors->has('publication_date'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('publication_date') }}</p>
    @endif
    <label for="isbn" class="text-sm text-gray-500">ISBN</label>
    <input type="text" name="isbn" placeholder="ISBN" class="border border-gray-300 rounded-md p-2" id="isbn" value="{{ old('isbn') }}">
    @if($errors->has('isbn'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('isbn') }}</p>
    @endif
    <label for="description" class="text-sm text-gray-500">Description</label>
    <input type="text" name="description" placeholder="Description" class="border border-gray-300 rounded-md p-2" id="description" value="{{ old('description') }}">
    @if($errors->has('description'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('description') }}</p>
    @endif
    <label for="image_url" class="text-sm text-gray-500">Image URL</label>
    <input type="text" name="image_url" placeholder="Image URL" class="border border-gray-300 rounded-md p-2" id="image_url" value="{{ old('image_url') }}">
    @if($errors->has('image_url'))
        <p class="text-red-500 col-start-2 col-end-3">{{ $errors->first('image_url') }}</p>
    @endif
    <button type="submit" class="bg-blue-500 text-white rounded-md p-2 col-span-2">Create</button>
</form>


@endsection
