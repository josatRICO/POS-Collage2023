<nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-width:350px">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="index.php?pg=home"><h4><?=esc(APP_NAME)?></h4></a></h4>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <h5><a class="nav-link active" aria-current="page" href="index.php?pg=home">Point of Sale</a></h5>
	        </li>

			<?php if(Auth::access('admin')):?>
				<li class="nav-item">
				  <h5><a class="nav-link" href="index.php?pg=signup">Create user</a></h5>
				</li>
			<?php endif;?>
	        
	        <?php if(Auth::access('supervisor')):?>
		        <li class="nav-item">
		          <h5><a class="nav-link" href="index.php?pg=admin">Admin</a></h5>
		        </li>
		    <?php endif;?>


		    <?php if(!Auth::logged_in()):?>
		        <li class="nav-item">
		          <h5><a class="nav-link" href="index.php?pg=login">Login</a></h5>
		        </li>
	        <?php else:?>

		        <li class="nav-item dropdown">
		          <h5><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		              Hi, <?=auth('username')?>(<?=Auth::get('role')?>)
		          </a> 
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><h4><a class="dropdown-item" href="index.php?pg=profile">Profile</a></h4></li>
		            <li><h4><a class="dropdown-item" href="index.php?pg=edit-user&id=<?=Auth::get('id')?>">Profile-Settings</a></h4></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><h4><a class="dropdown-item" href="index.php?pg=logout">Logout</a></h4></li>
		          </ul>
		        </li>
	    	 <?php endif;?>

	      </ul>
	      <form class="">
			<?php date_default_timezone_set('Asia/Manila');?>
			<h4><?php echo date("F j, Y h:i:s a"); ?></h4>

	      </form>
	    </div>
	  </div>
	</nav>