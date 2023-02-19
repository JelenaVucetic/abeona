@extends('layouts.app')

@section('content')
   <div class="container margin-top">
       <div class="card">
           <!-- Start Card Body -->
           <div class="card-body">
               <!-- Start Form -->
               <form id="create-car" class="needs-validation" novalidate autocomplete="off">
                   <input type="hidden" name="_token" id="create_token" value="{{ csrf_token() }}">
                   <div class="form-row">
                       <div class="form-group col-md-6">
                           <label for="inputName">Car Name</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="Car name" required />
                           <small class="form-text text-muted">Please fill car name</small>
                       </div>

                       <div class="form-group col-md-6">
                           <label for="engine">Engine</label>
                           <input type="text" class="form-control" id="engine" name="engine" placeholder="Car engine" required />
                           <small class="form-text text-muted">Please fill car engine</small>
                       </div>
                   </div>

                   <!-- Start Input Date , Start Time and End Time -->
                   <div class="form-row">
                       <div class="form-group col-md-6">
                           <label for="passengers">Passengers</label>
                           <input type="number" class="form-control" id="passengers" name="passengers" required />
                           <small class="form-text text-muted">Please fill number of passengers</small>
                       </div>
                       <div class="form-group col-md-6">
                           <label for="passengers">Doors</label>
                           <input type="number" class="form-control" id="doors" name="doors" required />
                           <small class="form-text text-muted">Please fill number of doors</small>
                       </div>
                   </div>

                    <hr />

                   <h1>Prices</h1>

                   <div class="container">
                       <h3>Summer <br> 15.06-15.09</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 1-3 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 4-7 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 8-15 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 16-22 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 23+days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>
                   <div class="container">
                       <h3>Autumn <br> 15.09.-15.11.</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 1-3 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 4-7 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 8-15 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 16-22 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 23+ days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>

                   <div class="container">
                       <h3>Winter 15.11.-15.03</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 1-3 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 4-7 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 8-15 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 16-22 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 23+ days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                   </div>

                   <div class="container">
                       <h3>Spring <br> 15.03.-15.06.</h3>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 1-3 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price": 4-7 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 8-15 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 16-22 days</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price: 23+ days</label>
                               <input type="number" class="form-control" id="" name="" required />
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
                                       <input type="file" id="images" name="images[]" multiple="" data-max_length="20" class="upload__inputfile">
                                   </label>

                               </div>
                               <div class="upload__img-wrap"></div>
                           </div>
                       </div>

                   </div>

                   <!-- Start Submit Button -->
                   <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
                   <!-- End Submit Button -->
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

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#create_token').val()
            }
        });

        $('#create-car').submit(function(e){

            e.preventDefault();
            let formData = new FormData();

            const totalImages = $("#images")[0].files.length;

            let images = $("#images")[0];

            const mainImageName = $('input[name="main-image"]:checked')
            if (!mainImageName.is(":checked")) {
                $('input[name="main-image"]:first').tooltip({placement: 'top', trigger: 'manual'}).tooltip('show');
                return false;
            }
            for (let i = 0; i < totalImages; i++) {
                if (images.files[i]['name'] === mainImageName.val()) {
                    images.files[i]['isMain'] = true;
                } else {
                    images.files[i]['isMain'] = false;
                }
                formData.append('images' + i, images.files[i]);
            }

            formData.append('totalImages', totalImages);

            $.ajax({
                processData: false,
                type:'POST',
                url:"{{ route('cars.store') }}",
                data: formData,
                success:function(data){
                    alert('success');
                }
            });

        });

    </script>
@endsection
