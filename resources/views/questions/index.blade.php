@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                    <div class="card-header d-flex">
                        <h2>Questions</h2>
                        <a href="questions/create" class="btn btn-lg btn-primary ml-auto"> Ask a Question </a>
                    </div>

                <div class="card-body">
                @include('inc.messages')
                  @foreach($questions->all() as $question)
                    <div class="media">
                        <div class="d-flex flex-column counters">
                            <div class="vote">
                                <strong>{{$question->votes}} </strong>{{str_plural('vote', $question->votes)}}
                            </div>
                            <div class="status {{$question->status}}">
                                <strong>{{$question->answers}} </strong>{{str_plural('answer', $question->anwers)}}
                            </div>
                            <div class="views">
                                <strong>{{$question->views}} </strong>{{str_plural('view', $question->views)}}
                            </div>
                        </div>

                        <div class="media-body mt-1">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{$question->url}}"><h2>{{$question->title}}</h2></a>
                                    <h5>Asked by: {{$question->users['name']}}</h5>
                                    <p>Updated: {{$question->created_date}}</p>
                                </div>
                                <div class="card-body">
                                    {{str_limit($question->question, 250)}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
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
