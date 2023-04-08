@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="table-responsive-md">
            <table class="table" style="min-height: 450px">
            <caption>List of reservations</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Car</th>
                <th scope="col">Price</th>
                <th scope="col">Pick Up</th>
                <th scope="col">Drop Off</th>
                <th scope="col">Approve</th>
                <th scope="col">Deny</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>Otto</td>
                <td>Mark</td>
                <td>
                    <button>Approve</button>
                </td>
                <td>
                    <button>Deny</button>
                </td>
            </tr>

            </tbody>
        </table>
        </div>
    </div>
@endsection
