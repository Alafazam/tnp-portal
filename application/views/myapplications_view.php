<?php 
$data = array('application' =>$application ,'company_names'=>$company_names,'jobs'=> $jobs);

// var_dump($data);
 ?>


<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>


<?php 
if (isset($application)&&$application) {

  echo ' <table class="table">
              <thead>
                <tr>
                  <th class="col-md-3">Company Name</th>  
                  <th class="col-md-2">Designation</th>
                  <th class="col-md-2">Ctc/Stipend</th>
                  <th class="col-md-4">Cover Letter</th>
                  <th class="col-md-1">Action</th>
                </tr>
              </thead>
              <tbody>

      <div class="list-group">';
        
      foreach ($application as $key)
            {   
          
            echo '
           
          <tr>
          <td><a href="/recruiters/view/'.$key["r_id"].'">'.$company_names["".$key["r_id"].""].'</a></td>  
          <td><a href="/jobs/view/'.$key["job_id"].'">'.$jobs["".$key["job_id"].""]["job_desig"].'</a></td>
          <td>'.$jobs["".$key["job_id"].""]["ctc"].'</td>  
          <td>'.$key["cover_letter"].'</td>
          <td><a href="/myapplications/delete/'.$key["job_id"].'" style="padding:3px 12px" class="btn btn-primary">Delete</a></td>

            </tr>'
        ;
          } 
    }else{
      echo "No applications.";
    }

      ?>


    </div>
        
      </tbody>
    </table>
  </div>