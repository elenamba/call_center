<!DOCTYPE html>
<hhtml>
    <head>
        <title>Valid calls</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h4 class="text-center">Create Call</h4>
            <div class="row">
                <div class="offset-3 col-6 offset-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="" method="POST" class="row">
                        @csrf
                        <div class="row p-3">
                            <lable for="duration" class="col">Duration:</lable>
                            <div class="col">
                                <input type="text" id="duration" name="duration" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <lable for="type_call" class="col"> Type of Call:</lable>
                            <div class="col">
                                <input type="text" id="type_call" name="type_call" class="form-control">
                            </div>
                        </div>
                        <div class="row p-3">
                            <lable for="date" class="col">Date:</lable>
                            <div class="col">
                                <input type="date" id="date"  name="date" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <lable for="external_call_score "  class="col">External Call Score:</lable>
                            <div class="col">
                                <input type="text"  class="form-control" name="external_call_score" id="external_call_score">
                            </div>
                        </div>
                        <div class="row p-3">
                            <lable for="client" class="col">Client:</lable>
                            <div class="col">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row p-3">
                            <lable for="client" class="col">Client type:</lable>
                            <div class="col">
                                <input type="text" name="client_type" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit"  class=" btn-primary form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</hhtml>

