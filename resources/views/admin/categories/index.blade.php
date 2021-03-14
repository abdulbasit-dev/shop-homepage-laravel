@extends('adminlte::page')
@section('title', 'All Categories')
@section('content')

  <div class="col-lg-12 mx-auto bg-white p-4">
    <h1 class="my-2">Categories</h1>
    <button class="btn btn-info mb-4"
      data-toggle="modal"
      data-target="#createCategory">Add New
      Category</button>
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

              <button class="btn btn-primary  mr-2"
                data-toggle="modal"
                data-target="#editCategory">Edit</button>

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

          <!--Edit Category Modal -->
          <div class="modal fade"
            id="editCategory"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog"
              role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title"
                    id="exampleModalLabel">Edit Category</h3>
                  <button type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="">
                    <form action="{{ route('categories.update', $category) }}"
                      method="post"
                      id="edit-catagory-form">
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
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                  <button type="submit"
                    onclick="
                                                                                                                     event.preventDefault();
                                                                                                                     document.getElementById('edit-catagory-form').submit();"
                    class="btn btn-success">Update</button>
                </div>
              </div>
            </div>
          </div>
          <!--/Edit Category Modal -->

        @endforeach

      </tbody>
    </table>
  </div>





  <!--Create Category Modal -->
  <div class="modal fade"
    id="createCategory"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog"
      role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title"
            id="exampleModalLabel">Create Category</h3>
          <button type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="">
            <form action="{{ route('categories.store') }}"
              method="post"
              id="create-catagory-form">
              @csrf

              <div class="mb-3">
                <label for="name"
                  class="form-label">Name</label>
                <input type="text"
                  class="form-control form-control-lg"
                  name="name"
                  id="name">
              </div>


            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button"
            class="btn btn-secondary"
            data-dismiss="modal">Close</button>
          <button type="submit"
            onclick="
                                                                                                                        event.preventDefault();
                                                                                                                        document.getElementById('create-catagory-form').submit();"
            class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>

  <!--End Create Category Modal -->


@endsection
