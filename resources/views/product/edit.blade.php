@extends('app')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="my-4">Product :{{$product->name}} Edit</h1>
                <form action="{{route('product.update',$product->id)}}" enctype="multipart/form-data" method="POST" class="form">
                    @method('PUT')
                    @csrf
                    Name:    <input type="text" name="name"  value="{{$product->name}}" class="form-control"/>
                    Price:   <input type="text" name="price"  value="{{$product->price}}" class="form-control"/>
                    description:   <textarea type="text" name="description"  value="{{$product->description}}" class="form-control"></textarea>
                    Category:
                            <select name="cate_id" class="form-control">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}" @if($cate->id == old('cate_id'))  selected @endif>{{$cate->name}} </option>
                                @endforeach
                            </select>
                    <br> <br/>
                   Photo:   <input type="file" name="photo" id="photo"  />

                    <br> <br/>

                    <input type="submit" class="btn-primary" value="Update"/>
                    <br> <br/>
                    </form>
            </div><!-- /.col-lg-12-->

        </div><!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

