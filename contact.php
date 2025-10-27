 <?php
   include_once('./includes/headerNav.php')
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<h1>Visit Us</h1>
	<div class="row">
		<div class="span4">
		<h4>Contact Details</h4>
		<p>	Ganesh Colony,<br/> Jalgaon, 425001
			<br/><br/>
			nikita@gmail.com<br/>
            Mobile 0123456789 <br>
			﻿Tel 123-456-6780<br/>
		</p>		
		</div>
			
		<div class="span4">
		<h4>Opening Hours</h4>
			<h5> <u>Monday - Friday</u> </h5>
			<p>09:00am - 09:00pm<br/><br/></p>
            <h4>Closing Days</h4>
			<h5> <li>Saturday</li></h5>
			<h5> <li>Sunday</li> </h5>
	
		</div>
		<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="name" name='name' class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="email" name='email' class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="subject" name='subject' class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name='message' class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit" value='submit' name='submit'>Send Messages</button>

        </fieldset>
      </form>
		</div>
	</div>
	<?php

if(isset($_POST['submit']))    {
    $sql = $conn->prepare("INSERT INTO email (name,email,subject,message) VALUES (?,?,?,?)");
 
    //sending value in ??? format will prevent injection
    $sql->bind_param('ssss',$_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
    if($sql->execute()){
        echo "<h3 style='text-align:center'>Email Sent Successfully...</h3>";
    };
 
    $conn->close();
    $sql->close(); 
}

?>

</div>
</div>
<!-- MainBody End ============================= -->

<!-- Footer ================================================================== -->
<?php
   include_once('./includes/footer.php')
?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>