<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bucket List -- Simple PHP Azure Demo by Theodore Anderson</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center><h3>Add To The Bucketlist</h3>
		<form action="/bucketlists/add" method="post" class="form-control" style="width:300px; height:180px">
		<label for="">Wish</label>
		<input type="text" name="wish" class="form-control" required minlength=3 maxlength=50>
		<label for="">Author</label>
		<input type="text" name="author" class="form-control" required minlength=3 maxlength=50>
		<br>
		<input type="submit" value="Add" class="btn btn-success">
		</form>
		<hr>
		<h3>All Items in Bucketlist</h3>
		<div class="wishes" style="border:3px solid black; height:300px; width:300px; overflow:scroll">
		<?php foreach ($bucketlists as $bucketlist)
		{?>
			Wish: 
			"
			<?= $bucketlist['wish'] ?>
			"
			<br>
			Author:
			<?= $bucketlist['author'] ?>
			<br>
			Created at:
			<?= $bucketlist['created_at'] ?>
			<br>
			<a href="/bucketlists/delete/<?=$bucketlist['id']?>/">Delete</a>
			<br>
			<hr>
		 <?php } ?>
		</div>
		</center>
	</div>
</body>
</html>