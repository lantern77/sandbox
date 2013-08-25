<style>
	#newsitem {border-top: 2px solid black; padding-top: 10px; margin-top: 25px; width: 500px; }
	#postname {font-size: 15; padding:0; margin:0;}
	#postdate {padding: 0; margin-top: 0px}
	#postcontent {padding-left:20px;}

   .wordwrap { 
  		word-wrap: break-word;      /* IE */
  	}

</style>



<?php foreach ($news as $news_item): ?>

	<div id="newsitem" class="wordwrap">
    	<h2 id="postname"><?php echo $news_item->name ?></h2>
    	<h6 id="postdate"> Date Posted: <?php echo $news_item->date ?> </h6>
    	<div id="postcontent">
        	<?php echo $news_item->content ?>
    	</div>
	</div>
    

<?php endforeach ?>

<form action="/sandbox/index.php/admin/login" method="post">
	<label>Username</label>
	<input id="user" name="user" type="text" > <br/>
	<label>Password</label>
	<input id="pass" name="pass" type="password" > <br/>
	<input type="submit" id="submit" value="Log In">
</form>
 
	



