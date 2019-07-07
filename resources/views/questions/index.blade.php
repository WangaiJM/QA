@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header d-flex">
                    <h2>Questions</h2>
                    <a href="question/create" class="btn btn-lg btn-primary ml-auto"> Ask a Question </a>
                </div>

                <div class="card-body">
                  @foreach($questions->all() as $question)
                    <div class="card-header">
                        <a href="question/{{$question->id}}"><h2>{{$question->title}}</h2></a>
                        <h5>Asked by: {{$question->users['name']}}</h5>
                        <p>Updated: {{$question->updated_Date}}</p>
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
