@extends('layouts.dashboard')

@section('navbar')
<!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="{{route('home')}}"> PERFIL </a>
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
                    @if(session('message'))<div  class="alert alert-info" > {{ session('message') }}</div>
                    @endif
<!-- start of model for deleting -->

                    <div class="modal center fade modal-md modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <div class="text-center">
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                        <form method="post" action="{{route('update-password') }}">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>¿Cuál es tu contraseña antigua?:</label>
                                                    <input type="password" name="old_password" class="form-control"  placeholder="" value="">
                                                </div>
                                            </div>

                                        </div>                                       
                                        <div class="row">
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>¿Cuál es tu nueva contraseña?:</label>
                                                    <input type="password" name="new_password" class="form-control"  placeholder="" value="">
                                                </div>
                                            </div>

                                        </div>                                       
                                        <div class="row">
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>Repite tu contraseña nueva:</label>
                                                    <input type="password" name="confirm_password" class="form-control" placeholder="" value="">
                                                </div>
                                            </div>

                                        </div>                                 
                                </div>
                                <div class="modal-footer">                                        
                                    
                                    <button type="submit" class="btn btn-link btn-simple"> CONFIRMAR </button>
                                    </form>
                                    <button type="button" class="btn btn-link btn-simple right" data-dismiss="modal">VOLVER</button>
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
<!--  start of section DATOS PERSONALES -->
                                    <span>DATOS PERSONALES</span>
                                    <hr />
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>NOMBRE</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>APELLIDOS</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Username" value="{{$user->last_name}}">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>EMAIL</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>TELÉFONO</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="phone" value="Telephone">
                                                </div>
                                            </div>

                                        </div>

<!-- end of sectionn DATOS PERSONALES -->
                                        <div class="row"> <hr /></div>

        <!-- section for TU NEGOCIO  -->
                                            <span>TU NEGOCIO</span>
                                        <hr />


                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>NOMBRE</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="{{$user->business_name}}" value="{{$user->business_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>APELLIDOS</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Username" value="{{$user->last_name}}">
                                                </div>
                                            </div>

                                        </div>

                                    <div class="row">

                                        <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label>
                                                <small> &nbsp &nbspACTIVIDAD PRINCIPAL</small>
                                            </label>
                                            </a>
                                        </div>
                                        <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-6">
                                            
                                               
                                                    <label>
                                                        <small> &nbsp &nbsp {{$user->business_activity}}</small>
                                                    </label>
                                        </div>
                                    </div>

                                    <div class="row"> <hr /></div>
                                    <hr />
<!-- end of section TU NEGOCIO -->

                                    <div class="row">

                                        <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-6">
                                            <button class="btn btn-info btn-fill btn-wd" data-toggle="modal" data-target="#myModal1" href="#pablo">
                                                <small> &nbsp &nbspCAMBIAR PASSWORD</small>
                                            </button>
                                            </a>
                                        </div>
                                        <div class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-6">
                                            
                                               
                                                    <button class="btn btn-info btn-fill btn-wd">
                                                        <small> &nbsp &nbsp VOLVER</small>
                                                    </button>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

