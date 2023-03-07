@extends('layouts.main')

@section('main_content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">
            Check Terbilang
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-9">
              <form id="form_terbilang" method="post">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="number">Enter Number</label>
                      <input type="number"
                        class="form-control @error('number') is-invalid @enderror"placeholder="Masukan angka (eg: 10980200)"
                        name="number" id="number">
                      @error('number')
                        <div id="validationServer04Feedback" class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary tombol">Submit</button>
              </form>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="terbilang">Hasil Terbilang</label>
                    <input type="terbilang" class="form-control @error('terbilang') is-invalid @enderror" name="terbilang"
                      id="terbilang" readonly>
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
    $(function() {
      $.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      $('#form_terbilang').validate({
        rules: {
          number: {
            required: true,
            number: true
          },
        },
        messages: {
          number: {
            required: "Please enter a number",
            email: "Please enter a valid number."
          },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    $(".tombol").on("click", function(e) {
      e.preventDefault();
      let number = $("input#number").val();
      console.log(number);
      if (number) {
        $.ajax({
          type: "post",
          url: "/terbilang",
          headers: {
            Cookie: <?= json_encode(csrf_token()) ?>
          }
          data: {
            number: number
          }
          dataType: "json",
          success: function(response) {
            console.log(response)
          }
        });
      }
    });
  </script>
@endsection
