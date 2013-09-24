<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ping App | Log In</title>
  <link rel="stylesheet" href="/media/css/app.css">
  <script src="/media/js/vendor/custom.modernizr.js"></script>
</head>
<body>
	<div class="row">
		<div class="large-6  large-centered  columns">
			<div class="logo-image">
				<h2>Ping App</h2>
			</div>
			<?php if (isset($errors)): ?>
			<div data-alert class="alert-box alert">
				<?php foreach ($errors as $error): ?>
				&middot; <?php echo $error; ?><br />
				<?php endforeach; ?>
				<a href="#" class="close">&times;</a>
			</div>
			<?php endif; ?>

			<?php echo Form::open(NULL, array('class' => 'custom')); ?>	
				<?php echo Form::hidden('token', Security::token()); ?>
				<fieldset>
					<legend>Log In</legend>
					<div class="row">
						<div class="large-12 columns">
							<label>Username</label>
							<input type="text" name="username" value="<?php echo (isset($username)) ? $username : ''; ?>" id="username" placeholder="username / email">
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							<label>Password</label>
							<input type="password" name="password" id="password" placeholder="password">
						</div>
					</div>
				</fieldset>
				<div class="row">
					<div class="large-12 columns">
						<button class="button  expand">Submit</button>
					</div>
				</div>
			<?php echo Form::close(); ?>	
		</div>
	</div>

	<script>
		document.write('<script src=' +
		('__proto__' in {} ? '/media/js/vendor/zepto' : '/media/js/vendor/jquery') +
		'.js><\/script>')
	</script>
  
	<script src="/media/js/foundation/foundation.js"></script>
	<script src="/media/js/foundation/foundation.abide.js"></script>
	<script src="/media/js/foundation/foundation.alerts.js"></script>
	<script src="/media/js/foundation/foundation.clearing.js"></script>
	<script src="/media/js/foundation/foundation.cookie.js"></script>
	<script src="/media/js/foundation/foundation.dropdown.js"></script>
	<script src="/media/js/foundation/foundation.forms.js"></script>
	<script src="/media/js/foundation/foundation.interchange.js"></script>
	<script src="/media/js/foundation/foundation.joyride.js"></script>
	<script src="/media/js/foundation/foundation.magellan.js"></script>
	<script src="/media/js/foundation/foundation.orbit.js"></script>
	<script src="/media/js/foundation/foundation.placeholder.js"></script>
	<script src="/media/js/foundation/foundation.reveal.js"></script>
	<script src="/media/js/foundation/foundation.section.js"></script>
	<script src="/media/js/foundation/foundation.tooltips.js"></script>
	<script src="/media/js/foundation/foundation.topbar.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
