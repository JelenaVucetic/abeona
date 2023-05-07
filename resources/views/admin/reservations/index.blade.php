@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="table-responsive-md">
            <table class="table" style="min-height: 450px">
            <h2>List of reservations</h2>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Car</th>
                <th scope="col">Car price</th>
                <th scope="col">Second Driver</th>
                <th scope="col">Unlimited Mileage</th>
                <th scope="col">Border Crossing</th>
                <th scope="col">Baby seat small</th>
                <th scope="col">Baby seat big</th>
                <th scope="col">Baby seat Booster</th>
                <th scope="col">Insurance</th>
                <th scope="col">Total Price</th>
                <th scope="col">Pick Up</th>
                <th scope="col">Drop Off</th>
                <th scope="col">Approve</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $bookings as $booking)
            <tr>
                <th scope="row">1</th>
                <td>{{ $booking->first_name }}</td>
                <td>{{ $booking->last_name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone_number }}</td>
                <td>{{ $booking->car->name }}</td>
                <td>{{ $booking->second_driver ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->unlimited_mileage ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->second_driver ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->border_crossing ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->baby_seat_small ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->baby_seat_big ? 'Yes' : 'No' }}</td>
                <td>{{ $booking->baby_seat_booster ? 'Yes' : 'No' }}</td>
                @if( $booking->basic_insurance)
                    <td>
                        Basic: includes damage responsibility up to {{ $booking->car->participation_damage }}
                            and deposit {{ $booking->car->deposit }}
                    </td>
                @endif
                @if( $booking->full_insurance)
                    <td>Full: {{ $booking->car->full_insurance  }} per day
                    </td>
                @endif

                <td>{{ $booking->basic_insurance  ? 'Yes' : 'No'}}</td>
                <td>{{ $booking->full_insurance  ? 'Yes' : 'No'}}</td>
                <td>{{ $booking->total }}</td>
                <td>{{ $booking->pick_up_location }} {{ $booking->pick_up_date }} {{ $booking->pick_up_time }}</td>
                <td>{{ $booking->pick_off_location }} {{ $booking->pick_off_date }} {{ $booking->pick_off_time }}</td>
                <td>
                    @if( $booking->confirmed)
                        <button  class="btn btn-primary disabled">Approved</button>
                    @else
                        <button data-id="{{ $booking->id }}" class="btn btn-primary approve-reservation">Approve</button>
                    @endif
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
        $('.approve-reservation').click(function(e) {
            e.preventDefault();
            const booking =  $(this).data('id');

            $.confirm({
                title: 'Are you sure?',
                content: 'This reservation will be approved',
                buttons: {
                    cancel: function () {
                        $.alert('Canceled!');
                    },
                    approve: {
                        text: 'Approve',
                        btnClass: 'btn-blue',
                        action: function(){
                            $.ajax({
                                type:"put",
                                url:"bookings/confirm/" + booking,
                                beforeSend: function(){

                                },
                                success:function () {
                                    window.location.href = '{{ route('dashboard') }}'
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
