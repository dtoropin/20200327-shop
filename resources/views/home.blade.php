@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My orders</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>id product list</th>
                                <th>total</th>
                                <th>date</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr
                                        @if($order->id % 2 !== 0)
                                        style="background: #f2f2f2"
                                        @endif
                                >
                                    <td>{{ $order->id }}</td>
                                    <td>
                                        {{ $order->goods }}
                                    </td>
                                    <td>{{ $order->total }} руб.</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
