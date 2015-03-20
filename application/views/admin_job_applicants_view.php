
<style type="text/css">
  
 @media print {
    table {
        font-family: georgia, serif;
        font-size: 20px;
    }
}
</style>

<?php
if (isset($users) && $users) {
    
    echo ' <table class="table table-hover">
        <thead>
            <tr>
                <th class="col-md-6">Student Name</th>
                <th class="col-md-2">Enroll</th>
                <th class="col-md-2">Batch</th>
                <th class="col-md-2">Branch</th>
            </tr>
        </thead>
        <tbody >';
    
    foreach ($users as $key) {
        
        echo '
              <tr>
              <td><a href="/profile/view/' . $key["username"] . '">' . $key["FNAME"] . ' ' . $key["MNAME"] . ' ' . $key["LNAME"] . '</a></td>
              <td>' . $key["enroll"] . '</td>
              <td>' . $key["year_of_admin"] . '</td>
              <td>' . $key["branch"] . '</td>
              </tr>';
    }
    
    echo "</tbody></table>";
}
?>
</div>
