<?php

if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} 
	
	else {
		mail("scotcorm@uw.edu", "Add to Email List", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
		Message: ".$_POST['message']);
		
		{
		$result='<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>';
		}
	}


}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  
    
    <section id="contact">
    	<div class="container">
    
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    				<h1>Contact Form</h1>
    				
    				<?php echo $result;?>
    				
    				<p>Send a message via the form below</p>
    				
    				<form method="post" role="form">
    				
    					<div class="form-group">
    						<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
    					</div>
    					
    					<div class="form-group">
    						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
    					</div>
    					
    					<div class="form-group">
    						<textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?></textarea>
    					</div>
    					
    					<div class="checkbox">
    						<label>
    							<input type="checkbox" name="check"> I am human
    						</label>
    					</div>
    					
    					<div align="center">
    					<input type="submit" name="submit" class="btn btn-secondary" value="send message"/>
    					</div>
    					
    				</form>
    				
    			</div>
    		</div>
    
    	</div>
    </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
      
  </body>
</html>