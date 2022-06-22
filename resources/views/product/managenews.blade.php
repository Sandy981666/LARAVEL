@extends('layouts.app', ['activePage' => 'Product', 'titlePage' => __('Product List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
     
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Manage news&events</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add news</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Photo</td>
                    <td>Title</td>
                    <td>Created at</td>
                    <td>Action</td>
                </tr>
                @foreach($news as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->photo}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->created at}}</td>
                    <td><a href="">Delete</a> <a href="">Edit</a> </td>

                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('postAddNews')}}" method="POST">
      <div class="modal-body">
            @csrf()
            <label for="name">Title</label>
            <input type="text" id="name" name="name"></br>
            <label for="Details">Details</label>
            <textarea name="details" id="details"></textarea></br>
            <label for="Cost">Photo</label>
            <input type="file" id="picture" ></br>
    
            <label for="name">Created at</label>
            <input type="date" id="name" name="expirydate"></br>
            <label for="name">Picture</label>
            <input type="file" id="picture" name="picture"></br>

            
    
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection