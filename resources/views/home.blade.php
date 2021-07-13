@extends('base')


@section('title')
    homepage
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action active">Categories</a>
                    @foreach ($data as $cat)
                         <a href="" class="list-group-item list-group-item-action">{{$cat->title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-9">
               <div class="row">
                   <div class="col-3">
                    <div class="card">
                        <img src="logo here" alt="">
                        <div class="card-body">
                            <h2>college name</h2>
                            <p class="small">contact</p>
                        </div>
                    </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
