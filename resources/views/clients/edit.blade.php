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
                            @include('inc.messages')
{!! Form::open(['action' => ['ClientsController@update', $client->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',$client->name,[ 'class' =>'form-control','placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
            {{Form::label('gender','Gender')}}
            {{Form::text('gender',$client->gender,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Enter gender'])}}
        </div>
        <div class="form-group">
            {{Form::label('contact_no','Contact Number')}}
            {{Form::text('contact_no',$client->contact_no,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Enter contact no'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email',$client->email,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'abc@gmail.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::text('address',$client->address,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Enter address'])}}
        </div>
        <div class="form-group">
            {{Form::label('nationality','Nationality')}}
            {{Form::text('nationality',$client->nationality,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'YY-MM-DD'])}}
        </div>
        <div class="form-group">
                {{Form::label('birth_date','Date of Birth')}}
                {{Form::text('birth_date',$client->birth_date,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Enter nationality'])}}
            </div>
        <div class="form-group">
            {{Form::label('education','Education')}}
            {{Form::text('education',$client->education,['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Enter education'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form ::submit("Submit",['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection