@extends('layouts.main')

@section('main_content')
  <div class="row">
    <div class="col-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9">
              <form action="/users" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full name"
                        name="name" id="name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                        name="email" id="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="jenis_kelamin">Gender</label>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="jenis_kelamin_pria" name="jenis_kelamin"
                          value="Laki-Laki">
                        <label for="jenis_kelamin_pria" class="custom-control-label">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="jenis_kelamin_perempuan"
                          name="jenis_kelamin" value="Perempuan">
                        <label for="jenis_kelamin_perempuan" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Phone"
                        name="no_ponsel" id="no_ponsel">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your address"
                        name="alamat" id="alamat">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info">Create User</button>
              </form>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
