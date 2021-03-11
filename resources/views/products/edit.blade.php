@extends('layouts.app')

@section('content')

  <div class="col-lg-12">

    <h1 class="my-4">Edit Product </h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('products.update', $product) }}"
      method="post"
      enctype="multipart/form-data">
      @csrf
      @method("PUT")

      <div class="mb-3">
        <label for="name"
          class="form-label">Name</label>
        <input type="text"
          class="form-control form-control-lg"
          name="name"
          value="{{ $product->name }}"
          id="name">
      </div>
      <div class="mb-3">
        <label for="price"
          class="form-label">Price ($)</label>
        <input type="text"
          class="form-control form-control-lg"
          name="price"
          value="{{ $product->price }}"
          id="price">
      </div>
      <div class="mb-3">
        <label for="price"
          class="form-label">Category</label>
        <select class="custom-select"
          name="category_id">
          <option selected>Choose a Category</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id }}"
              @if ($category->id == $product->category_id) selected @endif>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="description"
          class="form-label">Description</label>
        <textarea type="text"
          rows="4"
          class="form-control form-control-lg"
          name="description"
          id="description">
                  {{ $product->description }}</textarea>
      </div>

      <div class="custom-file mb-3">
        <label class=""
          for="photo">Choose file</label>
        <input type="file"
          class=""
          name="photo"
          id="photo">
      </div>

      <button type="submit"
        class="btn btn-primary">Update</button>
    </form>
  </div>


@endsection
