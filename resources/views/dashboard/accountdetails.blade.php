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
                            <div class="card card-plain table-plain-bg">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>BANCO</th>
                                            <th>FECHA DE PRIMERA CONEXIÓN </th>
                                            
                                        </thead>
                                        <tbody>
                                            @isset($account)
                                                
                                                    <tr>
                                                   
                                                        <td> BANCO</td>
                                                        <td>{{$account[0]->currency}}</td>
                                         
                                                    </tr>                                                
                                                    <tr>
                                                   
                                                        <td>FECHA DE PRIMERA CONEXIÓN </td>
                                                        <td>{{$account[0]->first_movement}}</td>
                                         
                                                    </tr>                                                
                                                    <tr>
                                                   
                                                        <td> FECHA DE ACTUALIZACIÓN</td>
                                                        <td>{{$account[0]->last_movement}}</td>
                                         
                                                    </tr>
                                                    <tr>
                                                   
                                                        <td> Status</td>
                                                        <td>{{$account[0]->last_movement}}</td>
                                         
                                                    </tr>
                                            @endisset

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                            </a>
                                        </div>
                                        <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-6">
                                            <div class="font-icon-detail">
                                                <i class="nc-icon nc-simple-delete"></i>
                                                <span> &nbsp &nbsp VOLVER</span>
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

