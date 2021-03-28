@extends('app')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="my-4">Categorys</h1>
                <p>Categorys</p>

                <a href="{{route('category.create')}}" class="btn btn-primary"> Neu</a>
                <table class="table">
                    <tr>
                        <th>name</th>
                        <th></th>
                    </tr>
                    @foreach($categories as $cate)
                        <tr>
                            <td>{{$cate->name}}</td>
                            <td><a  class="btn btn-primary" href="{{route('category.edit',$cate->id)}}">Edit</a>
                               <form action="{{route('category.destroy',$cate->id)}}" method="POST" style="display: inline;">
                                   @method('DELETE')
                                   <input class="btn btn-danger" type="submit" value="Delete" name="delete" onclick="return confirm('are u sure?')">
                                   @csrf
                               </form>

                            </td>
                        </tr>
                    @endforeach
                </table>


            </div><!-- /.col-lg-12-->

        </div><!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

