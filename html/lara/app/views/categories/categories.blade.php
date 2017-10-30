@extends('layouts.master') @section('title', '| Create Categories') @section('content') {{-- {{ $d_show->id }} --}}
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Category ID</th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  @foreach ($c_index as $c_i)
  <tbody>
    <tr>
      <td>{{ $c_i['id'] }}</td>
      <td>{{ $c_i['name'] }}</td>
    </tr>
  </tbody>
  @endforeach
</table>






<div class="blog-post">

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCat" data-whatever="@getbootstrap">Add a New Category</button>

  <div class="modal fade" id="AddCat" tabindex="-1" role="dialog" aria-labelledby="AddCat" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <form action=" {{ URL::to('categories')}}" method="post" class="form-group ">
            <div class="form-group">
              <label for="cat_name">Name of Category</label>
              <input type="text" class="form-control" id="cat_name" name="cat_name">
            </div>
            <div class="form-group">
              <label for="cat_desc">Description</label>
              <textarea class="form-control" id="cat_desc" rows="4" name="cat_desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>
    </div>
  </div>
</div>
<br> {{ $c_index->links() }} @endsection
