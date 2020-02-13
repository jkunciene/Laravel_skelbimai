@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_2.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Update skelbima</h1>
                            <p class="mb-0">koreguokime</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md mb-5" data-aos="fade">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    <form method="post" action="/ad_update2/{{$ad->id}}" enctype="multipart/form-data"  class="p-5 bg-white">
                        @csrf
                        <input name="id" type="hidden" value="{{$ad->id}}">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="kategorijos" >Category ID</label>

                                        <input type="text" name="kategorijos" value="{{$ad->catid}}"   >
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="pavadinimas">Title</label>
                                <input type="text" id="pavadinimas" name="pavadinimas" class="form-control" value="{{$ad->title}}">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="aprasymas">Description</label>
                                <textarea name="aprasymas" id="aprasymas" cols="30" rows="7" class="form-control">{{$ad->description}} </textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="nuotraukos">IMG</label>
                                <input type="file" name="nuotraukos" id="nuotraukos" class="form-control">
                                <div><img src="{{asset('storage/'.$ad->img)}}" alt="Image" class="img-fluid rounded"></div>
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="kaina">Price</label>
                                <input type="text" id="kaina" name="kaina" value="{{$ad->price}}" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" value="{{$ad->email}}" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="telefonoNr">Phone</label>
                                <input type="text" id="telefonoNr" value="{{$ad->phone}}" name="tel" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="vieta">Location</label>
                                <input type="text" id="vieta" name="vieta" value="{{$ad->location}}" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Update ad" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </div>
    </div>




@stop