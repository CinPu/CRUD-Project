@extends("layout.master")
@section("title","Create Gallery")
@section("content")
    <div class="container">
        <div class="col-4 offset-4 my-5">
            <h1 class="text-dark text-center">Edit Product</h1>
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$edit_data->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" >
                        {{$edit_data->description}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$edit_data->price}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Select Photo</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>

                <button type="submit" class="btn btn-primary float-right">Update</button>
                <a href="{{url("/show")}}"><button class="btn btn-outline-warning float-right mr-3">Cancel</button></a>
            </form>
        </div>
    </div>
@endsection
