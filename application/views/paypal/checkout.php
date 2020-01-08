<?php
$this->load->view('template/header');
?>
<div class="row">
    <div class="col-lg-12">
        <h2>Paypal Express Checkout Integration with Codeigniter</h2>                 
    </div>
</div><!-- /.row -->
<?php
$amount = $itemInfo['price'];
$merchant_order_id = $itemInfo['id'];
$return_url = site_url().'paypal/callback';

?>
<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($this->session->flashdata('msg'))){ ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('msg'); ?>
            </div>        
        <?php } ?>
        
    </div>
</div> 
    <div class="row">   
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
            <table class="table table-bordered table-hover table-striped print-table order-table" style="font-size:11px;">
                <thead class="bg-primary">
                    <tr>
                        <th width="15%" class="text-left" style="vertical-align: inherit">Image</th>
                        <th width="30%" class="text-left" style="vertical-align: inherit">Name</th>
                        <th width="15%" class="text-left" style="vertical-align: inherit">Price</th>
                        <th width="15%" class="text-right" style="vertical-align: inherit">Qty</th>
                        <th width="15%" class="text-right" style="vertical-align: inherit">Sub Total</th>                        
                    </tr>
                </thead>                        
                <tbody>                    
                    <tr>
                        <td class="text-left"><img width="80" height="80" src="<?php echo base_url();?>assets/images/Penguins.jpg"></td>
                        <td class="text-left"><?php print $itemInfo['name'];?></td>
                        <td class="text-left"><?php print $itemInfo['price'];?></td>
                        <td class="text-right">1</td>
                        <td class="text-right"><?php print $itemInfo['price'];?></td>                        
                    </tr>                        
                </tbody>                        
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-right">
            



<div id="paypal-button-container"></div>
<div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
	paypal.Button.render({
		env: '<?php echo PAYPAL_ENV; ?>',
		client: {
			<?php if(PRO_PAYPAL) { ?>
			production: '<?php echo PAYPAL_CLIENTID; ?>'
			<?php } else { ?>
			sandbox: '<?php echo PAYPAL_CLIENTID; ?>'
			<?php } ?>
		},
		payment: function (data, actions) {
			return actions.payment.create({
				transactions: [{
				amount: {
					total: '<?php echo $itemInfo['price']; ?>',
					currency: '<?php echo CURRENCY; ?>'
				}
				}]
			});
		},
		onAuthorize: function (data, actions) {
		return actions.payment.execute()
		.then(function () {
		window.location = "<?php echo PAYPAL_BASE_URL .$return_url;?>?paymentID="+data.paymentID+"&payerID="+data.payerID+"&token="+data.paymentToken+"&pid=<?php echo $merchant_order_id; ?>";
		});
		}
	}, '#paypal-button');
</script>

        </div>
    </div>


<?php
$this->load->view('template/footer');
?>