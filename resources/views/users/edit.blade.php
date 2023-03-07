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
              <form action="/users/{{ $user->id }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Full name" name="name" id="name" value="{{ old('name', $user->name) }}">
                      @error('name')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter email" name="email" id="email" value="{{ old('email', $user->email) }}">
                      @error('email')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="jenis_kelamin">Gender</label>
                      @if (old('jenis_kelamin', $user->jenis_kelamin) == 'Laki-Laki')
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jenis_kelamin_pria" name="jenis_kelamin"
                            value="Laki-Laki" checked>
                          <label for="jenis_kelamin_pria" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jenis_kelamin_perempuan"
                            name="jenis_kelamin" value="Perempuan">
                          <label for="jenis_kelamin_perempuan" class="custom-control-label">Perempuan</label>
                        </div>
                      @else
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jenis_kelamin_pria" name="jenis_kelamin"
                            value="Laki-Laki">
                          <label for="jenis_kelamin_pria" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="jenis_kelamin_perempuan"
                            name="jenis_kelamin" value="Perempuan" checked>
                          <label for="jenis_kelamin_perempuan" class="custom-control-label">Perempuan</label>
                        </div>
                      @endif
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="no_ponsel">Phone</label>
                      <input type="number" class="form-control @error('no_ponsel') is-invalid @enderror"
                        placeholder="Phone" name="no_ponsel" id="no_ponsel"
                        value="{{ old('no_ponsel', $user->no_ponsel) }}">
                      @error('no_ponsel')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="alamat">Address</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Your address" name="alamat" id="alamat"
                        value="{{ old('alamat', $user->alamat) }}">
                      @error('alamat')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-info">Update User</button>
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
