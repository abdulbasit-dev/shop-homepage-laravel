@extends('layouts.app')

@section('content')

  <div class="col-lg-12">

    <h1 class="my-4">New Product</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('products.store') }}"
      enctype="multipart/form-data"
      method="post">
      @csrf

      <div class="mb-3">
        <label for="name"
          class="form-label">Name</label>
        <input type="text"
          class="form-control form-control-lg"
          name="name"
          value="{{ old('name') }}"
          id="name">
      </div>
      <div class="mb-3">
        <label for="price"
          class="form-label">Price</label>
        <input type="number"
          class="form-control form-control-lg"
          name="price"
          value="{{ old('price') }}"
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
              @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
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
          id="description"> {{ old('description') }}</textarea>
      </div>

      <div class=" mb-3">
        <label class="-label"
          for="photo">Choose file</label>
        <input type="file"
          class="input"
          name="photo"
          id="photo">
      </div>

      <button type="submit"
        class="btn btn-primary">Create</button>
    </form>
  </div>


@endsection
