<?php if (!isset($message)) {
$message = $this->session->flashdata('message');
}

 ?>
     <link href="/css/signin.css" rel="stylesheet">

    <div class="container-fluid" style="margin-top:70px;">
        <form method="POST" class='form-signin' action="change_pwd/verify">
            <h1 class="form-signin-heading" >Change Password</h1>
                        <input type="password"  class="form-control " placeholder="old Password" required autofocus id="password" name="oldpassword"/>            
                    	<input type="password"  class="form-control " placeholder="New Password" required  id="password2" name="newpassword"/>
                        <input type="password" class="form-control" placeholder="Confirm Password" id="c_newpassword" required name="c_newpassword"/>
                    	<input class="btn btn-lg  col-md-6 btn-primary btn-block" type="submit" value="Change Password" />
                </form>
    </div>

 
</body>
</html>
