<!doctype html>
<html lang="en">
<head>
		<title>Internship @ HP </title>
		<meta name="description" content="Login page">
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<?php include('templates/sources.php') ?>
  </head>

  <body style="background-color:#48cfad">
<?php include('templates/header.php') ?>

<div class="container" >
	<form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>

<?php include('templates/footer.php') ?>

<!-- JAVASCRIPT -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


</body></html>
