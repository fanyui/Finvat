@extends('layouts.default')

@section('content')

	<div class="container " style="padding-top: 90px">

		<div class="row" >
			<div class="col-md-3  ">
			</div>

	        <div class="col-md-6 text-center"  >
	            <div class="panel panel-default">
	            		<div class="panel-head"> 
	            			<div class="author">
                                        <p>
                                            <img class="avatar border-gray" src="{{ asset('assets/ok.png') }}" alt="image">
                                            <h5 class="title">¡Tu cuenta ha sido creada con éxito! </h5>
                                        </p>
                                        <p class="description">
                                            Confirma tu email y accede a tu espacio 
                                        </p>
                                    </div>
	            		</div>
	                <div class="panel-body ">
	                    <div><a class="btn btn-primary center" href="{{ route('login') }}">
                                    LOG IN
                                </a>
                        </div>
	                </div>
	            </div>
	        </div>

	        <div class="col-md-3 ">
			</div>
		</div>
						

	</div>

@endsection
