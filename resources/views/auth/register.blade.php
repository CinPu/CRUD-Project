@extends("layout.master")
@section("title","Register Form")
@section("content")

    <div class="container">
        <div class="col-4 offset-4 my-5">
            <h1 class="text-dark text-center my-3">Register Form</h1>
            <form method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" id="name"name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
                <button type="submit" class="btn btn-outline-warning float-right mr-3">Cancel</button>
            </form>
        </div>
    </div>
    @endsection
