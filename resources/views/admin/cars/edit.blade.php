@extends('layouts.app')

@section('content')
    <div class="container margin-top">
        <div class="card">
            <!-- Start Card Body -->
            <div class="card-body">
                <!-- Start Form -->
                <form id="edit-car-form" class="needs-validation" novalidate autocomplete="off" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_token" id="create_token" value="{{ csrf_token() }}">
                    <div class="container">
                        <h2 style="margin-left: 10px;margin-bottom: 10px;">Car details</h2>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputName">Car Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{$car->name}}" placeholder="Car name" required/>
                                <small class="form-text text-muted">Please fill car name</small>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="motor">Engine</label>
                                <input type="text" class="form-control" id="motor" name="motor"
                                       value="{{$car->motor}}" placeholder="Car engine" required/>
                                <small class="form-text text-muted">Please fill car engine</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="passenger">Passengers</label>
                                <input type="number" class="form-control" id="passenger" name="passenger"
                                       value="{{$car->passenger}}" required/>
                                <small class="form-text text-muted">Please fill number of passengers</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="doors">Doors</label>
                                <input type="number" class="form-control" id="doors" name="doors"
                                       value="{{$car->doors}}" required/>
                                <small class="form-text text-muted">Please fill number of doors</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transmission">Transmission</label>
                                <select class="form-control" id="transmission" name="transmission">
                                    <option {{ $car->transmission == 'manual' ? "selected" : "" }} value="manual">
                                        Manual
                                    </option>
                                    <option {{ $car->transmission == 'automatic' ? "selected" : "" }} value="automatic">
                                        Automatic
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="year">Year</label>
                                <input type="number" class="form-control" id="year" name="year"
                                       value="{{$car->year}}"/>
                                <small class="form-text text-muted">Please fill yaar</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="full_insurance">Full Insurance</label>
                                <input type="number" class="form-control" id="full_insurance" name="full_insurance"
                                       value="{{$car->full_insurance}}" required/>
                                <small class="form-text text-muted">Please fill price for full insuranec</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="basic_insurance">Basic Insurance</label>
                                <input type="number" class="form-control" id="basic_insurance"
                                       name="basic_insurance" value="{{$car->basic_insurance}}" required/>
                                <small class="form-text text-muted">Please fill price for basic insuranec</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="participation_damage">Participation Damage</label>
                                <input type="number" class="form-control" id="participation_damage"
                                       name="participation_damage" value="{{$car->participation_damage}}"
                                       required/>
                                <small class="form-text text-muted">Please fill Participation Damage</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="deposit">Deposit</label>
                                <input type="number" class="form-control" id="deposit" name="deposit"
                                       value="{{$car->deposit}}" required/>
                                <small class="form-text text-muted">Please fill deposit price</small>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex;justify-content: center">
                        <div class="form-group col-md-3">
                            <button id="edit-car" class="btn btn-primary btn-block col-lg-2" type="submit"
                                    data-id="{{$car->id}}">Save
                            </button>
                        </div>
                    </div>
                </form>

                <hr/>

            <form>
                <div class="container">
                    <h2 style="margin-bottom: 10px; margin-left: 10px">Prices</h2>
                    <h4 style="margin-left: 10px">Summer 15.06-15.09</h4>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="prices">Price: default</label>
                            <input
                                value="{{collect(($car->prices)->where('season', 'summer')->first())['default'] }}"
                                type="number" class="form-control summer" id="default" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="default">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="prices">Price: 1-3 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'summer')->first())['1-3'] }}"
                                   type="number" class="form-control summer" id="1-3" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="1-3">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="prices">Price: 4-7 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'summer')->first())['4-7'] }}"
                                   type="number" class="form-control summer" id="4-7" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="4-7">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="prices">Price: 8-15 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'summer')->first())['8-15'] }}"
                                   type="number" class="form-control summer" id="8-15" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="8-15">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="prices">Price: 16-22 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'summer')->first())['16-22'] }}"
                                   type="number" class="form-control summer" id="16-22" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="16-22">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="prices">Price: 23+days</label>
                            <input value="{{collect(($car->prices)->where('season', 'summer')->first())['23+'] }}"
                                   type="number" class="form-control summer" id="23+" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'summer')->first())['id']}}"
                                    data-price-name="23+">
                                Save
                            </button>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <h4 style="margin-left: 10px;">Autumn 15.09.-15.11.</h4>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: default</label>
                            <input
                                value="{{collect(($car->prices)->where('season', 'autumn')->first())['default'] }}"
                                type="number" class="form-control autumn" id="default" name="default" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                    data-price-name="default">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 1-3 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['1-3'] }}"
                                   type="number" class="form-control autumn" id="1-3" name="1-3" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                    data-price-name="1-3">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 4-7 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['4-7'] }}"
                                   type="number" class="form-control autumn" id="4-7" name="4-7" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                    data-price-name="4-7">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 8-15 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['8-15'] }}"
                                   type="number" class="form-control autumn" id="8-15" name="8-15" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                    data-price-name="8-15">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: 16-22 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['16-22'] }}"
                                   type="number" class="form-control autumn" id="16-22" name="16-22" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                       data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                       data-price-name="16-22">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 23+ days</label>
                            <input value="{{collect(($car->prices)->where('season', 'autumn')->first())['23+'] }}"
                                   type="number" class="form-control autumn" id="23+" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'autumn')->first())['id']}}"
                                    data-price-name="23+">
                                Save
                            </button>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <h4 style="margin-left: 10px;">Winter 15.11.-15.03</h4>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: default</label>
                            <input
                                value="{{collect(($car->prices)->where('season', 'winter')->first())['default'] }}"
                                type="number" class="form-control winter" id="default" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'winter')->first())['id']}}"
                                    data-price-name="default">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 1-3 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'winter')->first())['1-3'] }}"
                                   type="number" class="form-control winter" id="1-3" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'winter')->first())['id']}}"
                                    data-price-name="1-3">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 4-7 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'winter')->first())['4-7'] }}"
                                   type="number" class="form-control winter" id="4-7" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'winter')->first())['id']}}"
                                    data-price-name="4-7">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 8-15 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'winter')->first())['8-15'] }}"
                                   type="number" class="form-control winter" id="8-15" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'winter')->first())['id']}}"
                                    data-price-name="8-15">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: 16-22 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'winter')->first())['16-22'] }}"
                                   type="number" class="form-control winter" id="16-22" name="" required/>
                            <small class="form-text text-muted">Please fill price</small>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 23+ days</label>
                            <input value="{{collect(($car->prices)->where('season', 'winter')->first())['23+'] }}"
                                   type="number" class="form-control winter" id="23+" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'winter')->first())['id']}}"
                                    data-price-name="23+">
                                Save
                            </button>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <h4 style="margin-left: 10px;">Spring 15.03.-15.06.</h4>


                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: default</label>
                            <input
                                value="{{collect(($car->prices)->where('season', 'spring')->first())['default'] }}"
                                type="number"
                                class="form-control spring" id="spring-default" name="spring-default" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="default">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 1-3 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'spring')->first())['1-3'] }}"
                                   type="number" class="form-control spring" id="1-3" name="1-3" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="1-3">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 4-7 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'spring')->first())['4-7'] }}"
                                   type="number" class="form-control spring" id="4-7" name="4-7" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="4-7">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 8-15 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'spring')->first())['8-15'] }}"
                                   type="number" class="form-control spring" id="8-15" name="8-15" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="8-15">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Price: 16-22 days</label>
                            <input value="{{collect(($car->prices)->where('season', 'spring')->first())['16-22'] }}"
                                   type="number" class="form-control spring" id="16-22" name="16-22" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="16-22">
                                Save
                            </button>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Price: 23+ days</label>
                            <input value="{{collect(($car->prices)->where('season', 'spring')->first())['23+'] }}"
                                   type="number" class="form-control spring" id="23+" name="" required/>
                            <button class="update-price btn btn-primary" style="margin-top: 5px"
                                    data-price-id="{{collect(($car->prices)->where('season', 'spring')->first())['id']}}"
                                    data-price-name="23+">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>

                <hr/>

                <div class="container">
                    @foreach($car->images as $image)
                        <div style="display: flex; flex-direction: column">
                            <div style="display: flex; margin-bottom: 20px">
                                <img style="width: 200px" src="{{ env("APP_IMAGE_PATH") }}/storage/{{$image->path}}"
                                     alt=""/>
                                <div style="margin-left: 20px">
                                    <p>Image type: {{ $image->type }}</p>
                                    <button data-image-id="{{ $image->id }}"
                                            data-car-id="{{ $car->id }}" class="delete-image btn btn-danger">Delete
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
                                    <input type="file" id="images" multiple="" data-max_length="20"
                                           class="upload__inputfile">
                                </label>

                            </div>
                            <div class="upload__img-wrap">
                            </div>

                        </div>
                        <div>
                            <button id='save-images' style='position: absolute;bottom: 0; display: none'
                                    class='btn btn-primary'>Save images
                            </button>
                        </div>
                    </div>

                </div>

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
        $('.delete-image').click(function (e) {
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
                        action: function () {
                            $.ajax({
                                processData: false,
                                type: 'DELETE',
                                url: "/images/" + image,
                                contentType: false,
                                success: function (data) {
                                    $.alert('Deleted');
                                    window.location.href = '/cars/' + car + '/edit'
                                }
                            })
                        }
                    }
                }
            });
        });

        $('#edit-car').click(function (e) {
            e.preventDefault();
            const car = $(this).data('id');
            const name = $("input[name='name']").val();
            const motor = $("input[name='motor']").val();
            const passenger = $("input[name='passenger']").val();
            const doors = $("input[name='doors']").val();
            const transmission =  $('#transmission').val();
            const year = $("input[name='year']").val();
            const full_insurance = $("input[name='full_insurance']").val();
            const basic_insurance = $("input[name='basic_insurance']").val();
            const participation_damage = $("input[name='participation_damage']").val();
            const deposit = $("input[name='deposit']").val();

            const dataString = 'name=' + name  + '&motor=' + motor  + '&passenger=' + passenger  + '&doors=' + doors
                + '&transmission=' + transmission + '&year=' + year + '&full_insurance=' + full_insurance + '&basic_insurance=' + basic_insurance
                + '&participation_damage=' + participation_damage  + '&deposit=' + deposit;

            $.ajax({
                processData: false,
                type: 'PUT',
                url: "{{ route('cars.update', $car) }}",
                data: dataString,
                enctype: 'multipart/form-data',
                success: function (data) {
                    $.alert({
                        title: '',
                        content: 'Car is updated.',
                        autoClose: 'close|5000',
                        type: '',
                        buttons: {
                            close: function () {
                            }
                        }
                    });
                }
            })
        });

        $('#save-images').click(function (e) {
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
                        formData.append('images[' + i + '][type]', 'main');
                    } else {
                        formData.append('images[' + i + '][type]', 'details');
                    }
                    formData.append('images[' + i + '][name]', 'image' + i + '.jpg')
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

        $('.update-price').click(function (e) {
            e.preventDefault();
            const price_id = $(this).data('price-id');
            console.log($(this).data('price-name'))
            const dataString = encodeURIComponent($(this).data('price-name')) + '=' + parseInt($(this).siblings("input").val())
            $.ajax({
                processData: false,
                type: 'PUT',
                url: "/price/" + price_id,
                data: dataString,
                success: function (data) {
                    $.alert({
                        title: '',
                        content: 'success',
                        autoClose: 'close|5000',
                        type: '',
                        buttons: {
                            close: function () {
                               // window.location.reload();
                            }
                        }
                    });
                }
            })
        })
    </script>
@endsection
