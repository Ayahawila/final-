@extends('layouts.app')

@section('content')

@if( Auth::user()->admin !='true')
{{'you are not admin'}}

@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->admin }}

                    {{ __('hi admin! You are logged in!') }}

                </div>
                <div class="panel-body">
                    <table class="table table-striped product-table">
                        <thead>
                        <th>Name</th>
                        <th>price</th>
                        {{-- <th>Products</th> --}}
                        <th>Image</th>
                        <th>Delete button</th>
                        <th>Edit button</th>
                            <th>&nbsp;</th>
                        </tr></thead>
                        <tbody>
                            @foreach ( $products as $product)
                            <tr>
                                <td class="table-text"><div>{{$product->name}}</div></td>
                                <td class="table-text"><div>{{'$'.$product->price}}</div></td>

                                <td>
                                    <img src="{{url('images/'.$product->image)}}" width="70" height="70">
                                </td>

                                <!-- product Delete Button -->
                                <td>
                                    <form action="{{url('delete/'.$product->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{url('edit/'.$product->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>edit
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{url('update/'.$product->id)}}" method="POST">
                                        @csrf
                                        <button style="margin-left: 10px;" type="submit" class="btn btn-info">
                                            <i class="fa fa-btn fa-info"></i>Update Name
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
