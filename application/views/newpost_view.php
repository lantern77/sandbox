<h1> NEW POST </h1>


<form action="/sandbox/index.php/admin/newPost/" method='post'>
	<?php echo "<input type='hidden value='".$isLogged."' name='logged'>";?>
	<label>Post Name: </label> <br/>
	<input type="text" name="postName" id="postnameInput" > <br />
	<label>Choose Author: </label> <br />
	<select name="authors">
	<?php
	foreach ($info as $row)
	{
		echo "<option value='".$row->username."''>".$row->username."</option>";
	}
	?>
	</select>
	<br />
	<label>Post Content: </label> <br/>
	<textarea name="content" rows="10" cols="50">
		
	</textarea> <br/>
	<input type="submit" value="Post">
</form>