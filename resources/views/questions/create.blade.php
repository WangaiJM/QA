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
                    <form action="questions" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title"> <h3>Title </h3></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="question"> <h3>Question</h3> </label>
                            <textarea name="question" id="question" cols="30" rows="15" class="form-control"></textarea>
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
