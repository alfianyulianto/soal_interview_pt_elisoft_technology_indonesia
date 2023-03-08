@extends('layouts.main')

@section('main_content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            Make Terbilang
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-9">
              <div class="row">
                <div class="col-7">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter number (e.g 1234567)"
                      aria-label="Example text with button addon" aria-describedby="button-addon1" id="number">
                    <button class="btn btn-outline-secondary click" type="button">Click</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="terbilang" class="form-control" id="result_terbilang" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(".click").on("click", function() {
      let number = $("input#number").val();
      // console.log(number);
      if (number) {
        $.ajax({
          type: "post",
          url: "/terbilang",
          data: {
            number: number,
            _token: '{{ csrf_token() }}'
          },
          dataType: "json",
          success: function(response) {
            // console.log(response);
            let result = response.terbilang;
            $("input#result_terbilang").val(result);
          }
        });
      }
    });
    $("input#number").on("keypress", function(e) {
      if (e.key === 'Enter') {
        let number = $("input#number").val();
        // console.log(number);
        if (number) {
          $.ajax({
            type: "post",
            url: "/terbilang",
            data: {
              number: number,
              _token: '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function(response) {
              // console.log(response);
              let result = response.terbilang;
              $("input#result_terbilang").val(result);
            }
          });
        }
      }
    });
  </script>
@endsection
