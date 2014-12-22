<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>


<?php 
if (isset($jobs)&&$jobs) {
  
  echo ' <table class="table table-hover">
              <thead>
                <tr>
                  <th class="col-md-3">Company Name</th>  
                  <th class="col-md-2">Designation</th>
                  <th class="col-md-2">CTC</th>
                  <th class="col-md-2">Last Date</th>
                  <th class="col-md-2">Status</th>
                  <th class="col-md-1">Action</th>
                </tr>
              </thead>
              <tbody>

      <div class="list-group">';
        
    foreach ($jobs as $key)
    {   
          $deadline = new DateTime($key["application_dead_line"]);
        $deadline1 = $deadline->format('d-m-y');
        
        if ($key["approved"]=='1') {
          $text = 'class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Approved';
        }else{
          $text = 'class="btn btn-danger"><span class="glyphicon glyphicon-time"></span> Not yet Approved';
        }

            echo '      
          <tr>
          <td><a href="/recruiters/view/'.$key["r_id"].'">'.$company_names["".$key["r_id"].""].'</a></td>  
          <td><a href="/admin_jobs/view/'.$key["job_id"].'">'.$key["job_desig"].'</a></td>
          <td>'.$key["ctc"].'</td>  
          <td>'.$deadline1.'</td>
          <td>
            <a href="admin_jobs/approveJob/'.$key["job_id"].'" style="padding:3px 12px"  '.$text.'</a></td>
          <td><a href="#'.$key["job_id"].'" style="padding:3px 12px" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>

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