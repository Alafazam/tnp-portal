<div class="container-fluid">
  

  
</div>






<div class="container-fluid" style="padding-left:5px;">
    <h2 class="text-center"></h2>
    <legend></legend>
    <style>table {
    table-layout: fixed;
    word-wrap: break-word;
}</style>
  <?php 
if (isset($result)&&$result&&isset($cal)&&$cal) {
 
  echo ' <table class="table table-hover">
              <thead>
                <tr>
                  <th class="col-md-3">Company Name</th>  
                  <th class="col-md-2">Company Type</th>
                  <th class="col-md-3">Branches Eligible</th>
                  <th class="col-md-2">Visiting on</th>
                  <th class="col-md-2">Applications</th>
                  <th class="col-md-3">Action</th>
                </tr>
              </thead>
              <tbody>

      <div class="list-group">';
        
    foreach ($result as $key)
    {   
      $branch = str_replace(",", ", ", $key["branchez"]);
            echo '      
          <tr>
          <td><a href="/recruiters/view/'.$key["r_id"].'">'.$key["Company_name"].'</a></td>  
          <td>'.$key["Company_type"].'</td>
          <td>'.$branch.'</td>
          <td>'.$cal[$key["r_id"]].'</td>
          <td></td>
          <td><a href="/admin_view_list/action_delete/'.$key["r_id"].'" style="padding:3px 12px" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>

            </tr>'
        ;
    } 
  }else{
    echo "No applications.";
  }





?>  
  </div>

