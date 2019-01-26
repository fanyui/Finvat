@extends('layouts.dashboard')

@section('navbar')
<!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="{{route('home')}}">       POSICIÓN FINANCIERA </a>
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
        <div class="row pull-right">
            <a class="btn btn-primary pull-right">2019</a>  
            <span> &nbsp</span>        
            <a class="btn btn-primary pull-right" >2018 </a>

            
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="">

                    <div class="">
                        <div class="row">

                            <div class=" table-plain-bg">
                                <div class=" table-responsive">
                                    <table class="table loans ">

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
                                        <tbody>
                                                                    <tr> <td>INGRESOS</td> </tr>
                                            <tr>
                                                <td><a id="addrowLoan" class="" >+ </a></td>
                                                <td> other income</td>
                                                <td>12</td>
                                                <td>23.4 </td>
                                                <td>13</td>
                                                <td>44</td>
                                                <td>7</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>20</td>
                                                <td>9</td>
                                                <td>23</td>
                                                <td>45</td>
                                                <td>5</td>
                                                <td>8</td>
                                            </tr>                                            
                                            <tr>
                                                <td><a id="addrowLoan" class="" role="button" >+ </a></td>
                                                <td> Loans</td>
                                                <td>12</td>
                                                <td>23.4 </td>
                                                <td>13</td>
                                                <td>44</td>
                                                <td>7</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>20</td>
                                                <td>9</td>
                                                <td>23</td>
                                                <td>45</td>
                                                <td>5</td>
                                                <td>8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                            <p>GASTOS</p>
                                            <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">+ </a>

                                             </th>
                                            <th> Insurance</th>
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
                                                    <div ">
                                                        <table class="table  table-bordered ">
                                                            <thead >
                                                                <th> &nbsp</th>
                                                                <th>Leasing</th>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             
    </div>
</div>


<script type="text/javascript">
    
    $(document).ready(function () {

    $("#addrowLoan").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>'  + '</td>';
        cols += '<td>'  +'Leasing'+ '</td>';

        cols += '<td>' + 11 + '</td>';
        cols += '<td>' + 34 + '</td>';
        cols += '<td>' + 2 + '</td>';
        cols += '<td>' + 12 + '</td>';
        cols += '<td>' + 3 + '</td>';
        cols += '<td>' + 19+ '</td>';
        cols += '<td>' + 54 + '</td>';
        cols += '<td>' + 98+ '</td>';
        cols += '<td>' + 22+ '</td>';
        cols += '<td>' + 30 + '</td>';
        cols += '<td>' + 30 + '</td>';
        cols += '<td>' + 30 + '</td>';
        cols += '<td>' + 30 + '</td>';
        newRow.append(cols);
        $("table.loans").append(newRow);
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>


@endsection

@section('customScript')


@endsection


