
<style type="text/css">
	th, td{
		text-align: center;
	}
</style>

	<div align="center">

		<table  class="table" align="center">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Phone No.</th>
				<th>Action</th>
			</tr>
		<?php foreach ($content as $user): ?>
			<tr>
				<td><?php echo $user->name ?></td>
				<td><?php echo $user->email ?></td>
				<td><?php echo $user->password ?></td>
				<td><?php echo $user->contactNo ?></td>
				<td>
					<a class="btn btn-primary"  href="<?php echo base_url(); ?>modify/<?php echo $user->id; ?>">Modify</a>
				    <a class="btn btn-danger"   href="<?php echo base_url(); ?>remove/<?php echo $user->id; ?>">Remove</a>
				</td>
				
			</tr>
		 <?php endforeach; ?> 
		</table>
		
	</div>

