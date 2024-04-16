<x-layout>
    <div class="mt-5" >
    <div class="container">
        <div class="row" >
            <h4>Register</h4>
            <form action={{url('/register')}} method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name=name id="name" >
                    @error('name')
                  <div span class="text-danger">{{$message}}</span>
                  @enderror
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name=email id="exampleInputEmail1">
                  @error('email')
                  <div span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name=password id="exampleInputPassword1">
                  @error('password')
                  <div span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <button type="submit" name="form-control" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    </div>
</x-layout>