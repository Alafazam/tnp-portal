<div class="container-fluid" >
    <form method="POST" class='form-horizontal' action="admin_create_a_login/create">


<fieldset>

  
        <h1 class="form-signin-heading">Create New Login</h1>

        <div class="form-group">
            <label class="col-md-4 control-label" for="type">This login is for</label>
            <div class="col-md-4">
                <label class="radio-inline" for="type-0">
                    <input type="radio" name="type" id="type-0" value="recruiter" checked>Recruiter
                </label>
                <label class="radio-inline" for="type-1">
                    <input type="radio" name="type" id="type-1" value="student">Student
                </label>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-4 control-label" for="username">Username</label>
            <div class="col-md-4">
                <input required id="username" name="username" type="text" placeholder="Username" class="form-control input-md">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Password">Password</label>
            <div class="col-md-4">
                <input type="password" class="form-control " placeholder="New Password" required id="password2" name="newpassword" />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="Confirm Password">Confirm Password</label>
            <div class="col-md-4">
                <input type="password" class="form-control" placeholder="Confirm Password" id="c_newpassword" required name="c_newpassword" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">(IF STUDENT) ENROLL</label>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Enroll" id="enroll"  name="enroll"  />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="">(IF STUDENT) Year of Admission</label>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Year of Admission" id="Year of Admission"  name="year_of_admin" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="save"></label>
            <div class="col-md-4">
                <button id="save" name="save" class="btn btn-primary " type="submit">Save</button>
            </div>
        </div>

    </fieldset>
    </form>
</div>
