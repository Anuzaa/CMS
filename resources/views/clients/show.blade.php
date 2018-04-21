@extends ('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    <a href="/clients" class="btn btn-primary">Go Back</a>
                    <br>
                    <br>
                <div class="card">
                    <div class="card-header">Clients</div>
                    <div class="card-body">
                            
<h1>{{$client->name}}</h1>
<div>
    {!!$client->contact_no!!}
</div>
<div>
        {!!$client->email!!}
    </div>
    <div>
            {!!$client->address!!}
    </div>
<hr>
<small>Registered at {{$client->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection