@extends('app')
@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h1 class="my-4">Products</h1>
                <p>Products</p>

                <a href="{{route('product.create')}}" class="btn btn-primary"> Neu</a>
                <table class="table">
                    <tr>
                        <th>name</th>
                        <th>Prics</th>
                        <th></th>
                    </tr>
                    @foreach($product as $prod)
                        <tr>
                            <td>{{$prod->name}}</td>
                            <td>{{$prod->price}}</td>
                            <td><a  class="btn btn-primary" href="{{route('product.edit',$prod->id)}}">Edit</a>
                               <form action="{{route('product.destroy',$prod->id)}}" method="POST" style="display: inline;">
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

