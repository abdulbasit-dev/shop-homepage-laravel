@extends('layouts.app')

@section('content')

  <div class="col-lg-12">
    <h1 class="my-2">Products</h1>
    {{-- <a href="{{ route('categories.create') }}">
      <button class="btn btn-info mb-4">Add New Category</button>

    </a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td class="d-flex">
              <a href="{{ route('categories.edit', $category) }}">
                <button class="btn btn-primary  mr-2">Edit</button>
              </a>
              <form action="{{ route('categories.destroy', $category) }}"
                method="POST">
                @csrf
                @method("DELETE")
                <button type="submit"
                  onclick=" confirm('Are yue sure to delete this ?')"
                  class="btn btn-danger ">Delete</button>
              </form>
            </td>
          </tr>

        @endforeach

      </tbody> --}}
    {{-- </table> --}}
  </div>


@endsection
