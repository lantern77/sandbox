<h1> NEW POST </h1>


<form action="<?php echo site_url().'/admin/getPostData/'?>" method='post'>

	<label>Post Name: </label> <br/>
	<input type="text" name="postName" id="postnameInput" > <br />
	<label>Post Content: </label> <br/>
	<textarea name="content" rows="10" cols="50">
		
	</textarea> <br/>
	<input type="submit" value="Post">
</form>