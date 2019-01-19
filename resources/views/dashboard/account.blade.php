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

                                        <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-6">
                                            <a href="{{ route('account-add') }}">
                                                <div class="font-icon-detail">

                                                    <i class="nc-icon nc-simple-add"></i>
                                                    <small> &nbsp &nbsp AÑADIR CUENTA</small>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-6">
                                            <a href="#" data-toggle="modal" data-target="#myModal1" href="#pablo">
                                                <div class="font-icon-detail">
                                                    <i class="nc-icon nc-simple-delete"></i>
                                                    <span>     &nbsp &nbsp ELIMINAR CUENTA</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                             <!-- Mini Modal -->
                    <div class="modal fade modal-md modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <div class="text-center">
                                       <p>¿Qué cuenta deseas eliminar?</p>
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                <div class="card card-plain table-plain-bg">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>BANCO</th>

                                            
                                            <th>ESTADO</th>
                                            <th>DETALLES</th>
                                        </thead>
                                        <tbody>
                                            @isset($accounts)
                                                @foreach ($accounts as $account)
                                                    <form method="post" action="{{route('account-delete', ['id' => $account->id])}}">
                                                        {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    
                                                
                                                    <tr>
                                                        <td>{{$account->bank}}</td>
                                                        <td></td>
                                                        <td><Button type = "submit" class="btn btn-primary" >Seleccionar</Button>  </td>
                                                    </tr>
                                                    </form>
                                                @endforeach
                                            @endisset

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link btn-simple"></button>
                                    <button type="button" class="btn btn-link btn-simple right" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  End Modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>BANCO</th>
                                            <th>FECHA DE PRIMERA CONEXIÓN </th>
                                            <th>FECHA DE ACTUALIZACIÓN</th>
                                            <th>ESTADO</th>
                                            <th>DETALLES</th>
                                        </thead>
                                        <tbody>
                                            @isset($accounts)
                                                @foreach ($accounts as $account)

                                                    <tr>
                                                        <td>{{$account->bank}}</td>
                                                        <td>{{$account->first_movement}}</td>
                                                        <td>{{$account->last_movement}}</td>
                                                        <td></td>
                                                        <td><a href="{{route('account-details', ['id' => $account->id])}}">Ver</a></td>
                                                    </tr>
                                                @endforeach
                                            @endisset

                                        </tbody>
                                    </table>
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
