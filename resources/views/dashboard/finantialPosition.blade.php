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
                                            <th>   </th>
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
                                    </table>
                                            <p>INGRESOS</p>
                                            <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">+ </a>

                                             </th>
                                            <th> Loans</th>
                                            <th>12</th>
                                            <th>23.4 </th>
                                            <th>13</th>
                                            <th>44</th>
                                            <th>7</th>
                                            <th>19</th>
                                            <th>20</th>
                                            <th>20</th>
                                            <th>9</th>
                                            <th>23</th>
                                            <th>45</th>
                                            <th>5</th>
                                            <th>8</th>
                                        </thead>
                                    
                                        </table>
                                           
                                        <div class="row">
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                    <div class="card card-body">
                                                        <table class="table table-bordered">
                                                            <thead >
                                                                <th>Car Leasing </th>
                                                                <th>12</th>
                                                                <th>23.4 </th>
                                                                <th>13</th>
                                                                <th>44</th>
                                                                <th>7</th>
                                                                <th>19</th>
                                                                <th>20</th>
                                                                <th>20</th>
                                                                <th>9</th>
                                                                <th>23</th>
                                                                <th>45</th>
                                                                <th>5</th>
                                                                <th>8</th>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <p>GASTOS</p>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>  
                                                        <a  data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">+ </a>

                                                         </th>
                                                        <th>Insurance</th>
                                                        <th>12</th>
                                                        <th>23.4 </th>
                                                        <th>13</th>
                                                        <th>44</th>
                                                        <th>7</th>
                                                        <th>19</th>
                                                        <th>20</th>
                                                        <th>20</th>
                                                        <th>9</th>
                                                        <th>23</th>
                                                        <th>45</th>
                                                        <th>5</th>
                                                        <th>8</th>
                                                    </thead>
                                                    
                                                </table>
                                            <div class="col">
                                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                  <div class="card card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                  </div>
                                                </div>
                                            </div>


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
