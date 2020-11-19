
<?php $this->load->view('header');?>
<div class="row">
	<div class="col-lg-offset-1 col-lg-10">
		
	<h1>View All users</h1>
<?php if ($query->num_rows() > 0 ) : ?>
<table class="table text-center" border="2">
 <tr>
 <td>ID</td>
 <td>First Name</td>
 <td>Last Name</td>
 <td>Created Date</td>
 <td>Is Active</td>
 <td colspan="2">Actions</td>
 </tr>
 <?php foreach ($query->result() as $row) : ?>
 <tr>
	 <td><?php echo $row->id; ?></td>
	 <td><?php echo $row->first_name; ?></td>
	 <td><?php echo $row->last_name; ?></td>
	 <td><?php echo date("d-m-Y", $row->created_date); ?></td>
	 <td><?php echo ($row->is_active ? 'Yes' : 'No'); ?></td>
	 <td><?php echo anchor('users/edit_user/'.$row->id, 'Edit' ,['class'=>'btn btn-info']) ; ?></td>
	 <td><?php echo anchor('users/delete_user/'.$row->id, 'Delete',['class'=>'btn btn-danger']) ; ?></td>
 </tr>
 
 	
 <?php endforeach ; ?>
</table>
<?php endif ; ?>
<br>

<?php echo anchor('users/new_user','Create New User',['class'=>'btn btn-block btn-success']);

	// $config['total_rows'] = 5;
	// $config['per_page'] = 2;
	// $this->pagination->initialize($config);
	echo $this->pagination->create_links();


?>

</div>
</div>
<?php $this->load->view('footer');?>