@extends('layouts.dashboard')

@section('navbar')
<!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="{{route('home')}}"> CUENTAS </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    
                </div>
            </nav>
            <!-- End Navbar -->
@endsection

@section('content')
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-body all-icons">
                                    <div class="row">

                                        <div class="card card-plain table-plain-bg">
                                            <div class="card-body table-full-width table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Enero</th>
                                                        <th>Febrero </th>
                                                        <th>Marzo</th>
                                                        <th>Abril</th>
                                                        <th>Mayo</th>
                                                        <th>Junio</th>
                                                        <th>Julio</th>
                                                        <th>Agosto</th>
                                                        <th>Septiembre</th>
                                                        <th>Octubre</th>
                                                        <th>Noviembre</th>
                                                        <th>Diciembre</th>
                                                        <th>TOTAL</th>
                                                    </thead>
                                                    <!-- <tbody>
                                                        @isset($accounts)
                                                            @foreach ($accounts as $account)

                                                                <tr>
                                                                    <td>{{$account->currency}}</td>
                                                                    <td>{{$account->first_movement}}</td>
                                                                    <td>{{$account->last_movement}}</td>
                                                                    <td></td>
                                                                    <td><a href="{{route('account-details', ['id' => $account->id])}}">Ver</a></td>
                                                                </tr>
                                                            @endforeach
                                                        @endisset

                                                    </tbody> -->
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                         
                </div>
            </div>




@endsection

@section('customScript')


@endsection

<!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!




                </div>
            </div>
        </div>
    </div> -->
