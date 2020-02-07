@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Kategorija</h1>
                            <p class="mb-0">idedu kategorija</p>
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
                            <a href="/category_form" class="btn btn-primary py-2 px-4 text-white">Ideti nauja
                                kategorija</a>
                        </div>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Category name</th>
                            <th scope="col">Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($categories as $category)
                                <td>{{$category->name}}</td>
                                <th><a href="/category_delete/{{$category->id}}" class="btn btn-danger">Salinti</a></th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




@stop