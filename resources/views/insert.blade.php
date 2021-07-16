@extends('base')


@section('title')
    insert-page
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                {{-- category insertion form --}}
                <div class="card">
                    <div class="card-body">
                        @csrf
                        <form action="{{Route('insertCat')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Enter category name:</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="mb-2">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-9">
                {{-- college insertion form --}}
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('InsertCollege')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Enter C_title:</label>
                                <input type="text" name="c_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Ener contact No:</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Enter email id:</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">select category:</label>
                                <select name="category" id="" class="form-control">
                                    @foreach ($data as $cat )
                                    <option value="">
                                            {{$cat->title}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Eenter description:</label>
                                <textarea name="descr" id="" cols="30" rows="3" class="form-control" ></textarea>
                            </div>
                            <div class="mb-3">
                                <label for=""> Select logo:</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="mb-2">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
