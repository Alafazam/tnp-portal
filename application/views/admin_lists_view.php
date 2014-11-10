<div class="container-fluid">
    <h2 class="text-center"></h2>
    <legend></legend>

  <?php 
if (isset($lists)&&$lists) {
  $data1 = $lists[0]; 
  echo '
    <table class="table">
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
  foreach ($lists as $key => $value) {
    echo '
        <tr>';
    foreach ($value as $value2) {
      echo '
          <td>'.$value2.'</td>';  
    }
    echo '
        </tr>';
  }
  echo '</div></tbody></table>';
} ?>  
  </div>

  