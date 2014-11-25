
<?php foreach ($users as $k => $user): ?>

	<?php

debug($user);

	 ?>
	

  <table>
  	<tr>
  		<th>Name</th>
  		<th>Email</th>
  		<th>Mobile</th>
  	</tr>

    <tr>
    	<td><?=$user['User']['name']; ?></td> 
    	<td><?=$user['User']['email']; ?></td>
    	<td><?=$user['User']['mobile']; ?></td>

    </tr>


  </table>

<?php endforeach ?>


<!-- 

View
 helper 
   





 -->
