@extends('layouts.app')

@section('content')

  <div class="col-lg-12">

    <h1 class="my-4">New Category</h1>

    <form action="{{ route('categories.store') }}"
      method="post">
      @csrf

      <div class="mb-3">
        <label for="name"
          class="form-label">Name</label>
        <input type="text"
          class="form-control form-control-lg"
          name="name"
          id="name">
      </div>

      <button type="submit"
        class="btn btn-primary">Create</button>
    </form>
  </div>


@endsection
