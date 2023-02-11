@extends('layouts.app')

@section('content')
   <div class="container margin-top">
       <div class="card">
           <!-- Start Card Body -->
           <div class="card-body">
               <!-- Start Form -->
               <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">

                   <div class="form-group">
                       <label for="inputName">Car Name</label>
                       <input type="text" class="form-control" id="name" name="name" placeholder="Car name" required />
                       <small class="form-text text-muted">Please fill car name</small>
                   </div>

                   <div class="form-group">
                       <label for="engine">Engine</label>
                       <input type="text" class="form-control" id="engine" name="engine" placeholder="Car engine" required />
                       <small class="form-text text-muted">Please fill car engine</small>
                   </div>

                   <!-- Start Input Date , Start Time and End Time -->
                   <div class="form-row">
                       <div class="form-group col-md-4">
                           <label for="passengers">Passengers</label>
                           <input type="number" class="form-control" id="passengers" name="passengers" required />
                           <small class="form-text text-muted">Please fill number of passengers</small>
                       </div>
                       <div class="form-group col-md-4">
                           <label for="passengers">Doors</label>
                           <input type="number" class="form-control" id="doors" name="doors" required />
                           <small class="form-text text-muted">Please fill number of doors</small>
                       </div>
                       <div class="form-group col-md-4">
                           <label for="car-year">Car Year</label>
                           <input type="number" class="form-control" id="car-year" name="car-year" required />
                           <small class="form-text text-muted">Please fill year</small>
                       </div>
                   </div>

                    <hr />

                   <h1>Prices</h1>

                   <div >
                       <h3>15.06-15.09</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>
                   <div>
                       <h3>15.09.-15.11.</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>

                   </div>

                   <div>
                       <h3>15.11.-15.03</h3>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                   </div>

                   <div>
                       <h3>15.03.-15.06.</h3>

                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                       <div class="form-row">
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                           <div class="form-group col-md-4">
                               <label for="passengers">Price</label>
                               <input type="number" class="form-control" id="" name="" required />
                               <small class="form-text text-muted">Please fill price</small>
                           </div>
                       </div>
                   </div>
                   <hr />
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
