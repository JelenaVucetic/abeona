@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="table-responsive-md">
            <table class="table">
                <div style="margin: 20px 0px;display: flex;justify-content: space-between;align-items: baseline;">
                    <h1>List of cars</h1>
                    <a href="{{ route('cars.create') }}" style="padding: 15px 30px;background-color: #f8981d;border-color: #f8981d;color: #ffffff;">Add new car</a>
                </div>

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Motor</th>
                    <th scope="col">Doors</th>
                    <th scope="col">Passenger</th>
                    <th scope="col">Transmission</th>
                    <th scope="col">Basic insurance</th>
                    <th scope="col">Damage participation</th>
                    <th scope="col">Deposit</th>
                    <th scope="col">Full insurance</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cars as $car )
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$car->name}}</td>
                        <td>{{$car->motor}}</td>
                        <td>{{$car->doors}}</td>
                        <td>{{$car->passenger}}</td>
                        <td>{{$car->transmission}}</td>
                        <td>{{$car->basic_insurance}}</td>
                        <td>{{$car->participation_damage}}</td>
                        <td>{{$car->deposit}}</td>
                        <td>{{$car->full_insurance}}</td>
                        <td>
                            @foreach ($car->images as $image)
                                <img style="width: 50px" src="{{$image->path}}" alt="">
                            @endforeach
                        </td>
                        <td>
                            <button class="car-edit btn-info" data-id="{{$car->id}}">Edit</button>
                        </td>
                        <td>
                            <button class="car-delete btn-danger" data-id="{{$car->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
<script>
    $('.car-edit').click(function(e) {
        e.preventDefault();
        const car =  $(this).data('id');

        $.ajax({
            type:"GET",
            url: "{{ route('cars.edit', $car) }}",
            beforeSend: function(){
            },
            success:function () {
                window.location.href = "{{ route('cars.edit', $car) }}"
            },
            error:function () {
                $.alert({
                    title: '',
                    content: 'Something went wrong. Please try again later.',
                    autoClose: 'close|5000',
                    type: 'red',
                    buttons: {
                        close: function () {
                        }
                    }
                });
            }
        });
    })

    $('.car-delete').click(function(e) {
        e.preventDefault();

        const car =  $(this).data('id');

        $.confirm({
            title: 'Are you sure?',
            content: 'This car will be deleted',
            buttons: {
                cancel: function () {
                    $.alert('Canceled!');
                },
                delete: {
                    text: 'Delete',
                    btnClass: 'btn-red',
                    action: function(){
                        $.ajax({
                            type:"DELETE",
                            url:"/cars/" + car,
                            beforeSend: function(){
                            },
                            success:function () {
                                $.alert('Deleted');
                                window.location.href = '{{ route('cars.index') }}'
                            },
                            error:function () {
                                $.alert({
                                    title: '',
                                    content: 'Something went wrong. Please try again later.',
                                    autoClose: 'close|5000',
                                    type: 'red',
                                    buttons: {
                                        close: function () {
                                        }
                                    }
                                });
                            }
                        });
                    }
                }
            }
        });


    })
</script>
@endsection
