<?php
	
	// echo "<pre>";
	// 	print_r($user_array);
	// 	echo "</pre>";

?>
<table border="1">
	<thead>
		<td>S.no</td>
		<td>Name</td>
		<td>Company</td>
	</thead>
	<tbody>
	<?php
		foreach ($user_array as $user) { 
	?>
		<tr>
			<td>
				<?= $user['id'] ?>
			</td>
			<td>
				<?= $user['name'] ?>
			</td>
			<td>
				<?= $user['company'] ?>
			</td>
		</tr>
	<?php } ?>
		
	</tbody>
</table>