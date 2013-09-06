
<?php echo "<form action='/sandbox/index.php/admin/newpostload/".$user."' method='post'>"; ?>
<input type="submit" value="New Post"> 
</form>

<?php echo "<form action='/sandbox/index.php/admin/logout' method='post'>"; ?>
<input type="submit" value="Log Out">
</form>


<?php

echo "<h1> ". $title . "</h1>";
echo "<h2> Hello ". $user. " <h2>";



echo " <table border='2'>";
	echo "<tr>";
	echo "<th>Post ID</th>";
	echo "<th>Post Name</th>";
	echo "<th>Post Author</th>";
	echo "<th>Post Date</th>";
	echo "<th>Edit Post</th>";
	echo "<th>Delete Post</th>";
	echo "</tr>";

foreach ($news as $row)
{
	echo "<tr>";
	echo "<td>". $row->id . "</td>";
	echo "<td>". $row->name . "</td>";
	echo "<td>". $row->author . "</td>";
	echo "<td>". $row->date . "</td>";
	echo "<td>edit</td>";
	echo "<td><a href='/sandbox/index.php/admin/deletePost/".$row->id."'>delete</a></td>";
	echo "</tr>";
	
}






?>