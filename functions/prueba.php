<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
  <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
  <input name="buttonId" type="hidden" value="pBuk7dJrYXGvQMn89jeGlhiWFlJKz2pGXf/SDUd8s1DU0XVax3KnDA=="/>
  <input name="merchantId" type="hidden" value="697516"/>
  <input name="accountId" type="hidden" value="700525"/>
  <input name="description" type="hidden" value="Masaje 50 minutos"/>
  <input name="referenceCode" type="hidden" value="0050"/>
  <input name="amount" type="hidden" value="486.04"/>
  <input name="tax" type="hidden" value="67.04"/>
  <input name="taxReturnBase" type="hidden" value="419.00"/>
  <input name="currency" type="hidden" value="MXN"/>
  <input name="lng" type="hidden" value="es"/>
  <input name="approvedResponseUrl" type="hidden" value="http://www.vivens.mx/exitosa.html"/>
  <input name="declinedResponseUrl" type="hidden" value="http://www.vivens.mx/noexitosa.html"/>
  <input name="pendingResponseUrl" type="hidden" value="http://www.vivens.mx/pendiente.html"/>
  <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
  <input name="buttonType" value="SIMPLE" type="hidden"/>
  <input name="signature" value="46f10b14f70cf8abe0afa2f333d55f91a16b370112e0a71e2f6c430d4e49a7dd" type="hidden"/>
</form>
</body>
</html>