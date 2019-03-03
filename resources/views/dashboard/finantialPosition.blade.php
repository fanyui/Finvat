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
            <a href="{{route('financial-position')}}?year=2019" class="btn btn-primary pull-right">2019</a>  
            <span> &nbsp</span>        
            <a href="{{route('financial-position')}}?year=2018" class="btn btn-primary pull-right" >2018 </a>

            
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
                                                                   

                                           
                                        </tbody>
                                    </table>
                                            <p>GASTOS</p>
                                            <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">+ </a>

                                             </th>
                                            <th> Insurance</th>

                                        </thead>

                                                            <tbody class="collapse multi-collapse" id="multiCollapseExample1">
                                                                 @isset($transaction)
                                            @isset($max)

                                                @for ($i = 0; $i < $max; $i++)
                                            <tr>
                                                <td>></td>
                                                <td>  </td>

                                           
                                                <td>@if(count($transaction->jan) > $i)
                                                    {{

                                                    $transaction->jan[$i]->transaction_amount
                                                    }}
                                                @else 

                                                @endif
                                                </td>
                                                
                                                <td>@if(count($transaction->feb) > $i)
                                                    {{

                                                    $transaction->feb[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->mar) > $i)
                                                    {{

                                                    $transaction->mar[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->apr) > $i)
                                                    {{

                                                    $transaction->apr[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->may) > $i)
                                                    {{

                                                    $transaction->may[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->jun) > $i)
                                                    {{

                                                    $transaction->jun[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->jul) > $i)
                                                    {{

                                                    $transaction->jul[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->aug) > $i)
                                                    {{

                                                    $transaction->aug[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->sep) > $i)
                                                    {{

                                                    $transaction->sep[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->oct) > $i)
                                                    {{

                                                    $transaction->oct[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->nov) > $i)
                                                    {{

                                                    $transaction->nov[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($transaction->dec) > $i)
                                                    {{

                                                    $transaction->dec[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>
                                                    
                                                    @php
                                                        $sum = 0;
                                                        if( array_key_exist($i,$transaction->dec)  )
                                                        $sum = $sum + $transaction->dec[$i]->transaction_amount;

                                                        if( array_key_exist(i,$transaction->dec[$i]->transaction_amount)  )
                                                        $sum = $sum + $transaction->dec[$i]->transaction_amount;

                                                    @endphp
                                                </td>

                                            </tr>

                                            @endfor
                                            @endisset
                                            @endisset 
                                                            </tbody>

                                    
                                        </table>



                                        <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseMarketing" role="button" aria-expanded="false" aria-controls="multiCollapseMarketing">+ </a>

                                             </th>
                                            <th> Marketing</th>

                                        </thead>

                                                            <tbody class="collapse multi-collapse" id="multiCollapseMarketing">
                                                                 @isset($marketingTransaction)
                                            @isset($maxMarketing)

                                                @for ($i = 0; $i < $maxMarketing; $i++)
                                            <tr>
                                                <td>></td>
                                                <td>  </td>

                                           
                                                <td>@if(count($marketingTransaction->jan) > $i)
                                                    {{

                                                    $marketingTransaction->jan[$i]->transaction_amount
                                                    }}
                                                @else 

                                                @endif
                                                </td>
                                                
                                                <td>@if(count($marketingTransaction->feb) > $i)
                                                    {{

                                                    $marketingTransaction->feb[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->mar) > $i)
                                                    {{

                                                    $marketingTransaction->mar[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->apr) > $i)
                                                    {{

                                                    $marketingTransaction->apr[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->may) > $i)
                                                    {{

                                                    $marketingTransaction->may[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->jun) > $i)
                                                    {{

                                                    $marketingTransaction->jun[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->jul) > $i)
                                                    {{

                                                    $marketingTransaction->jul[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->aug) > $i)
                                                    {{

                                                    $marketingTransaction->aug[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->sep) > $i)
                                                    {{

                                                    $marketingTransaction->sep[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->oct) > $i)
                                                    {{

                                                    $marketingTransaction->oct[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->nov) > $i)
                                                    {{

                                                    $marketingTransaction->nov[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($marketingTransaction->dec) > $i)
                                                    {{

                                                    $marketingTransaction->dec[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>
                                                     
                                                    @php
                                                        $sum = 0;
                                                        if(count($marketingTransaction->jan) > $i){
                                                         $sum += $marketingTransaction->jan[$i]->transaction_amount;
                                                        }
                                                        if(count($marketingTransaction->feb) > $i){
                                                         $sum += $marketingTransaction->feb[$i]->transaction_amount;
                                                        }
                                                        if(count($marketingTransaction->mar) > $i){
                                                         $sum += $marketingTransaction->mar[$i]->transaction_amount;
                                                        }
                                                        if(count($marketingTransaction->apr) > $i){
                                                         $sum += $marketingTransaction->apr[$i]->transaction_amount;
                                                        }
                                                        if(count($marketingTransaction->may) > $i){
                                                         $sum += $marketingTransaction->may[$i]->transaction_amount;
                                                        }
                                                        if(count($marketingTransaction->jun) > $i){
                                                         $sum += $marketingTransaction->jun[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->jul) > $i){
                                                         $sum += $marketingTransaction->jul[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->aug) > $i){
                                                         $sum += $marketingTransaction->aug[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->sep) > $i){
                                                         $sum += $marketingTransaction->sep[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->oct) > $i){
                                                         $sum += $marketingTransaction->oct[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->nov) > $i){
                                                         $sum += $marketingTransaction->nov[$i]->transaction_amount;
                                                        }

                                                        if(count($marketingTransaction->dec) > $i){
                                                         $sum += $marketingTransaction->dec[$i]->transaction_amount;
                                                        }

                                                        echo($sum)
                                                    @endphp
                                                </td>

                                            </tr>

                                            @endfor
                                            @endisset
                                            @endisset 
                                                            </tbody>

                                    
                                        </table>

<!-- the beginning of the Equipamiento equipamiento  -->
                                        <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseEquipamiento" role="button" aria-expanded="false" aria-controls="multiCollapseEquipamiento">+ </a>
                                                &nbsp
                                             </th>
                                            <th>Equipamiento</th>

                                        </thead>

                                                            <tbody class="collapse multi-collapse" id="multiCollapseEquipamiento">
                                                                 @isset($equipamientoTransaction)
                                            @isset($maxEquipamiento)

                                                @for ($i = 0; $i < $maxEquipamiento; $i++)
                                            <tr>
                                                <td>-</td>
                                                <td>  </td>

                                           
                                                <td>@if(count($equipamientoTransaction->jan) > $i)
                                                    {{

                                                    $equipamientoTransaction->jan[$i]->transaction_amount
                                                    }}
                                                @else 

                                                @endif
                                                </td>
                                                
                                                <td>@if(count($equipamientoTransaction->feb) > $i)
                                                    {{

                                                    $equipamientoTransaction->feb[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->mar) > $i)
                                                    {{

                                                    $equipamientoTransaction->mar[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->apr) > $i)
                                                    {{

                                                    $equipamientoTransaction->apr[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->may) > $i)
                                                    {{

                                                    $equipamientoTransaction->may[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->jun) > $i)
                                                    {{

                                                    $equipamientoTransaction->jun[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->jul) > $i)
                                                    {{

                                                    $equipamientoTransaction->jul[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->aug) > $i)
                                                    {{

                                                    $equipamientoTransaction->aug[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->sep) > $i)
                                                    {{

                                                    $equipamientoTransaction->sep[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->oct) > $i)
                                                    {{

                                                    $equipamientoTransaction->oct[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->nov) > $i)
                                                    {{

                                                    $equipamientoTransaction->nov[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($equipamientoTransaction->dec) > $i)
                                                    {{

                                                    $equipamientoTransaction->dec[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>                                                     
                                                    @php
                                                        $sum = 0;
                                                        if(count($equipamientoTransaction->jan) > $i){
                                                         $sum += $equipamientoTransaction->jan[$i]->transaction_amount;
                                                        }
                                                        if(count($equipamientoTransaction->feb) > $i){
                                                         $sum += $equipamientoTransaction->feb[$i]->transaction_amount;
                                                        }
                                                        if(count($equipamientoTransaction->mar) > $i){
                                                         $sum += $equipamientoTransaction->mar[$i]->transaction_amount;
                                                        }
                                                        if(count($equipamientoTransaction->apr) > $i){
                                                         $sum += $equipamientoTransaction->apr[$i]->transaction_amount;
                                                        }
                                                        if(count($equipamientoTransaction->may) > $i){
                                                         $sum += $equipamientoTransaction->may[$i]->transaction_amount;
                                                        }
                                                        if(count($equipamientoTransaction->jun) > $i){
                                                         $sum += $equipamientoTransaction->jun[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->jul) > $i){
                                                         $sum += $equipamientoTransaction->jul[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->aug) > $i){
                                                         $sum += $equipamientoTransaction->aug[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->sep) > $i){
                                                         $sum += $equipamientoTransaction->sep[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->oct) > $i){
                                                         $sum += $equipamientoTransaction->oct[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->nov) > $i){
                                                         $sum += $equipamientoTransaction->nov[$i]->transaction_amount;
                                                        }

                                                        if(count($equipamientoTransaction->dec) > $i){
                                                         $sum += $equipamientoTransaction->dec[$i]->transaction_amount;
                                                        }

                                                        echo($sum)
                                                    @endphp
                                                </td>

                                            </tr>

                                            @endfor
                                            @endisset
                                            @endisset 
                                                            </tbody>

                                    
                                        </table>

<!-- Elcort transaction begins here with the table -->

                                           <table class="table table-bordered">
                                        <thead>
                                            <th>  
                                                <a class="" data-toggle="collapse" href="#multiCollapseelCortTransactions" role="button" aria-expanded="false" aria-controls="multiCollapseelCortTransactions">+ </a>
                                                &nbsp&nbsp
                                             </th>
                                            <th>El Corte Inglés</th>
                                            
                                        </thead>

                                                            <tbody class="collapse multi-collapse" id="multiCollapseelCortTransactions">
                                                                 @isset($elCortTransactions)
                                            @isset($maxelCort)

                                                @for ($i = 0; $i < $maxelCort; $i++)
                                            <tr>
                                                <td>-></td>
                                                <td>  </td>

                                           
                                                <td>@if(count($elCortTransactions->jan) > $i)
                                                    {{

                                                    $elCortTransactions->jan[$i]->transaction_amount
                                                    }}
                                                @else 

                                                @endif
                                                </td>
                                                
                                                <td>@if(count($elCortTransactions->feb) > $i)
                                                    {{

                                                    $elCortTransactions->feb[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->mar) > $i)
                                                    {{

                                                    $elCortTransactions->mar[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->apr) > $i)
                                                    {{

                                                    $elCortTransactions->apr[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->may) > $i)
                                                    {{

                                                    $elCortTransactions->may[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->jun) > $i)
                                                    {{

                                                    $elCortTransactions->jun[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->jul) > $i)
                                                    {{

                                                    $elCortTransactions->jul[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->aug) > $i)
                                                    {{

                                                    $elCortTransactions->aug[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->sep) > $i)
                                                    {{

                                                    $elCortTransactions->sep[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->oct) > $i)
                                                    {{

                                                    $elCortTransactions->oct[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->nov) > $i)
                                                    {{

                                                    $elCortTransactions->nov[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>@if(count($elCortTransactions->dec) > $i)
                                                    {{

                                                    $elCortTransactions->dec[$i]->transaction_amount
                                                    }}
                                                @endif</td>
                                                <td>
                                                                                                        @php
                                                        $sum = 0;
                                                        if(count($elCortTransactions->jan) > $i){
                                                         $sum += $elCortTransactions->jan[$i]->transaction_amount;
                                                        }
                                                        if(count($elCortTransactions->feb) > $i){
                                                         $sum += $elCortTransactions->feb[$i]->transaction_amount;
                                                        }
                                                        if(count($elCortTransactions->mar) > $i){
                                                         $sum += $elCortTransactions->mar[$i]->transaction_amount;
                                                        }
                                                        if(count($elCortTransactions->apr) > $i){
                                                         $sum += $elCortTransactions->apr[$i]->transaction_amount;
                                                        }
                                                        if(count($elCortTransactions->may) > $i){
                                                         $sum += $elCortTransactions->may[$i]->transaction_amount;
                                                        }
                                                        if(count($elCortTransactions->jun) > $i){
                                                         $sum += $elCortTransactions->jun[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->jul) > $i){
                                                         $sum += $elCortTransactions->jul[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->aug) > $i){
                                                         $sum += $elCortTransactions->aug[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->sep) > $i){
                                                         $sum += $elCortTransactions->sep[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->oct) > $i){
                                                         $sum += $elCortTransactions->oct[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->nov) > $i){
                                                         $sum += $elCortTransactions->nov[$i]->transaction_amount;
                                                        }

                                                        if(count($elCortTransactions->dec) > $i){
                                                         $sum += $elCortTransactions->dec[$i]->transaction_amount;
                                                        }

                                                        echo($sum)
                                                    @endphp
                                                </td>

                                            </tr>

                                            @endfor
                                            @endisset
                                            @endisset 
                                                            </tbody>

                                    
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


