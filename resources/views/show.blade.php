<!DOCTYPE html>
<hhtml>
    <head>
        <title>Valid calls</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Client</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Type of call</th>
                        <th scope="col">Date</th>
                        <th scope="col">Externa call score</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($call as $calls)
                        <tr>
                            <td>{{$calls->clients->name}}</td>
                            <td>{{$calls->duration}}</td>
                            <td>{{$calls->type_call}}</td>
                            <td>{{$calls->date}}</td>
                            <td>{{$calls->external_call_score}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</hhtml>
