<?php 
$data = array('jobs' =>$jobs ,'student_jobs'=>$student_jobs,'users'=>$users);

 ?>


<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>

<table class="table">
      <thead>
        <tr>
          <th class="col-md-2">Name</th>
          <th class="col-md-1">Branch</th>
          <th class="col-md-4">Career objective</th>
          <th class="col-md-4">Cover Letter</th>
          <th class="col-md-1">Action</th>
        </tr>
      </thead>
      <tbody>
<?php 
if (isset($users)&&$users) {

      // for ($i=0; $i <35 ; $i++) { 
        
      foreach ($users as $key)
            {   
          
            echo '
          <tr>
          <td><a href="/profile/view/.'.$key["username"].'">'.$key["FNAME"].' '.$key["LNAME"].'</a></td>
            <td>'.$key["branch"].' </td>
            <td>'.$key["Career_obj"].'</td>
            <td>'.$key["cover_letter"].'</td>
            <td><a href="/recruiter_applicants/delete/'.$key["username"].'/'.$key["job_id"].'" style="padding:3px 12px" class="btn btn-primary">Delete</a></td>
          </tr>'
        ;




            } 
}
      ?>


    </div>
        
      </tbody>
    </table>
  </div>