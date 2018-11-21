<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-container">
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-topright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        <?php Session::forget('error');?>
        @endif

    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
    	  <div class="w3-container w3-teal w3-padding-16">Realizar Pago con Paypal</div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Formulario de Pago</h2>
    	  <p>Formulario de Pago - Es obligatorio introducir una cantidad</p>
    	  <label class="w3-text-blue"><b>Introduzca la cantidad</b></label>
    	  <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
    	  <button class="w3-btn w3-blue">Pagar con PayPal</button>
          
          <p></p>
          
    	</form>
        <a href="/clubs" class="w3-btn w3-blue">Volver al incio</a>
    </div>
</body>
</html>