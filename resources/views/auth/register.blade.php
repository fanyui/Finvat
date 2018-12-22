

@extends('layouts.default')

@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">

        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
            <form role="form" action="{{ route('register') }}" method="POST" class="f1">
                                        {{ csrf_field() }}
                <h3>Register To FinVat</h3>
                <p>Complete the stpes get instant access</p>
                <div class="f1-steps">
                    <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    </div>
                    <div class="f1-step active">
                        <div class="f1-step-icon"><i>1</i></div>
                        <p>Cuéntanos sobre ti</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i>2</i></div>
                        <p>Cuéntanos sobre tu negocio</p>
                    </div>
                    <div class="f1-step">
                        <div class="f1-step-icon"><i>3</i></div>
                        <p>Elige tu plan</p>
                    </div>
                </div>
                
                <fieldset>

                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('appellido') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('checkbox'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('checkbox') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('listOption1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('listOption1') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('listOption2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('listOption2') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('barPepe'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('barPepe') }}</strong>
                                    </span>
                                @endif

                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    <div class="form-group">
                        <label  for="name">Nombre</label>
                        <input type="text" name="name" placeholder="e.g: Luis" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label  for="last-name">Apellido(s)</label>
                        <input type="text" name="last_name" placeholder="e.g: Lopez" class=" form-control" id="last-name">
                    </div>
                    <hr />
                    <div class="form-group">
                        <label  for="email">Email </label>
                        <input type="email" name="email" placeholder="eg email@email.com" class="form-control" id="email">

                    </div>
                    <div class="form-group">
                        <label  for="password">Password </label>
                        <input type="password" name="password" class=" form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label  for="password-confirmation">Confirm Password </label>
                        <input type="password" name="password_confirmation" class=" form-control" id="password-confirmation">
                    </div>

                      <div class="checkbox">
                        <label>
                          <input id="checkbox" type="checkbox" name="checkbox"> He leído y acepto los <a href="http://www.finvat.com/terminos">Términos y Condiciones del servicio.</a> 

                        </label>
                      </div>

                    <div class="f1-buttons">
                        <button type="button" class="btn btn-next">CONTINUA</button>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="business-kind" id="business-kind">
                            
                        <label class="sr-only">¿Qué tipo de negocio eres?</label>
                        <ul>
                          <li data-option="Autonomos">SOY AUTÓNOMO</li> &nbsp&nbsp&nbsp
                          <li data-option="Company">SOY EMPRESA</li>

                        </ul>
                    </div>
                    <input type="hidden" name="business_kind" id="business-kind-input" value="">

                    <br />
                    <div class="form-group">
                        <label class="sr-only" for="f1-business-name">¿Cuál es el nombre de tu negocio?</label>
                        <input type="text" name="business_name" placeholder="e.g.: Bar Pepe" class=" form-control" id="f1-business-name">
                    </div>
                    <div class="business-activity" id="business-activity">
                        <label class="sr-only" >¿Cuál es actividad principal de tu negocio?</label>

                        <ul>
                          <li data-option="Hospitality and Restoration">Hostelería y Restauración</li> &nbsp
                          <li data-option="Industry and Energy">Industria y Energía</li>&nbsp
                          <li data-option="Tourism">Turismo</li>

                            <br /> <br />
                          <li data-option="Consulting and agency">Consultoría y gestoría</li> &nbsp
                          <li data-option="fReal Estate and Construction">Inmobiliaria y Construcción</li>
                          &nbsp
                          <li data-option="Transport">Transporte</li>
                            <br/> <br />
                          <li data-option="Ecommerce">Ecommerce</li> &nbsp
                          <li data-option="Juridical services">Servicios Jurídicos</li>
                          &nbsp
                          <li data-option="Others">Otros</li>

                        </ul>

                        <input type="hidden" name="business_activity" id="business-activity-input" value="">

                    </div>

                    <br />

                    <div class="f1-buttons">
                        <button type="button" class="btn btn-previous">Previous</button>
                        <button type="button" class="btn btn-next">CONTINUA</button>
                    </div>
                </fieldset>

                <fieldset>
                        <div class="row">
                            <div class="col-md-4 business-plan" data-option="PAL"> 
                                <h4>FIN PAL </h4>
                                <p>9€ / mes + IVA</p>
                                <ol>
                                    <li> Conecta tu cuenta bancaria</li>
                                    <li> Actualiza tu estado mes a mes</li>
                                    <li>Informe personalizado de tu estado financiero y tu posición de caja</li>
                                    <li>Estimación de tu Cash-Flow para los próximos 6 mesesc</li>
                                </ol>
                            </div>
                            <div class="col-md-4 business-plan disable" data-option="PRO"> 
                                <h4>FIN PRO</h4>
                                <ol>
                                    <li> Conecta hasta 3 cuentas bancarias</li>
                                    <li> Actualiza tu estado todas las semanas</li>
                                    <li> Informe personalizado de tu estado financiero y tu posición de caja</li>
                                    <li> Estimación de tu Cash-Flow para los próximos 12 meses</li>
                                </ol>
                            <</div>
                            <div class="col-md-4 business-plan disable" data-option="MASTER">
                                <h4>FIN MASTER</h4>
                                <ol>
                                    <li> Conecta hasta 10cuentas bancarias</li>
                                    <li> Actualiza tu estado todos los días</li>
                                    <li> Informe personalizado de tu estado financiero y tu posición de caja</li>
                                    <li> Estimación de tu Cash-Flow para los próximos 12 meses</li>
                                    <li> Contabilidad online</li>
                                    <li> Realiza pagos desde tu cuenta</li>
                                </ol>
                            </div>
                            <input type="hidden" name="business_plan" value="PAL" id="business-plan-input" />
                        </div>

                     <div class="f1-buttons">
                        <button type="button" class="btn btn-previous">Previous</button>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </fieldset>
            
            </form>
        </div>
    </div>

</div>


@endsection

    <!-- Custom Style -->

@section('customStyle')

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

    <!-- Custom Scripts -->

@section('customScript')

    <script src="{{ asset('js/custom.js') }}"></script>
@endsection


<!-- step 2 first list kind of buisness. 
    1. autonomos
    2. company
 -->
<!-- step 2 second list business_activity -->

<!-- step 3 plan 
1. pal
2. pro.
3. master
-->


