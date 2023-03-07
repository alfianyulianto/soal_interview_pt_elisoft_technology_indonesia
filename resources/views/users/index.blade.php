@extends('layouts.main')

@section('main_content')
  <div class="row">
    <div class="col-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <a href="/users/create" class="btn btn-primary"><i class="fas fa-user-plus"></i> New User</a>
          @if (session('success_create_new_user'))
            <div class="alert alert-success mt-3" role="alert">
              {{ session('success_create_new_user') }}
            </div>
          @endif
          @if (session('success_user_delete'))
            <div class="alert alert-success mt-3" role="alert">
              {{ session('success_user_delete') }}
            </div>
          @endif
          @if (session('error_user_delete'))
            <div class="alert alert-danger mt-3" role="alert">
              {{ session('error_user_delete') }}
            </div>
          @endif
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>No Ponsel</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->jenis_kelamin }}</td>
                  <td>{{ $user->alamat }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->no_ponsel }}</td>
                  <td>
                    <a href="/users/{{ $user->id }}/edit" class="btn btn-block btn-warning"><i
                        class="fas fa-edit"></i>
                      Edit</a>
                    <form action="/users/{{ $user->id }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash-alt"></i>
                        Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
