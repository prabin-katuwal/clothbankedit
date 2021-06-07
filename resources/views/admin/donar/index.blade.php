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
              @if(session('success'))
          <div class="alert alert-success alert-dismissible">
          <p>{{session('success')}}</p>
          </div>
          @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Quantity</th>
                  <th>Bank</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($donar as $b)
                      <tr>
                  <td>{{$loop->index +1}}</td>
                  <td>{{$b->name}}</td>
                  <td>{{$b->email}}</td>
                  <td>{{$b->location}}</td>
                  <td>{{$b->quantity}}</td>
                  <td>{{$b->bank}}</td>
                <td><a href="">Edit</a></td>
                  <td>
                    <form action="" id="form-data" method="POST">
                  @csrf
                  {{ method_field('DELETE') }}
                  </form>
                  <a href="" onclick="if(confirm('Are you sure want to delete'))
                  {
                      event.preventDefault();
                      document.getElementById('form-data').submit();}
                      else{
                          event.preventDefault();
                      }
                      ">
                       <span class="fa fa-trash" style="color:#3C8DBC;font-size:21px; margin-left:10%;"></span>

                  </a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Location</th>
                  <th>Quantity</th>
                  <th>Bank</th>
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
