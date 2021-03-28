@extends('app')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="my-4">Category Edit</h1>
                <form action="{{route('category.update',$category->id)}}" method="POST" class="form">
                    @method('PUT')
                    @csrf
                   Name:    <input type="text" name="name"  value="{{$category->name}}" class="form-control"/>
                    <br> <br/>

                    <input type="submit" class="btn-primary" value="Update"/>
                    <br> <br/>
            </div><!-- /.col-lg-12-->

        </div><!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

