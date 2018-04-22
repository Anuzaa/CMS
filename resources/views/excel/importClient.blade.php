@extends('layouts.app')
   
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Import Data</div>
                        <div class="card-body">

     <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="file" name="client">
        <input type="submit" name="Import"></input>
     </form>
<hr>
    <a href="{{URL::to('/clients')}}" class="btn btn-primary">Back</a></button>
                 </div>
            </div>
        </div>
    </div>
</div>
 @endsection