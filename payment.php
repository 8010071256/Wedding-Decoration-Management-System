<!DOCTYPE html>
<html>
<head>
<form method="post" name="pass" id="pass" action="paydata.php" onsubmit="return validateform()">
<center>
  <title>Ganesh Decoration Payment Gateway</title>

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="registrationfile.css">
      <p style="background-image:url('christmas.jpg');"> 

<body>
<h1>Pay Advance Amount </h1>
     <input type="text" id="fname" name="firstname" placeholder="Customer Name">
     <br>
     <input type="text" id="adr" name="address" placeholder="Address">
       
  <div class="bottom-wrap">
      <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-amount="2000" data-id="3">Pay Now</a> 

       <!-- price-wrap.// -->
  </div> <!-- bottom-wrap.// -->
</center>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_live_ILgsfZCZoFIKMb",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Ganesh Decoration",
    "description": "Payment",
    "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
    "handler": function (response){
          $.ajax({
            url: 'https://www.tutsmake.com/Demos/php/razorpay/payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>
</body>
</form>
</html>