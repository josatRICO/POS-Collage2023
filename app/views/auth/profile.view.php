<?php require views_path('partials/header');?>
<div class="bg-dark p-3 mb-5">
		<div class="row mx-0 py-3 bg-light d-flex">
			<div class="container-fluid border col-lg-5 col-md-6 mt-5 p-4" >
				
				<?php if(is_array($row)):?>

					<center>
						<h3><i class="fa fa-user"></i> User Profile</h3>
						<div><?=esc(APP_NAME)?></div>
					</center>
					<br>

					<table class="table table-hover table-striped">
						<tr>
							<td colspan="2">
								<center><img src="<?=crop($row['image'],400,$row['gender'])?>" style="width: 100%;max-width:100px;"></center>
							</td>
						</tr>

						<tr>
							<th>Username</th><td><?=$row['username']?></td>
						</tr>
						<tr>
							<th>Email</th><td><?=$row['email']?></td>
						</tr>
						<tr>
							<th>Gender</th><td><?=$row['gender']?></td>
						</tr>
						<tr>
							<th>Role</th><td><?=$row['role']?></td>
						</tr>
						<tr>
							<th>Date Created</th><td><?=get_date($row['date'])?></td>
						</tr>
						
					</table>
					<br>
					<a href="index.php?pg=edit-user&id=<?=$row['id']?>">
						<button type="button" class="btn btn-primary">Edit</button>
					</a>

					<a href="index.php?pg=delete-user&id=<?=$row['id']?>" class="float-end">
						<button type="button" class="btn btn-danger">Delete</button>
					</a>


				<?php else:?>
					<div class="alert alert-danger text-center">That user was not found!</div>

				<?php endif;?>
			</div>
		</div>
</div>
			

<?php require views_path('partials/footer');?>
