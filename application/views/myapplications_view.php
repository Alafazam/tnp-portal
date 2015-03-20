
<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>


<?php

if (isset($application) && $application) {
    
    echo ' <table class="table">
              <thead>
                <tr>
                  <th class="col-md-3">Company Name</th>  
                  <th class="col-md-2">Designation</th>
                  <th class="col-md-2">Ctc/Stipend</th>
                  <th class"col-md-2">Eligible Departments</th>
                  <th class="col-md-2">Date</th>
                  <th class="col-md-1">Action</th>
                </tr>
              </thead>
              <tbody>

      <div class="list-group">';
    
    foreach ($application as $key => $value) {
        
        $res = $jobs[$key];
        if (!isset($res["date"]) && !$res["date"]) {
            $res["date"]     = "Not Planned";
        }
        echo '
           
          <tr>
          <td><a href="/recruiters/view/' . $key["r_id"] . '">' . $res["Company_name"] . '</a></td>  
          <td><a href="/jobs/view/' . $key["job_id"] . '">' . $res["job_desig"] . '</a></td>
          <td>' . $res["ctc"] . '</td>
          <td>' . $res["eligible_departments"] . '</td>  
          <td>' . $res["date"] . '</td>
          <td><a href="/myapplications/delete/' . $key["job_id"] . '" style="padding:3px 12px" class="btn btn-danger">Delete</a></td>

            </tr>';
    }
} else {
    echo "No applications.";
}
?>


    </div>
        
      </tbody>
    </table>
  </div>