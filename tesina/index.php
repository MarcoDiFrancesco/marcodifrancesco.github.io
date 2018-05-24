<html>

<head>
	<meta charset="utf-8">
	<title>Tesina Di Francesco</title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115310552-1"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/dojo/1.13.0/dojo/dojo.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-115310552-1');
	</script>
	<link href="style.css" type="text/css" rel="stylesheet">

	<script>
		// Richiamo insert.php per l'inserimento del pin a 0 o 1 nel database
		$( document ).ready( function () {
			$( 'input[type="checkbox"]' ).change( function () {
				var ledNumber = $( this ).val();
				if ( this.checked ) {
					var ledState = 1;
				} else {
					var ledState = 0;
				}
				$.ajax( {
					url: "insert.php",
					method: "POST",
					data: {
						ledState: ledState,
						ledNumber: ledNumber
					},
					success: function ( data ) {
						$( '#result' ).html( data );
					}
				} );
			} );
		} );
	</script>
	<script>
		/*	window.onload = */
		$( document ).ready( function () {
			$( '[onload]' ).each( function updateLed() {
				var ledNumber = $( this ).val();
				$.ajax( {
					url: "check.php",
					method: "POST",
					data: {
						ledNumber: ledNumber
					},
					success: function ( ledState ) {
						$( '#result2' ).html( ledState );
						if ( ledState == 0 ) {
							document.getElementById( ledNumber ).checked = false;
						} else {
							document.getElementById( ledNumber ).checked = true;
						}
					}
				} );
			} );
		} );
	</script>
</head>

<body>
	<h1>Controllo casa domotica update</h1>
	<form>
		<div>LED 1
			<label class="switch">
				<input type="checkbox" name="state" id="1" value="1" onload="updateLed();">
				<span class="slider round"></span>
			</label>


		</div>
		<div>LED 2
			<label class="switch">
				<input type="checkbox" name="state" id="2" value="2" onload="updateLed();">
				<span class="slider round"></span>
			</label>


		</div>
		<div>LED 3
			<label class="switch">
				<input type="checkbox" name="state" id="3" value="3" onload="updateLed();">
				<span class="slider round"></span>
			</label>


		</div>
		<div>LED 4
			<label class="switch">
				<input type="checkbox" name="state" id="4" value="4" onload="updateLed();">
				<span class="slider round"></span>
			</label>
		</div>
		<div>LED 5
			<label class="switch">
				<input type="checkbox" name="state" id="5" value="5" onload="updateLed();">
				<span class="slider round"></span>
			</label>


		</div>
		<div>LED 6
			<label class="switch">
				<input type="checkbox" name="state" id="6" value="6" onload="updateLed();">
				<span class="slider round"></span>
			</label>


		</div>
		<h3 id="result">Clicca per aggiornare un led... </h3>
		<h3 id="result2">Collegamento in corso... </h3>
		<br/>
	</form>
</body>

</html>
