<?php   $akey="rzp_test_sdlVo3vTfvXBYm";
$aname=$_POST['name']; 
$aemail=$_POST['email'];
?>
<form action="success.php" method="POST">
<script
   src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $akey; ?>" 
    data-amount="29935"; 
    data-currency="INR";
    data-id="<?php echo "iod".rand(10,100)."end"?>;
    data-buttontext="Pay with Razorpay";
    data-name="D-CARE"; 
    data-description="D-CARE is a Healthcare management system application"
    data-image="https:.//images/b.jpg";
    data-prefill.name="<?php echo $aname;?>"
    data-prefill.email="<?php echo $aemail;?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>