<?php $data= $this->session->userdata('logged_in'); $flashSuccess =$this->session->flashdata('flashSuccess'); $username=$data['username'];if(!isset($allowedit)){$allowedit=false;} ?>
<!--   <pre>i am just here for tesing purposes</pre> -->
<?php //if($allowedit) echo'<h2 class="text-center">My Profile</h2>'?>
<?php 
    if(!$allowedit) 
        echo'<h2 class="text-center" style="text-transform:capitalize" >'.$fname.' '.$mname.' '.$lname.'</h2>';
    if($allowedit) 
        echo '<a href="/personal" style="padding:3px 12px" class="btn hidden-print btn-primary">Edit Basic Info</a>';

    $semesters = array("Zeroth","First","Second","Third","Fourth","Fifth","Sixth","Seventh","Eighth");
?> 
<div class="row" style="position:relative;font-size:1.1em">
    <div class="col-xs-8" > 
        <h1 style="margin-bottom:0"><?php 
                if ($fname) {  echo $fname." " ;}
                if ($mname) {  echo $mname." " ;}
                if ($lname) {  echo $lname ;}
            ?></h1>
        <?php 
            if ($email_add) { echo "&lt;<span>".$email_add."</span>&gt;" ;}
            echo "<span class='next-line' style='margin-right:50px'></span>";
            if ($phone) { 
                echo "<span class='next-line'>Phone:".$phone."</span>" ;
            }
        ?>
    </div>
    <div class="col-xs-4" style="margin-top:20px;font-size:1.1em;text-align:right">
        <div>
            <span><?php if ($gender==='M'){echo 'Male,' ;} ?><?php if ($gender==='F'){echo 'Female,' ;} ?></span>
            <span><?php if ($dob) { 
                $datetime1 = new DateTime("now");
                $datetime2 = new DateTime($dob);
                $interval = $datetime2->diff($datetime1);
                echo $interval->format("%y years old") ;
            }?>
            </span>
        </div> 
        <div>
            <span><?php if ($addl2) {  echo $addl2.", ".$city ;} ?> </span>
        </div>
    </div>
    <div class="col-xs-12" style="margin-top:5px" >
        <?php
            $string = "";
            if($cursem){
                $string.=$cursem==9?"Graduate in":$semesters[$cursem]." Semester ";
            }   
            if($branch){
                $string.=" ".$branch;
            }   
            if(strlen($string)>0){
                $string.=", ";
            }
            $string.="National Institute of Technology, Srinagar";
            echo $string;
        ?>
    </div>
    <legend></legend>
</div>
<div class="row top-margin">
    <!-- Academics -->
    <div class="col-xs-3 absolute" >
        <legend>Academics <?php 
            if($allowedit) echo '<a href="/academic" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div> 
    <div class="col-xs-9 col-xs-offset-3 line" style="">
        <table class="table">
            <thead>
                <th>Semester</th>
                <th>Score</th>
                <th>Semester</th>
                <th>Score</th>
            </thead>
            <tbody>
                <?php if($cursem > 1): ?>
                <tr>
                    <td>First</td>
                    <td><?php if ($sem1) {echo number_format($sem1,2);} ?></td>
                <?php endif ?>
                <?php if($cursem>2): ?>
                    <td>Second</td>
                    <td><?php if ($sem2) {echo number_format($sem2,2);} ?></td>
                <?php endif ?>
                </tr>
                <?php if($cursem>3): ?>
                <tr>
                    <td>Third</td>
                    <td><?php if ($sem3) {echo number_format($sem3,2);} ?></td>
                <?php endif ?>
                <?php if($cursem>4): ?>
                    <td>Fourth</td>
                    <td><?php if ($sem4) {echo number_format($sem4,2);} ?></td>
                <?php endif ?>
                </tr>
                <?php if($cursem>5): ?>
                <tr>
                    <td>Fifth</td>
                    <td><?php if ($sem5) {echo number_format($sem5,2);} ?></td>
                <?php endif ?>
                <?php if($cursem>6): ?>
                    <td>Sixth</td>
                    <td><?php if ($sem6) {echo number_format($sem6,2);} ?></td>
                <?php endif ?>
                </tr>
                <?php if($cursem>7): ?>
                <tr>
                    <td>Seventh</td>
                    <td><?php if ($sem7) {echo number_format($sem7,2);} ?></td>
                <?php endif ?>
                <?php if($cursem>8): ?>
                    <td>Eighth</td>
                    <td><?php if ($sem8) {echo number_format($sem8,2);} ?></td>
                <?php endif ?>
                </tr>
            </tbody>
        </table>
        <div style="font-size:1.1em">Overall CGPA:<b><?php if ($cgpa) {echo $cgpa;}?></b></div>
    </div>
