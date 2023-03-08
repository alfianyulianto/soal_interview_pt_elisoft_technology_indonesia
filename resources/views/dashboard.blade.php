@extends('layouts.main')

@section('main_content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-address-card"></i>
            Profile
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-12">
              <div class="row mb-3 pr-0">
                <div class="col-lg-3 mb-3">
                  <img src="{{ url('') }}/img/avatar-3.png" class="rounded mx-auto d-block" alt=""
                    width="200">
                </div>
                <div class="col-lg-9">
                  <div class="d-inline">
                    <p class="mb-0 px-0 text-primary" style="font-size: 20px; font-weight: bold; line-height: 28px">
                      <b class="text-uppercase">{{ $user->name }}</b>
                    </p>
                    <p class="mb-0">
                      <i class="fas fa-venus-mars"></i> {{ $user->jenis_kelamin }}
                      </span>
                    </p>
                    <p class="mb-0">
                      <i class="fas fa-envelope"></i> {{ $user->email }}
                      </span>
                    </p>
                    <p class="mb-0">
                      <i class="fas fa-map-marker"></i> {{ $user->alamat }}
                      </span>
                    </p>
                    <p class="mb-0">
                      <i class="fas fa-phone"></i> {{ $user->no_ponsel }}
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
