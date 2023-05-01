@extends('layouts.app')

@section('content')
    <div class="container margin-top">
        <div class="card">
            <!-- Start Card Body -->
            <div class="card-body">
                <!-- Start Form -->
                <form id="edit-car-form" class="needs-validation" novalidate autocomplete="off" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="create_token" value="{{ csrf_token() }}">
                    <div class="container">
                        <h2 style="margin-left: 10px;margin-bottom: 10px;">Car details</h2>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputName">Car Name</label>
                                <input type="text" class="form-control" id="name" name="car[name]" value="{{$car->name}}" placeholder="Car name" required />
                                <small class="form-text text-muted">Please fill car name</small>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="motor">Engine</label>
                                <input type="text" class="form-control" id="motor" name="car[motor]" value="{{$car->motor}}" placeholder="Car engine" required />
                                <small class="form-text text-muted">Please fill car engine</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="passenger">Passengers</label>
                                <input type="number" class="form-control" id="passenger" name="car[passenger]" value="{{$car->passenger}}"  required />
                                <small class="form-text text-muted">Please fill number of passengers</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="passengers">Doors</label>
                                <input type="number" class="form-control" id="doors" name="car[doors]" value="{{$car->doors}}" required />
                                <small class="form-text text-muted">Please fill number of doors</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transmission">Transmission</label>
                                <select class="form-control" id="transmission" name="car[transmission]" >
                                    <option {{ $car->transmission == 'manual' ? "selected" : "" }} value="manual">Manual</option>
                                    <option {{ $car->transmission == 'automatic' ? "selected" : "" }} value="automatic">Automatic</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" name="car[year]" value="{{$car->year}}" />
                                <small class="form-text text-muted">Please fill yaar</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="full_insurance">Full Insurance</label>
                                <input type="number" class="form-control" id="full_insurance" name="car[full_insurance]" value="{{$car->full_insurance}}" required />
                                <small class="form-text text-muted">Please fill price for full insuranec</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="basic_insurance">Basic Insurance</label>
                                <input type="number" class="form-control" id="basic_insurance" name="car[basic_insurance]" value="{{$car->basic_insurance}}" required />
                                <small class="form-text text-muted">Please fill price for basic insuranec</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="participation_damage">Participation Damage</label>
                                <input type="number" class="form-control" id="participation_damage" name="car[participation_damage]"  value="{{$car->participation_damage}}" required />
                                <small class="form-text text-muted">Please fill Participation Damage</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deposit">Deposit</label>
                                <input type="number" class="form-control" id="participation_damage" name="car[deposit]"  value="{{$car->deposit}}" required />
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
                                <input value="{{collect(($car->prices)->where('season', 'summer')->first())['default'] }}"
                                    type="number" class="form-control summer" id="default"  required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="prices">Price: 1-3 days</label>
                                <input  value="{{collect(($car->prices)->where('season', 'summer')->first())['1-3'] }}"
                                    type="number" class="form-control summer" id="1-3" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="prices">Price: 4-7 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'summer')->first())['4-7'] }}"
                                    type="number" class="form-control summer" id="4-7" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="prices">Price: 8-15 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'summer')->first())['8-15'] }}"
                                    type="number" class="form-control summer" id="8-15"  required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="prices">Price: 16-22 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'summer')->first())['16-22'] }}"
                                    type="number" class="form-control summer" id="16-22" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="prices">Price: 23+days</label>
                                <input value="{{collect(($car->prices)->where('season', 'summer')->first())['23+'] }}"
                                    type="number" class="form-control summer" id="23+" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <h4 style="margin-left: 10px;">Autumn 15.09.-15.11.</h4>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: default</label>
                                <input  value="{{collect(($car->prices)->where('season', 'autumn')->first())['default'] }}"
                                    type="number" class="form-control autumn" id="default" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 1-3 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['1-3'] }}"
                                       type="number" class="form-control autumn" id="1-3" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 4-7 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['4-7'] }}"
                                       type="number" class="form-control autumn" id="4-7" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 8-15 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['8-15'] }}"
                                type="number" class="form-control autumn" id="8-15" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: 16-22 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['16-22'] }}"
                                       type="number" class="form-control autumn" id="16-22" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 23+ days</label>
                                <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['23+'] }}"
                                       type="number" class="form-control autumn" id="23+" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>

                    </div>

                    <div class="container">
                        <h4 style="margin-left: 10px;">Winter 15.11.-15.03</h4>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: default</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['default'] }}"
                                    type="number" class="form-control winter" id="default" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 1-3 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['1-3'] }}"
                                    type="number" class="form-control winter" id="1-3" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 4-7 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['4-7'] }}"
                                    type="number" class="form-control winter" id="4-7" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 8-15 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['8-15'] }}"
                                    type="number" class="form-control winter" id="8-15" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: 16-22 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['16-22'] }}"
                                    type="number" class="form-control winter" id="16-22" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 23+ days</label>
                                <input value="{{collect(($car->prices)->where('season', 'winter')->first())['23+'] }}"
                                    type="number" class="form-control winter" id="23+" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h4 style="margin-left: 10px;">Spring 15.03.-15.06.</h4>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: default</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['default'] }}"
                                       type="number" class="form-control spring" id="default" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 1-3 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['1-3'] }}"
                                    type="number" class="form-control spring" id="1-3" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price": 4-7 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['4-7'] }}"
                                    type="number" class="form-control spring" id="4-7" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 8-15 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['8-15'] }}"
                                    type="number" class="form-control spring" id="8-15" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="">Price: 16-22 days</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['16-22'] }}"
                                    type="number" class="form-control spring" id="16-22" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="">Price: 23+ days</label>
                                <input value="{{collect(($car->prices)->where('season', 'spring')->first())['23+'] }}"
                                    type="number" class="form-control spring" id="23+" name="" required />
                                <small class="form-text text-muted">Please fill price</small>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex;justify-content: center">
                        <div class="form-group col-md-3">
                            <button id="edit-car" class="btn btn-primary btn-block col-lg-2" type="submit" data-id="{{$car->id}}">Save</button>
                        </div>
                    </div>
                    <hr />

                    <div class="container">
                        @foreach($car->images as $image)
                            <div style="display: flex; flex-direction: column">
                                <div style="display: flex; margin-bottom: 20px">
                                    <img style="width: 200px" src="{{ env("APP_IMAGE_PATH") }}/storage/{{$image->path}}"
                                         alt=""/>
                                    <div style="margin-left: 20px">
                                        <p>Image type: {{ $image->type }}</p>
                                        <button id="delete-image" data-image-id="{{ $image->id }}"
                                                data-car-id="{{ $car->id }}" class="btn btn-danger">Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="container">
                        <div class="form-group">
                            <input type="hidden" id="car-id" value="{{ $car->id }}">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <p>Add new images</p>
                                        <input type="file" id="images" multiple="" data-max_length="20" class="upload__inputfile">
                                    </label>

                                </div>
                                <div class="upload__img-wrap">
                                </div>

                            </div>
                            <div>
                                <button id='save-images' style='position: absolute;bottom: 0; display: none' class='btn btn-primary'>Save images</button>
                            </div>
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
            ImgUploadOnEdit();
        });
        $('#delete-image').click(function(e) {
            e.preventDefault();
            const image = $(this).data('image-id');
            const car = $(this).data('car-id');

            $.confirm({
                title: 'Are you sure?',
                content: 'This image will be deleted',
                buttons: {
                    cancel: function () {
                        $.alert('Canceled!');
                    },
                    delete: {
                        text: 'Delete',
                        btnClass: 'btn-red',
                        action: function(){
                            $.ajax({
                                processData: false,
                                type: 'DELETE',
                                url: "/images/"+ image,
                                contentType: false,
                                success: function (data) {
                                    $.alert('Deleted');
                                    window.location.href = '/cars/'+ car + '/edit'
                                }
                            })
                        }
                    }
                }
            });
        });

      /*  $('#edit-car').click(function(e) {
            e.preventDefault();
            const car =  $(this).data('id');
            let formData = new FormData($('#edit-car-form')[0]);

            const seasons = ['summer', 'autumn', 'winter', 'spring']
            $.each(seasons, function( index, value ) {
                formData.append('prices['+index+'][season]', value)
                $('input.'+value).each(function() {
                    formData.append('prices['+index+']['+$(this).attr('id')+']', $(this).val())
                })
            });

            $.ajax({
                processData: false,
                type: 'PUT',
                url: "{{ route('cars.update', $car) }}",
                data: formData,
                contentType: false,
                success: function (data) {
                    alert('success');
                }
            })
        });*/

        $('#save-images').click(function(e) {
            e.preventDefault();
            console.log('save images')
            const car = $('#car-id').val();
            let formData = new FormData();
            formData.append('car_id', car)
            const totalImages = $("#images")[0].files.length;

            if (totalImages > 0) {
                let images = $("#images")[0];

                const mainImageName = $('input[name="main-image"]:checked')

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
            $.ajax({
                processData: false,
                type: 'POST',
                url: "/images/" + car + "/save",
                data: formData,
                contentType: false,
                success: function (data) {
                    alert('success');
                }
            })
        })

    </script>
@endsection
