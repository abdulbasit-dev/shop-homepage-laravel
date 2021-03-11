@extends('layouts.app')

@section('content')

  <div class="col-lg-12">

    <h1 class="my-4">Edit Category</h1>

    <form action="{{ route('categories.update', $category) }}"
      method="post">
      @csrf
      @method("PUT")
      <div class="mb-3">
        <label for="name"
          class="form-label">Name</label>
        <input type="text"
          class="form-control form-control-lg"
          name="name"
          id="name"
          value="{{ $category->name }}">
      </div>

      <button type="submit"
        class="btn btn-primary">Update</button>
    </form>
  </div>


@endsection
