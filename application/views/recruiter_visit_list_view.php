<style>
	.company_name{
		font-size: 24px;
		margin-right: 10px;
	}
</style>

<div class="container-fluid">
		<h2 class="text-center">Our visits</h2>
		<legend></legend>


		
<?php
if (isset($data) && $data) {
		
		echo "<table class='table'>
			      <thead>
			        <tr>
			          <th class='col-md-4'>Job Designation</th>
			          <th class='col-md-4'>Visiting Date</th>
			          <th class='col-md-3'>Assinged Contact Person</th>
			          <th class='col-md-1'>Action</th>
			        </tr>
			      </thead>
			      <tbody>";
		
		foreach ($data as $key) {
			if (!isset($key["date"])||$key["date"]==NULL) {
				$key["date"] = "plan here";
			}
				echo '
		          <tr>
		          <td><a href="/recruiter_myjobs/view/' . $key["job_id"] . '">' . $key["job_desig"] . '</a></td>
		          <td><a href="/recruiter_visit/view/' . $key["job_id"] . '"> ' . $key["date"] . '</a> </td>
    	          <td>' . $key["contact_name"] . '</td>
		          <td><a href="/recruiter_visit/cancle/' . $key["job_id"] . '"style="padding:3px 12px" class="btn btn-danger">Delete  <span class="glyphicon glyphicon-remove"></span></a></td>
		          </tr>';
		}

		echo "
	</tbody>
</table>

		";
}
?>

		<div>
			<a href="/recruiter_visit/plan">Want to plan a new visit?</a>
		</div>

		</div>