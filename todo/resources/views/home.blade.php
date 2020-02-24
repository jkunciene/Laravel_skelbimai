@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="/task_store">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input name="priority" type="number" class="form-control" placeholder="priority">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input name="dueDate" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="number" name="percent" class="form-control" placeholder="percent">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Add Task" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
