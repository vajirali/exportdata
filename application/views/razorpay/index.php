<?php
$this->load->view('template/header');
?>
<style>
.col-lg-6.col-md-6.mb-6{
	width: 19%;
    display: inline-block;
    margin-left: 6px;
    margin-bottom: 70px;
}
.add-to-cart{
	background: #77b6da;
    padding: 13px;
    color: white;
    border-radius: 12px;
    text-decoration: none;
}
.card-footer{
	text-align: center;
    margin-top: 35px;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h2>Razorpay Payment Gateway Integration In Codeigniter using cURL</h2>                 
    </div>
</div><!-- /.row -->
<div class="row">
    <?php foreach($productInfo as $key=>$element) { ?>
        <div class="col-lg-6 col-md-6 mb-6">
            <div class="card h-100">
                <a href="#"><img src="<?php echo base_url();?>assets/images/Penguins.jpg" alt="product 10" title="product 10" class="card-img-top" height="150" width="100"></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#"><?php print $element['name'];?></a>
                    </h4>
                    <h5>₹<?php print $element['price'];?></h5>
                    <p class="card-text"><?php print $element['description'];?></p>
                </div>
                <div class="card-footer text-right">                    
                    <a href="<?php site_url()?>checkout/<?php print $element['id'];?>" class="add-to-cart btn-success btn btn-sm" data-productid="<?php print $element['id'];?>" title="Add to Cart"><i class="fa fa-shopping-cart fa-fw"></i> Buy Now</a>                    
                </div>
            </div>
        </div>
    <?php } ?>          
</div>
<?php
$this->load->view('template/footer');
?>