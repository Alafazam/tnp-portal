<?php 
$data = $jobs;
 ?>


<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>

<table class="table">
  <?php 
if (isset($data)&&$data) {


  $data1 = $data[0]; 
  echo '
    <thead>
        <tr>
         ';
  foreach ($data1 as $key => $value) {
    echo '    
       <th class="col-md-2">'.$key.'</th>';

  };
  echo '
        </tr>
      </thead>
      <tbody>
      <div class="list-group">';

  foreach ($data as $key => $value) {
      echo '
      <tr>';
      foreach ($value as $value2) {
      echo '
      <td>'.$value2.'</td>
      ';  
      }
      echo '
      </tr>';
    }  







}




      ?>


    </div>
        
      </tbody>
    </table>
  </div>