<!DOCTYPE html>
<hhtml>
    <head>
        <title>Edit call</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <h4>Edit call</h4>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Type of call</th>
                        <th scope="col">Date</th>
                        <th scope="col">External call score</th>
                        <th scope="col">User</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$call->client->name}}</td>
                        <td>{{$call->duration}}</td>
                        <td>{{$call->type_call}}</td>
                        <td>{{$call->date}}</td>
                        <td>{{$call->external_call_score}}</td>
                        <td>{{$call->client->user->name}}</td>
                        <td class="row">
                            <button class="col brn btn-danger">
                                <a href="{{url('create_call')}}" class="text-white">Delete</a>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</hhtml>

