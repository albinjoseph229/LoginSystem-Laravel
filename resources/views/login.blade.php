<x-layout>
    <div class="mt-5" >
    <div class="container">
        <div class="row" >
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <h4>Login</h4>
            <form action={{url('/login')}} method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name=email id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name=password id="exampleInputPassword1">
                </div>
                <button type="submit" name="form-control" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    </div>
</x-layout>