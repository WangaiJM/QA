@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header d-flex">
                    <h2>Questions</h2>
                </div>

                <div class="card-body">
                    @include('inc.messages')
                    <form action="/questions/{{$question->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title"> <h3>Title </h3></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$question->title, old('title')}} ">
                        </div>
                        <div class="form-group">
                            <label for="question"> <h3>Question</h3> </label>
                            <textarea name="question" id="question" cols="30" rows="15" class="form-control">{{$question->question, old('question')}}</textarea>
                        </div>
                        <div class="form-group d-flex">
                            <input type="submit" value="Ask Question" class="btn btn-lg btn-primary ml-auto">
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
