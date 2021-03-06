<x-layout>

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif    
    
        <div class="row justify-content-center align-items-center mt-5">
          <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}">
              @csrf
              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" name="name">
              </div>
  
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
  
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
  
              <div class="mb-3">
                <label for="exampleInputConfirmation" class="form-label">Conferma password</label>
                <input type="password" class="form-control" id="exampleInputConfirmatio" name="password_confirmation">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        
        

</x-layout>