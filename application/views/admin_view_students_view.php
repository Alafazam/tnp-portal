

<div class="container">
    <form class="form-inline">
        <!-- <div class="form-group">
      <label class="sr-only" for="type">Program:</label>
      <select id="type" name="type" class="form-control">
          <option value="B.Tech">B.Tech</option>
          <option value="M.Tech">M.Tech</option>
      </select>
    </div> -->
        <div class="form-group">
            <label class="" for="Branch">Branch:</label>
            <select id="branch" name="branch" class="form-control">
                <!-- SE,EPS,CIT,MSD -->
                <option value="IT">IT</option>
                <option value="CHE">CHE</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EE">EE</option>
                <option value="MEC">MEC</option>
                <option value="MME">MME</option>
            </select>
        </div>
        <div id="get"class="btn btn-primary">Submit</div>
    </form>
</div>


<div class="container-fluid" style="padding-left:5px;">
    <h2 class="text-center"></h2>
    <legend></legend>
    <style>
    table {
        table-layout: fixed;
        word-wrap: break-word;
    }
    </style>

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="col-md-3">Student Name</th>
                <th class="col-md-3">Enroll</th>
                <th class="col-md-3">Batch</th>
                <th class="col-md-3">Action</th>
            </tr>
        </thead>
        <tbody id="List">
        </tbody>
    </table>
</div>
<script type="text/javascript">
  
 $("#get").click(function(event) {
  $("#List").html('');
  var branch = $("#branch")[0].value;
  jQuery.post('/admin_view_students/load_ajax_shit', {'branch': branch}, function(data, textStatus, xhr) {
    data = jQuery.parseJSON(data);
    for (var i =0;i<data.length;i++) {
      var res  = data[i];
      $("#List").append("<tr><td id='name'>" + res["FNAME"] +" " + res["MNAME"] + " " + res["LNAME"] + "</td><td id='enroll'>"+ res["enroll"] + "</td><td id='batch'>"+ res["year_of_admin"] + "</td><td id='action'><a href='/profile/view/"+ res["username"]+"' style='padding:3px 12px' class='btn btn-danger'>View Profile</a></td></tr>");
    };
    //optional stuff to do after success
  });
  console.log("Na na na don't cheat");
 });


</script>