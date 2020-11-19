
<?php $this->load->view('header');?>


<?php 

$attr=['class'=>'form form-horizontal', 'id'=>'myform'];
echo form_open('users/new_user',$attr) ; ?>
 <?php if (validation_errors()) : ?>
 <h3>Whoops! There was an error:</h3>
 <p><?php echo validation_errors(); ?></p>
 <?php endif; ?>
	 <div class="row">
 		<div class="col-lg-offset-1 col-lg-10">
		
	<h1>Create New User</h1>
 	<table class="table text-center" border="" >
	 <tr>
		 <td>User First Name</td>
		 <td><?php echo form_input($first_name); ?></td>
	 </tr>
	 <tr>
		 <td>User Last Name</td>
		 <td><?php echo form_input($last_name); ?></td>
	 </tr>
	 <tr>
		 <td>User Email</td>
		 <td><?php echo form_input($email); ?></td>
	 </tr>
	 <tr>
		 <td>User Is Active?</td>
		 <td><?php echo form_checkbox($is_active); ?></td>
	 </tr>
	</table>
 <?php echo form_submit('submit', 'Create','class="btn btn-block btn-success"'); ?>
 or <?php echo anchor('users/index', 'cancel'); ?>
<?php echo form_close(); 


//$config['base_url'] = 'http://localhost/CodeIgniter-2.2.6/';
	// $config['total_rows'] = 200;
	// $config['per_page'] = 1;
	// $this->pagination->initialize($config);

?>



</div></div>
<?php $this->load->view('footer');?>
