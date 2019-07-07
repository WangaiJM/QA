@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header d-flex">
                    <h2>{{$question->title}}</h2>
                </div>

                <div class="card-body">
                    {!! $question->body_html !!}
                </div>
                <div class="container d-flex mb-2">
                    <div>
                        <form action="questions/{{$question->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title" hidden>Title</label>
                                <input type="text" class="form-control" hidden>
                            </div>
                            <div class="form-group">
                                <label for="question" hidden>Question</label>
                                <textarea name="question" id="question" cols="30" rows="15" class="form-control" hidden></textarea>
                            </div>
                            <div class="form-group d-flex">
                                <input type="submit" value="Delete Question" class="btn btn-lg btn-danger">
                            </div>
                        </form>
                    </div>
                    <div class="ml-auto">
                        <a href="questions/{{$question->id}}/edit" class="btn btn-lg btn-primary">Edit Question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
