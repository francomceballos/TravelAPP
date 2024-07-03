<?php 
  require "includes/header.php";
  require "config/config.php";

  if(!isset($_SERVER['HTTP_REFERER'])) {
      header("location: ".BASE_URL."");
      exit;
  }


?>

    <div class="container-fluid" style="margin-top: 300px;margin-bottom: 1000px; display: flex; justify-content: center;">  
                    <!-- Replace "test" with your own sandbox Business account app client ID -->
                    <script src="https://www.paypal.com/sdk/js?client-id=AaTefhW8BvgXeROg2iq1ObfTSTVIspxYVXSOV68Tid_ovZTWJvgjQE8UHxpk5zBocHca8f_hRI9jPpJD&currency=USD"></script>
                    <!-- Set up a container element for the button -->

                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                        // Sets up the transaction when a payment button is clicked
                        createOrder: (data, actions) => {
                            return actions.order.create({
                            purchase_units: [{
                                amount: {
                                value: "<?php echo $_SESSION['payment'] ?>" // Can also reference a variable or function
                                }
                            }]
                            });
                        },
                        // Finalize the transaction after payer approval
                        onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                          
                             window.location.href='index.php';
                            });
                        }
                        }).render('#paypal-button-container');
                    </script>
                </div>
            </div>
        </div>

<?php require "includes/footer.php"; ?>