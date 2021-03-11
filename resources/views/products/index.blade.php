@extends('layouts.app')

@section('content')

  <div class="col-lg-12">
    <h1 class="my-2">Products</h1>
    <a href="{{ route('products.create') }}">
      <button class="btn btn-info text-white mb-4">Add New Product</button>
    </a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
            <td class="d-flex">
              <a href="{{ route('products.edit', $product) }}">
                <button class="btn btn-primary  mr-2">Edit</button>
              </a>
              <form action="{{ route('products.destroy', $product) }}"
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

      </tbody>
    </table>
  </div>


@endsection
