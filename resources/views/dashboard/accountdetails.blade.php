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


<!-- start of model for deleting -->

                    <div class="modal center fade modal-md modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <div class="text-center">
                                       <p>¿Estás seguro de eliminar tu cuenta?</p>
                                    </div>
                                </div>
<!--                                 <div class="modal-body text-center">
                                                                      
                                </div> -->
                                <div class="modal-footer">
                                     <form method="post" action="{{route('account-delete', ['id' => $account[0]->id])}}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        
                                    
                                    <button type="submit" class="btn btn-link btn-simple"> SI </button>
                                    </form>
                                    <button type="button" class="btn btn-link btn-simple right" data-dismiss="modal">NO</button>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- end of modal for deleting -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-body all-icons">
                                    <div class="row">

                                        <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-6">
                                            <a href="#" data-toggle="modal" data-target="#myModal1" href="#pablo">
                                            <div class="font-icon-detail">

                                                <i class="nc-icon nc-simple-delete "></i>
                                                <small> &nbsp &nbsp ELIMINAR CUENTA</small>
                                            </div>
                                            </a>
                                            </a>
                                        </div>
                                        <div class="font-icon-list col-lg-4 col-md-3 col-sm-4 col-6">
                                            <a href="{{ route('account') }}">
                                                <div class="font-icon-detail">
                                                    <i class="nc-icon nc-simple-add"></i>
                                                    <small> &nbsp &nbsp VOLVER</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