</div>
<?php if($school_name1 or  $school_name2): ?>
<div class="row top-margin">
    <!-- Technical Skills -->
    <div class="col-xs-3 absolute" >
        <legend>School Education<?php 
            if($allowedit) echo '<a href="/educational" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div>
    <div class="col-xs-9 col-xs-offset-3 line">
    <table class="table">
        <thead>
            <th>Standard</th>
            <th>School Name</th>
            <th>Board</th>
            <th>Year</th>
            <th>Score</th>
        </thead>
        <tbody>
        <?php if($school_name1): ?>
            <tr>
                <td>12th</td>
                <td><?= $school_name1 ?></td>
                <td><?= $board1 ?></td>
                <td><?= $year1 ?></td>
                <td><?= $percentage1 ?></td>
            </tr>
        <?php endif ?> 
        <?php if($school_name2): ?>
            <tr>
                <td>10th</td>
                <td><?= $school_name2 ?></td>
                <td><?= $board2 ?></td>
                <td><?= $year2 ?></td>
                <td><?= $percentage2 ?></td>
            </tr>
        <?php endif ?> 
        </tbody>
    </table>
        
    </div>
</div>
<?php endif ?>
<?php if($Career_obj): ?>
<div class="row top-margin">
    <!-- Career objective -->
    <div class="col-xs-3 absolute" >
        <legend>Career Objective<?php 
            if($allowedit) echo '<a href="/aboutme" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div>
    <div class="col-xs-9 col-xs-offset-3 line">
        <pre class="pre"><?php echo $Career_obj ?></pre>     
    </div>
</div>
<?php endif ?>
<?php if($Technical_Skills): ?>
<div class="row top-margin">
    <!-- Technical Skills -->
    <div class="col-xs-3 absolute" >
        <legend>Technical Skills<?php 
            if($allowedit) echo '<a href="/aboutme" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div>
    <div class="col-xs-9 col-xs-offset-3 line">
        <pre class="pre"><?php echo $Technical_Skills; ?></pre>     
    </div>
</div>
<?php endif ?>
<?php if($Other_skills): ?>
<div class="row top-margin">
    <!-- Technical Skills -->
    <div class="col-xs-3 absolute" >
        <legend>Other Skills<?php 
            if($allowedit) echo '<a href="/aboutme" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div>
    <div class="col-xs-9 col-xs-offset-3 line">
        <pre class="pre"><?php echo $Other_skills; ?></pre>     
    </div>
</div>
<?php endif ?>
<?php if($eca): ?>
<div class="row top-margin">
    <!-- Technical Skills -->
    <div class="col-xs-3 absolute" >
        <legend>Extracurricular Activities<?php 
            if($allowedit) echo '<a href="/aboutme" style="float:right;padding:3px 12px" class="btn hidden-print btn-primary">Edit</a>'
        ?></legend>
    </div>
    <div class="col-xs-9 col-xs-offset-3 line">
        <pre class="pre"><?php echo $eca; ?></pre>     
    </div>
</div>
<?php endif ?>


