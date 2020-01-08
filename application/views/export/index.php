<?php
$this->load->view('template/header');
?>
<div class="row">
    <div class="col-lg-12">
        <h2>CodeIgniter Export Example</h2>                 
    </div>
</div><!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo base_url();?>export/generateExcelFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create EXCEL File</a> &nbsp;&nbsp;
		
		<a href="<?php echo base_url();?>export/generateCsvFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create CSV File</a>&nbsp;&nbsp;
		
		<a href="<?php echo base_url();?>export/generatePdfFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create PDF File</a>
		
    </div>
</div>
<hr>
<?php foreach($result as $detail){ ?>
		<table border="0" width="80%" align="center">
			<tr>
				<td width="5%"><?php echo $detail['id']; ?></td>
				<td width="12%"><img src="<?php echo base_url(); ?>assets/images/Penguins.jpg" height="85" width="75"></td>
				<td width="10%"><b>Price:</b> <?php echo number_format($detail['price'], 2, '.', ''); ?></td>
				<td width="30%"><b>Name:</b> <?php echo $detail['name']; ?></td>
				<td width="43%"><b>Descriptipn:</b> <?php echo $detail['description']; ?></td>
			</tr>
		</table>
		<hr>
<?php } ?>
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo base_url();?>export/generateExcelFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create EXCEL File</a> &nbsp;&nbsp;
		
		<a href="<?php echo base_url();?>export/generateCsvFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create CSV File</a>&nbsp;&nbsp;
		
		<a href="<?php echo base_url();?>export/generatePdfFile" target="_blank" class="pull-right btn btn-primary btn-xs" style="margin: 2px;"><i class="fa fa-plus"></i> Create PDF File</a>
    </div>
</div>
<?php
$this->load->view('template/footer');
?>