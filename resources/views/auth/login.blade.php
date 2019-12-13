@extends("layout.master")
@section("title","Login Form")
@section("content")

    <div class="container ">
       <div class="col-4 offset-4 my-5">
           <h1 class="text-dark text-center">Login Form</h1>
           <form method="post">
               {{csrf_field()}}
               <div class="form-group">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" id="email" name="email">
               </div>
               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" id="password" name="password">
               </div>
               <button type="submit" class="btn btn-primary float-right">Login</button>
               <button type="reset" class="btn btn-outline-warning float-right mr-3">Cancel</button>
           </form>
       </div>
    </div>

@endsection
