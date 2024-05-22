@extends('layouts.master')
@section('title')
    Pago de Subscripción
@endsection
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12 col-lg-11">
			<div class="card card0 rounded-0">
				<div class="row">
					<div class="col-md-5 d-md-block d-none p-0 box">
						<div class="card rounded-0 border-0 card1" id="bill">
							<h3 id="heading1">Descripción del pago</h3>
						
							<div class="row">
								<div class="col-lg-7 col-8 mt-4 line pl-4">
									<h2 class="bill-head">Subscripción ilimitada</h2>
									<small class="bill-date">{{ now()->format('Y M d \a\t H:i A') }}</small>
								</div>
								<div class="col-lg-5 col-4 mt-4">
									<h2 class="bill-head px-xl-5 px-lg-4">SI</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 red-bg">
									<p class="bill-date" id="total-label">Precio Total</p>
									<h2 class="bill-head" id="total"> 7.99€</h2>
									<small class="bill-date" id="total-label">Iva Incluído</small>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-7 col-sm-12 p-0 box">
						<div class="card rounded-0 border-0 card2" id="paypage">
							<div class="form-card">
			                    <h2 id="heading2" class="text-danger">Método de pago</h2>
			                    <div class="radio-group">
			                        {{-- <div class='radio' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
			                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/5QFsx7K.jpg" width="200px" height="60px"></div> --}}
			                        <br>
			                    </div>
			                    <label class="pay">Nombre en la tarjeta</label>
			                    <input type="text" name="holdername" placeholder="John Smith">
			                    <div class="row">
			                        <div class="col-8 col-md-6">
			                            <label class="pay">Número de la tarjeta</label>
			                            <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19">
			                        </div>
			                        <div class="col-4 col-md-6">
			                            <label class="pay">CVV</label>
			                            <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3">
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-12">
			                            <label class="pay">Fecha de caducidad</label>
			                        </div>
			                        <div class="col-md-12">
			                            <input type="text" name="exp" id="exp" placeholder="MM/AA" minlength="5" maxlength="5">
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-md-6">
<form action="{{ route('subscripcion.update', auth()->user()->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="submit" value="Realizar Pago">
</form>			                        </div>
			                    </div>
								Al realizar el pago aceptas el trato de los datos proporcionados para el cobro de dicho pago a cambio de los servicios que prometemos
			                </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('styles')
<style>


.card0 {
	margin: 40px 12px 15px 12px;
	border: 0;
}

.card1 {
	margin: 0;
	padding: 15px;
	padding-top: 25px;
	padding-bottom: 0px;
	background: #263238;
	height: 100%;
}

.bill-head {
	color: #ffffff;
	font-weight: bold;
	margin-bottom: 0px;
	margin-top: 0px;
	font-size: 30px;
}

.line {
	border-right: 1px grey solid;
}

.bill-date {
	color: #BDBDBD;
}

.red-bg {
	margin-top: 25px;
	margin-left: 0px;
	margin-right: 0px;
	background-color: #F44336;
	padding-left: 20px !important;
	padding: 25px 10px 25px 15px;
}

#total {
	margin-top: 5%;
	padding-left: 7px;
}

#total-label {
	margin-bottom: 0px;
	color: #ffffff;
	padding-left: 7px;
}

#heading1 {
	color: #ffffff;
	font-size: 20px;
	padding-left: 10px;
}

#heading2 {
	font-size: 27px;
	color: #D50000;
}


.placeicon {
	font-family: fontawesome !important;
}

/*Right Side Card*/
.card2 {
	padding: 25px;
	margin: 0;
}

.form-card .pay {
	font-weight: bold;
}

.form-card input, .form-card textarea {
    padding: 10px 8px 10px 8px;
    border: none;
    border: 1px solid lightgrey;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
}

.form-card input:focus, .form-card textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border: 1px solid gray;
    outline-width: 0;
}

.btn-info {
	color: #ffffff !important;
}

/*Imaged Radio Buttons*/
.radio-group {
    position: relative;
    margin-bottom: 25px;
}

.radio {
    display:inline-block;
    width: 204;
    height: 64;
    border-radius: 0;
    background: lightblue;
    box-sizing: border-box;
    border: 2px solid lightgrey;
    cursor:pointer;
    margin: 8px 25px 8px 0px; 
}

.radio:hover {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
}

.radio.selected {
    box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.4);
}

/*Fit image in bootstrap div*/
.fit-image{
    width: 100%;
    object-fit: cover;
}
</style>
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function() {
    });
</script>
@endsection