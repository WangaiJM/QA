@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Questions</h2></div>

                <div class="card-body">
                  @foreach($questions->all() as $question)
                    <div class="card-header">
                        <h2>{{$question->title}}</h2>
                    </div>
                    <div class="card-body">
                        {{str_limit($question->body, 250)}}
                    </div>
                  @endforeach
                  
                </div>
                <div class="d-flex justify-content-center">
                        {{$questions->links()}}
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
