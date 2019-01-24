<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.5/venobox.css">
</head>
<body>
        <a class="venobox" data-vbtype="iframe" href="http://www.veno.es">Open Iframe</a>
        <a class="venobox" data-vbtype="inline" title="My Description" href="#inline-content">Open inline content</a>
        <a class="venobox" data-vbtype="ajax" href="../ajax/ajaxCompra.html">Retrieve data via Ajax</a>
        <a class="venobox" data-vbtype="video" href="http://youtu.be/d85gkOXeXG4">YouYbe</a>
        <a class="venobox" data-vbtype="video" data-autoplay="true" href="http://vimeo.com/75976293">Vimeo</a>
        
        <div id="inline-content" style="display:none;">
                    <div style="width: 100%;height: 100%;float: left;padding: 10px;background: rgba(0,0,0,0.85);background: rgba(23, 23, 23, 0.85);text-align: center;">
                        <img src="../images/servicios/Aromavedico.jpg" alt="">
                        <br>
                        <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul" accept-charset="UTF-8">
                          <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
                          <input name="buttonId" type="hidden" value="achujzqd6tKJPYyeFWJ0ibsKXQd8my9u6NkP7ljpkXTNfAFCn5rscw=="/>
                          <input name="merchantId" type="hidden" value="697516"/> 
                          <input name="accountId" type="hidden" value="700525"/>
                          <input name="description" type="hidden" value="Masaje100 min Aromavédico"/>
                          <input name="referenceCode" type="hidden" value="Mas100minAromavedico"/>
                          <input name="amount" type="hidden" value="899.00"/>
                          <input name="tax" type="hidden" value="0.00"/>
                          <input name="taxReturnBase" type="hidden" value="0.00"/>
                          <input name="currency" type="hidden" value="MXN"/>
                          <input name="lng" type="hidden" value="es"/>
                          <input name="approvedResponseUrl" type="hidden" value="https://www.vivens.mx/message/exitosa.html"/>
                          <input name="declinedResponseUrl" type="hidden" value="https://www.vivens.mx/message/error.html"/>
                          <input name="pendingResponseUrl" type="hidden" value="https://www.vivens.mx/message/pendiente.html"/>
                          <input name="displayBuyerComments" type="hidden" value="true"/>
                          <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                          <input name="buttonType" value="SIMPLE" type="hidden"/>
                          <input name="signature" value="0a8efc68be0a40d4f87b5776251c7ab665937bfe9e95939d23c10d0ffdff0e6d" type="hidden"/>
                        </form>
                    </div>
        </div>
</body>
<script
src="https://code.jquery.com/jquery-2.2.4.js"
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.5/venobox.min.js"></script>
<script>
    $(document).ready(function(){
        $('.venobox').venobox(); 
    });
</script>
</html>