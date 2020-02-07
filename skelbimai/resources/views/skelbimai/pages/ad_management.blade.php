@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Skelbimu valdymas</h1>
                            <p class="mb-0">skelbimu sarasas</p>
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
                    <div class="row form-group">
                        <div class="col-md-12">
                            <a href="/ad_form" class="btn btn-primary py-2 px-4 text-white">Ideti nauja
                                skelbima</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Skelbimo pavadinimas</th>
                            <th scope="col">Aprasymas</th>
                            <th scope="col">Kaina</th>
                            <th scope="col">Vieta</th>
                            <th scope="col">Koreguoti</th>
                            <th scope="col">Trinti</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($ads as $ad)
                                <td>{{$ad->title}}</td>
                            <td>{{$ad->description}}</td>
                            <td>{{$ad->price}}</td>
                            <td>{{$ad->location}}</td>
                                <th><a href="/ad_update/{{$ad->id}}" class="btn btn-danger">Koreguoti</a></th>
                                <th><a href="/ad_delete/{{$ad->id}}" class="btn btn-danger">Salinti</a></th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




@stop