<?php
$data= $this->session->userdata('logged_in');
$flashSuccess =$this->session->flashdata('flashSuccess');
$username=$data['username'];
?>

   
   <form class="form-horizontal" role="form" action="personal/save" method="post" accept-charset="utf-8">
   	<fieldset>

   		<!-- Form Name -->
   		<legend>Personal Details</legend>

   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label"  for="fname">First Name</label>  
   			<div class="col-md-4">
   				<input id="fname" name="fname" value="<?php if ($fname){echo $fname ;} ?>" type="text" placeholder="First Name" class="form-control input-md" required="">

   			</div>
   		</div>

   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="mname">Middle Name</label>  
   			<div class="col-md-4">
   				<input id="mname" name="mname" value="<?php  if ($mname){echo $mname ;}?>" type="text" placeholder="Middle Name" class="form-control input-md">

   			</div>
   		</div>

   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label"  for="lname">Last Name</label>  
   			<div class="col-md-4">
   				<input id="lname" name="lname" value="<?php if ($lname) {  echo $lname ;}?>" type="text" placeholder="Last Name" class="form-control input-md" required="">

   			</div>
   		</div>


                  <!-- Multiple Radios (inline) -->
         <div class="form-group">
           <label class="col-md-4 control-label" for="gender">Gender</label>
           <div class="col-md-4"> 
             <label class="radio-inline" for="gender-0">
               <input type="radio" name="gender" id="gender-0" value="M" <?php if ($gender==='M'){echo 'checked="checked"' ;} ?>>
               M
             </label> 
             <label class="radio-inline" for="gender-1">
               <input type="radio" name="gender" id="gender-1" value="F" <?php if ($gender==='F'){echo 'checked="checked"' ;} ?>>
               F
             </label>
           </div>
         </div>


   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="dob">Date of Birth</label>  
   			<div class="col-md-4">
   				<input id="dob" name="dob" value="<?php if ($dob) {  echo $dob ;}?>" type="text" placeholder="YYYY/MM/DD" class="form-control input-md">
   			</div>
   		</div>

   		<!-- Textarea -->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="addl1">Address Line 1</label>
   			<div class="col-md-4">                     
   				<textarea class="form-control" id="addl1" name="addl1"><?php if ($addl1) {  echo $addl1 ;}?></textarea>
   			</div>
   		</div>

   		<!-- Textarea -->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="addl2">Address Line 2</label>
   			<div class="col-md-4">                     
   				<textarea class="form-control" id="addl2" name="addl2"><?php if ($addl2) {  echo $addl2 ;}?></textarea>
   			</div>
   		</div>

   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="city">City</label>  
   			<div class="col-md-4">
   				<input id="city" name="city" value="<?php if ($city) {  echo $city ;}?>" type="text" placeholder="City" class="form-control input-md">

   			</div>
   		</div>

   		<!-- Prepended text-->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="phone">Phone</label>
   			<div class="col-md-4">
   				<div class="input-group">
   					<span class="input-group-addon">+91</span>
   					<input id="phone" name="phone" value="<?php if ($phone) { echo $phone ;}?>" class="form-control" placeholder="Phone Number" type="text">
   				</div>

   			</div>
   		</div>

   		<!-- Text input-->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="email_add">Email Address</label>  
   			<div class="col-md-4">
   				<input id="email_add" name="email_add" style="text-transform: none;" value="<?php if ($email_add) { echo $email_add ;}?>" type="text" placeholder="Email Address" class="form-control input-md">

   			</div>
   		</div>

   		<!-- Button -->
   		<div class="form-group">
   			<label class="col-md-4 control-label" for="Save"></label>
   			<button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " type="submit">
          <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}else echo "Save Changes"; ?>
        </button>
   		</div>

   	</fieldset>
   </form>

</div>
