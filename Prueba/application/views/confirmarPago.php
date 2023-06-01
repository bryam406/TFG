<form id="realizarPago" action="https://sis-t.redsys.es:25443/sis/realizarPago" method="post">
    <input type='hidden' name='Ds_SignatureVersion' value='HMAC_SHA256_V1'>
    <input type='hidden' name='Ds_MerchantParameters' value='<?php echo $params; ?>'>
    <input type='hidden' name='Ds_Signature' value='<?php echo $signature; ?>'>
    <div class="offset-lg-5">
        <button type="button" class="btn btn-danger">CANCELAR</button>
        <button type="submit" class="btn btn-success">PAGAR</button>
    </div>
</form>