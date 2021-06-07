@extends('admin.main')
@section('content')
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
            <a href="" class="btn btn-success">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(session('message'))
          <div class="alert alert-danger alert-dismissible">
          <p>{{session('message')}}</p>
          </div>
          @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Member</th>
                  <th>Location</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Add To Bank List</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bank as $b)
                      <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$b->name}}</td>
                  <td>{{$b->member}}</td>
                  <td>{{$b->location}}</td>
                  <td>{{$b->email}}</td>
                  <td>{{$b->phone}}</td>
                  <td><img src="{{asset($b->image)}}" width="100px;" height="100px;" class="img-thumbnail"></td>
                  <td><a href="{{route('add.bank',['id'=>$b->id])}}">Add To Bank List</a></td>
                <td><a href="">Edit</a></td>
                  <td>
                    <form action="" id="form-data-{{$b->id}}" method="POST">
                  @csrf
                  {{method_field('DELETE') }}
                  </form>
                  <a href="" onclick="if(confirm('Are you sure want to delete'))
                  {
                      event.preventDefault();
                      document.getElementById('form-data-{{$b->id}}').submit();}
                      else{
                          event.preventDefault();
                      }
                      ">
                       <span class="fa fa-trash" style="color:#3C8DBC;font-size:21px; margin-left:10%;"></span>

                  </a>
                  </td>
                  {{-- @can('viewAny',$bank) --}}
                  {{-- @endcan --}}
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Member</th>
                  <th>Location</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Image</th>
                  <th>Add To Bank List</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
