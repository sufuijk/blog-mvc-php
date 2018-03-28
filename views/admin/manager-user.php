<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
	<div class="rightpage">
			<div id="list-post">
				<table class="table table-dark">

					<thead>
						<tr>
							<th>Id</th>
							<th>Username</th>
							<th>First name</th>
							<th>Last name</th>
							<th>Gender</th>
							<th>Email</th>
							<th>Grant</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach($data as $user):?>
						<tr>
							<td><?php echo $user->id;?></td>
							<td><?php echo $user->username;?></td>
							<td><?php echo $user->firstname;?></td>
							<td><?php echo $user->lastname;?></td>
							<td><?php echo $user->gender;?></td>
							<td><?php echo $user->email;?></td>
							<td><?php echo ($user->phanquyen == 0)? "Admin":"Writer"; ?></td>
							
						</tr>
						<?php endforeach;?>
		
					</tbody>
				</table>
			</div>
	</div>
</div>