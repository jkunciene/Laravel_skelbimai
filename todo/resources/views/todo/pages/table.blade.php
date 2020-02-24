
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md mb-5" data-aos="fade">
                <div class="row form-group">
                    <div class="col-md-12">
                        <a href="/task_store" class="btn btn-primary py-2 px-4 text-white">ideti nauja uzduotis</a>
                    </div>
                </div>

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Icon</th>
                        <th scope="col">Subject</th>
                        <th scope="col">priority</th>
                        <th scope="col">DueDate</th>
                        <th scope="col">Percent</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Koreguoti</th>
                        <th scope="col">Trinti</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($tasks as $task)
                            <td><i class="fas fa-clock"></i></td>
                            <td>{{$task->subject}}</td>
                            <td>{{$task->priority}}</td>
                            <td>{{$task->dueDate}}</td>
                            <td>{{$task->percent}}</td>
                            <td>{{$task->updated_at}}</td>
                            <td><a href="/task_update/{{$task->id}}" class="btn btn-danger">Koreguoti</a></td>
                            <td><a href="/task_delete/{{$task->id}}" class="btn btn-danger">Salinti</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

