
    @extends("layout.master")
    @section("title","Show All Gallery")

    @section("content")
        <div class="bg">
        <div class="container-fluid" >
            <br><br><br>
            <h1 class="text-center text-dark" >All Products</h1>
            <div class="row ">
                @foreach($allData as $data)
                    <div class="col-12 col-md-3">
                        <div class="card my-5 bg-dark" style="height: 450px">
                            <img src="{{asset("/imgs/$data->image")}}" height="200" class="card-img-top"  alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-white">{{$data->title}}</h5>
                                <p class="card-text text-white">{{ Str::limit($data->description, $limit = 150, $end = '...') }}</p>

                                <div style="position: absolute;bottom: 15px;padding-left: 25%" >
                                    <a href="{{url("/edit/$data->id")}}"><i class="fa fa-edit ml-2" style="font-size: 36px;color: white"></i> </a>
                                    <a href="{{url("/delete/$data->id")}}"><i class="fa fa-trash ml-2" style="font-size: 36px;color: red"></i></a>
                                    {{--                       <span class="card-text float-right text-white " style="padding-left: 50px;">${{$data->price}}</span>>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    @endsection

<style>
    .bg{
        background-image: url(imgs/images.jpeg);
        background-size: 100% 100%;
        background-attachment: fixed;
    }
</style>

