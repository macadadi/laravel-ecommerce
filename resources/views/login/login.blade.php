@extends('../master')
@section('content')

{{-- login form --}}

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-sm-6  pt-4 m-3">
            <form action="/" method="POST">
              @csrf
                <div class="form-group row ">
                  <label for="Email" class="col-sm-2 col-form-label">Email</label>
                 
                    <input type="text" name='email'  class="form-control-plaintext pl-2" id="Email"  placeholder="Email">
                  </div>
    
                <div class="form-group row">
                  <label for="Password" class="col-sm-2 col-form-label">Password</label>
                             
                    <input type="password" class="form-control pl-2" name='password' id="Password" placeholder="Password">
    
                </div>
                    <button class="btn btn-primary w-100">submit</button>
                
              </form>
        </div>
    </div>

</div>
@endsection