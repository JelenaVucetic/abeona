@extends('layouts.app')

@section('content')
   <div class="container margin-top">
       <div class="card">
           <!-- Start Card Body -->
           <div class="card-body">
               <!-- Start Form -->
               <form id="create-car" class="needs-validation" novalidate autocomplete="off" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="_token" id="create_token" value="{{ csrf_token() }}">

                   <div class="container">
                       <h2 style="margin-left: 10px;margin-bottom: 10px;">Car details</h2>
                       @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                        @endif
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="inputName">Car Name</label>
                               <input type="text" class="form-control" id="name" name="car[name]" placeholder="Car name" required />
                               <small class="form-text text-muted">Please fill car name</small>
                           </div>

                           <div class="form-group col-md-4">
                               <label for="motor">Engine</label>
                               <input type="text" class="form-control" id="motor" name="car[motor]" placeholder="Car engine" required />
                               <small class="form-text text-muted">Please fill car engine</small>
                           </div>

                           <div class="form-group col-md-4">
                               <label for="passenger">Passengers</label>
                               <input type="number" class="form-control" id="passenger" name="car[passenger]" required />
                               <small class="form-text text-muted">Please fill number of passengers</small>
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Doors</label>
                               <input type="number" class="form-control" id="doors" name="car[doors]" required />
                               <small class="form-text text-muted">Please fill number of doors</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="transmission">Transmission</label>
                               <select class="form-control" id="transmission" name="car[transmission]" >
                                   <option>Manual</option>
                                   <option>Automatic</option>
                               </select>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="year">Year</label>
                               <input type="number" class="form-control" id="year" name="car[year]" required />
                               <small class="form-text text-muted">Please fill yaar</small>
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="full_insurance">Full Insurance</label>
                               <input type="number" class="form-control" id="full_insurance" name="car[full_insurance]" required />
                               <small class="form-text text-muted">Please fill price for full insuranec</small>
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="basic_insurance">Basic Insurance</label>
                               <input type="number" class="form-control" id="basic_insurance" name="car[basic_insurance]" required />
                               <small class="form-text text-muted">Please fill price for basic insuranec</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="participation_damage">Participation Damage</label>
                               <input type="number" class="form-control" id="participation_damage" name="car[participation_damage]" required />
                               <small class="form-text text-muted">Please fill Participation Damage</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="deposit">Deposit</label>
                               <input type="number" class="form-control" id="participation_damage" name="car[deposit]" required />
                               <small class="form-text text-muted">Please fill deposit price</small>
                           </div>
                       </div>
                   </div>

                   <hr />

                   <div class="container">
                       <h2 style="margin-bottom: 10px; margin-left: 10px">Prices</h2>
                       <h4 style="margin-left: 10px">Summer  15.06-15.09</h4>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="prices">Price: default</label>
                               <input type="number" class="form-control summer" id="default" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="prices">Price: 1-3 days</label>
                               <input type="number" class="form-control summer" id="1-3" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="prices">Price: 4-7 days</label>
                               <input type="number" class="form-control summer" id="4-7" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="prices">Price: 8-15 days</label>
                               <input type="number" class="form-control summer" id="8-15"  required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="prices">Price: 16-22 days</label>
                               <input type="number" class="form-control summer" id="16-22" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="prices">Price: 23+days</label>
                               <input type="number" class="form-control summer" id="23+" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>
                   <div class="container">
                       <h4 style="margin-left: 10px;">Autumn 15.09.-15.11.</h4>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: default</label>
                               <input type="number" class="form-control autumn" id="default" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 1-3 days</label>
                               <input type="number" class="form-control autumn" id="1-3" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 4-7 days</label>
                               <input type="number" class="form-control autumn" id="4-7" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 8-15 days</label>
                               <input type="number" class="form-control autumn" id="8-15" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: 16-22 days</label>
                               <input type="number" class="form-control autumn" id="16-22" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 23+ days</label>
                               <input type="number" class="form-control autumn" id="23+" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>

                   <div class="container">
                       <h4 style="margin-left: 10px;">Winter 15.11.-15.03</h4>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: default</label>
                               <input type="number" class="form-control winter" id="default" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 1-3 days</label>
                               <input type="number" class="form-control winter" id="1-3" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 4-7 days</label>
                               <input type="number" class="form-control winter" id="4-7" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 8-15 days</label>
                               <input type="number" class="form-control winter" id="8-15" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: 16-22 days</label>
                               <input type="number" class="form-control winter" id="16-22" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 23+ days</label>
                               <input type="number" class="form-control winter" id="23+" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                   </div>

                   <div class="container">
                       <h4 style="margin-left: 10px;">Spring 15.03.-15.06.</h4>

                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: default</label>
                               <input type="number" class="form-control spring" id="default" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 1-3 days</label>
                               <input type="number" class="form-control spring" id="1-3" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price": 4-7 days</label>
                               <input type="number" class="form-control spring" id="4-7" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 8-15 days</label>
                               <input type="number" class="form-control spring" id="8-15" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-3">
                               <label for="">Price: 16-22 days</label>
                               <input type="number" class="form-control spring" id="16-22" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-3">
                               <label for="">Price: 23+ days</label>
                               <input type="number" class="form-control spring" id="23+" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                   </div>
                   <hr />

                   <div class="container">
                       <div class="form-group">
                           <div class="upload__box">
                               <div class="upload__btn-box">
                                   <label class="upload__btn">
                                       <p>Upload images</p>
                                       <input type="file" id="images" multiple="" data-max_length="20" class="upload__inputfile">
                                   </label>

                               </div>
                               <div class="upload__img-wrap"></div>
                           </div>
                       </div>

                   </div>


                   <div style="display: flex;justify-content: center">
                       <div class="form-group col-md-3">
                            <button id="save-car" class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
                       </div>
                   </div>
               </form>
               <!-- End Form -->
           </div>
           <!-- End Card Body -->
       </div>
   </div>
@endsection


@section('js')
    <script>
    jQuery(document).ready(function () {
            ImgUpload();
        });

    $('#save-car').click(function(e) {
        e.preventDefault();
        let formData = new FormData($('#create-car')[0]);

        let carImages = {};
        const totalImages = $("#images")[0].files.length;

        if (totalImages > 0) {
            let images = $("#images")[0];

            const mainImageName = $('input[name="main-image"]:checked')
            if (!mainImageName.is(":checked")) {
                $('input[name="main-image"]:first').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                return false;
            }
            for (let i = 0; i < totalImages; i++) {
                formData.append('files[]', images.files[i])

                if (images.files[i]['name'] === mainImageName.val()) {
                    formData.append('images['+i+'][type]', 'main');
                } else {
                    formData.append('images['+i +'][type]', 'details');
                }
                formData.append('images['+i+'][name]', 'image'+i+'.jpg')
            }

        }
        const seasons = ['summer', 'autumn', 'winter', 'spring']
        $.each(seasons, function( index, value ) {
            formData.append('prices['+index+'][season]', value)
            $('input.'+value).each(function() {
                formData.append('prices['+index+']['+$(this).attr('id')+']', $(this).val())
            })
        });

        $.ajax({
            processData: false,
            type: 'POST',
            url: "{{ route('cars.store') }}",
            data: formData,
            contentType: false,
            success: function (data) {
                window.location.href = "/cars"
            },
            error: function(data){
                var errors = data.responseJSON.errors;
                console.log(errors);
                // Render the errors with js ...

                $.each(errors, function (key, value) {
                    console.log('key',key)
                    console.log('value',value)
                });
            }
        })
    });



    </script>
@endsection
