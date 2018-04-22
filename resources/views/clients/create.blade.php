@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <a href="/clients" class="btn btn-primary">Go Back</a>
            <div class="card">
                <div class="card-header">Clients</div>
                <div class="card-body">
                        @include('inc.messages')
{!! Form::open(['action'=>'ClientsController@store','method'=>'POST']) !!}
<div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
       
    </div>
    <div class="form-group">
            {{Form::label('gender','Gender')}}
            {{Form::text('gender','',['class'=>'form-control','placeholder'=>'Enter Gender'])}}
           
        </div>
        <div class="form-group">
            {{Form::label('contact_no','Contact No')}}
            {{Form::text('contact_no','',['class'=>'form-control','placeholder'=>'Enter ContactNo'])}}
           
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'abc@example.com'])}}
           
        </div>
        <div class="form-group">
            {{Form::label('address','Address')}}
            {{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter address'])}}
          
        </div>
        <div class="form-group">
            {{Form::label('nationality','Nationality')}}
            {{Form::text('nationality','',['class'=>'form-control','placeholder'=>'Enter nationality'])}}
            
        </div>
        <div class="form-group">
            {{Form::label('birth_date','Date of Birth')}}
            {{Form::text('birth_date','',['class'=>'form-control','placeholder'=>' YY-MM-DD'])}}
            
        </div>
        <div class="form-group">
            {{Form::label('education','Education')}}
            {{Form::text('education','',['class'=>'form-control','placeholder'=>'Enter education'])}}
           
        </div>
        {{Form ::submit("Submit",['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection