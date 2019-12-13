@extends("layout.master")
@section("title","Create Gallery")
@section("content")
   <div class="container">
       <div class="col-4 offset-4 my-5">
           <h1 class="text-dark text-center">Post New Product</h1>
           <form method="post" enctype="multipart/form-data">
               {{csrf_field()}}
               <div class="form-group">
                   <label for="title">Title</label>
                   <input type="text" class="form-control" id="title" name="title">
               </div>
               <div class="form-group">
                   <label for="exampleFormControlTextarea1">Description</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
               </div>
               <div class="form-group">
                   <label for="price">Price</label>
                   <input type="number" class="form-control" id="price" name="price">
               </div>
               <div class="form-group">
                   <label for="exampleFormControlFile1">Select Photo</label>
                   <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
               </div>

               <button type="submit" class="btn btn-primary float-right">Post</button>
               <button type="reset" class="btn btn-outline-warning float-right mr-3">Cancel</button>
           </form>
       </div>
   </div>
    @endsection
