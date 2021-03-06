<!DOCTYPE html>
<html>
<head>
	<title>Siswa CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-light bg-dark">
		<a class="navbar-brand text-white">Home</a>
		<form class="form-inline" method="GET" action="/siswa">
			<input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>
	<?php if(session('sukses')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo e(session('sukses')); ?>

	</div>
	<?php endif; ?>
	<div class="container">

		<?php echo $__env->yieldContent('content'); ?>

	</div>	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /home/ricky/Desktop/laravel-crud-simple/resources/views/template.blade.php ENDPATH**/ ?>