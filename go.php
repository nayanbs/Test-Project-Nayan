<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing</title>
</head>

<body onload="document.forms['gateway_form'].submit();">
<form action="https://www.2checkout.com/checkout/purchase" name="gateway_form" method="POST">
<input type="hidden" value="00000" name="sid">
<input type="hidden" value="<?php echo $_REQUEST['project']; ?>" name="cart_order_id">
<input type="hidden" value="<?php echo $_REQUEST['amount']; ?>" name="total">
<input type="hidden" value="USD" name="tco_currency">
<input type="hidden" value="<?php echo $_REQUEST['project']; ?>" name="custom">
<input type="hidden" value="Y" name="demo">
<p style="text-align:center;"><br><br>If you are not automatically redirected to payment website within 5 seconds...<br><br>
<input type="submit" value="Click Here"></p>
</form>
</body>
</html>