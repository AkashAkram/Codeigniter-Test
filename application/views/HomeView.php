
<style type="text/css">
	
</style>

<div class="col-md-6">

	<table  class="table">
			
		<?php foreach ($content as $user): ?>
		<tr>
			<th><h2><?php echo $user->name ?></h2></th>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo $user->email ?></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><?php echo $user->password ?></td>
		</tr>
		<tr>
			<th>Contact No. </th>
			<td><?php echo $user->contactNo ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<a class="btn btn-success"   href="<?php echo base_url(); ?>view/<?php echo $user->id; ?>">View Profile</a>
				<a class="btn btn-primary"  href="<?php echo base_url(); ?>modify/<?php echo $user->id; ?>">Modify</a>
			    <a class="btn btn-danger"   href="<?php echo base_url(); ?>remove/<?php echo $user->id; ?>">Remove</a>
			</td>
		</tr>
		 <?php endforeach; ?> 
	</table>
		
</div>

