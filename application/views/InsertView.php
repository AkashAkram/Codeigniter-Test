

<h2><?php echo $title; ?> Information</h2>
	<div class="col-md-3"></div>

	<div class="col-md-6">
	<form action="../<?php echo $action; ?>/<?php if($content[0]!='') print $content[0]->id; ?>" method="post">
	  <fieldset class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name" value="<?php if($content[0]!='') print $content[0]->name; ?>">
	  </fieldset>
	  
	  <fieldset class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email ID" value="<?php if($content[0]!='') print $content[0]->email; ?>">
	  </fieldset>

	  <fieldset class="form-group">
	    <label for="exampleInputEmail1">password</label>
	    <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Enter Password" value="<?php if($content[0]!='') print $content[0]->password; ?>">
	  </fieldset>

	  <fieldset class="form-group">
	    <label for="">Phone No.</label>
	    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter Phone Number" value="<?php if($content[0]!='') print $content[0]->contactNo; ?>">
	  </fieldset>

	  <fieldset class="form-group">
	  <button id="btn" type="submit" class="form-control btn btn-primary"><?php echo $title; ?></button>
	  </fieldset>
	</form>
	</div>

	<div class="col-md-3"></div>

