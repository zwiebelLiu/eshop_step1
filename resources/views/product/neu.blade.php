@extends('app')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="my-4">Product Neu</h1>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>

                @endif


                <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST" class="form">

                    @csrf
                    Name:    <input type="text" name="name"   value="{{old('name')}}" class="form-control" />
                    Price:   <input type="text" name="price"  value="{{old('price')}}" class="form-control" />
                    description:   <textarea type="text" name="description"  value="" class="form-control">{{old('description')}}</textarea>
                    Category:
                            <select name="cate_id" class="form-control">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}" @if($cate->id == old('cate_id'))  selected  @endif>{{$cate->name}} </option>
                                @endforeach
                            </select>
                    <br> <br/>
                   Photo:   <input type="file" name="photo" />

                    <br> <br/>

                    <input type="submit" class="btn-primary" value="Update"/>
                    <br> <br/>
                    </form>
            </div><!-- /.col-lg-12-->

        </div><!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

