<?php 
$data = array('jobs' =>$jobs ,'student_jobs'=>$student_jobs,'users'=>$users);

var_dump($data);



 ?>


<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>

<table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Branch</th>
          <th>Career objective</th>
          <th>Profile</th>
          <th>Cover Letter</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>


      <div class="list-group">
<?php 
if (isset($users)&&$users) {

      // for ($i=0; $i <35 ; $i++) { 
        
      foreach ($users as $key)
            {   
          
            echo '
          <tr>
            <td>'.$key["FNAME"].' '.$key["LNAME"]'</td>
            <td>'.$key["branch"].'</td>
            <td>'.$key["Career_obj"].'</td>
            <td><a href="/recruiter_applicants/delete/'.$key["username"].'/'.$key["job_id"].'" style="float:right;padding:3px 12px" class="btn btn-primary">Delete</a></td>
            <td>'.$key["cover_letter"].'</td>
          </tr>'
        ;




            } 
}
      ?>


        
      </tbody>
    </table>
    </div>