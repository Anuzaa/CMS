@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Clients</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/clients/create" class="btn btn-primary">Add Clients</a>
                    <br>
                    <br>
                    @if(count($clients)>0)
                    <table class = "table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Nationality</th>
                            <th>DOB</th>
                            <th>Education Background</th>
                            <th></th>
                            <th><th>
                        </tr>
                       
                        @foreach($clients as $client)
                        <tr>
                            <td><a href="/clients/{{$client->id}}">{{$client->name}}</a></td>
                        <td>{{$client->gender}}</td>
                        <td>{{$client->contact_no}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->address}}</td>
                        <td>{{$client->nationality}}</td>
                        <td>{{$client->birth_date}}</td>
                        <td>{{$client->education}}</td>
                        {{-- @if(!Auth::guest())
                                    @if(Auth::user()->id == $employee->user_id) --}}
                            <td><a href="/clients/{{$client->id}}/edit" class="btn btn-primary">Edit</a></td>
                             <td>
                                    {!! Form::open(['action' => ['ClientsController@destroy', $client->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form ::submit("Delete",['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                            </td>

                        </tr>
                        @endforeach
                        
                    </table>
                    @else
                    <p>No clients</p>
                @endif
                </div>
            </div>
        </div>
    </div>
    {{$clients->links("pagination::bootstrap-4")}}
</div>
@endsection

