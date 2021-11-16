<!DOCTYPE html>
<html>
    <head>
        <title>Valid calls</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>

    <div class="container">
    <div class="row">
        <div class="col"><h5>Valid calls</h5></div>
        <div class="col"><button type="button" class="btn btn-primary"><a href="{{url('create_call')}}" class="text-white"> Create Call </a></button></div>
    </div>
      <div class="row ">
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
                @foreach($calls as $call)
                    <tr>
                        <td>{{$call->client->name}}</td>
                        <td>{{$call->duration}}</td>
                        <td>{{$call->type_call}}</td>
                        <td>{{$call->date}}</td>
                        <td>{{$call->external_call_score}}</td>
                        <td>{{$call->client->user->name}}</td>
                        <td class="row">
                            <form action="{{url('destroy',$call->id)}}" method="POST">
                            <button class="col brn btn-primary">
                                <a href="{{url('edit',$call)}}" class="text-white"> Edit</a>
                            </button>
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="col brn btn-danger">
                               Delete
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
          {{$calls->links()}}
      </div>
</div>
    </body>
</html>
