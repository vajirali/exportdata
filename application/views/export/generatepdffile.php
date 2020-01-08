<style>
h1{
	font-size:25px;
	color:blue;
}
table{
	margin-top:120px;
}
</style>
<h1 align="center"> Products Report </h1><hr>
<br/><br/>
<?php foreach($getInfo as $detail){ ?>
		<table border="0">
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