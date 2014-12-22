<?php $data=$this->session->userdata('logged_in'); $flashSuccess =$this->session->flashdata('flashSuccess'); $message =$this->session->flashdata('message'); ?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/datepicker.css">
<script type="text/javascript" src="/js/datepicker.js"></script>
<style>
.form-control[readonly] {
    cursor: text;
    
}
.margined40{
    margin-top: 40px;
}


</style>




<form class="form-horizontal" role="form" action="admin_feeds/save" method="post" accept-charset="utf-8">
    <fieldset>

        <!-- Form Name -->
        <legend>Create a new Announcement</legend>

        <div class="row">
            <div class="col-md-4 container-fliud">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="" for="gender">Notice is visible to</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-xs-4" for="type-0">
                            <input type="radio" name="type" id="type-0" value="1" checked> Students
                        </label>
                        <label class="col-xs-4" for="type-1">
                            <input type="radio" name="type" id="type-1" value="2"> Recruiters
                        </label>
                        <label class="col-xs-4" for="type-1">
                            <input type="radio" name="type" id="type-1" value="3"> Both
                        </label>
                    </div>
            </div>

            <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <label class="" for="heading">Heading</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                        <input required id="heading" name="heading" type="text" placeholder="Title" class="col-xs-12 form-control input-md">
                        </div>
                    </div>
            </div>

            <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <label for="date" class="">Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div id="datetimepicker1" class="col-md-10 col-md-offset-1 date">
                            <input type="text" data-date-format="yyyy-mm-dd" name="date" required class="form-control">
                        </div>
                    </div>
            </div>
        </div>





    <div class="row margined40">
            <div class="row">
                        <div class="col-md-12">
                        <label class="" for="Career_obj">Announcement Body</label>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-8">
                    <textarea rows="9" cols="34" class="form-control" id="Career_obj" data-validation="length" data-validation-length="max2000" name="data"></textarea>
                </div>
                <div class="col-md-4">
                <button id="save" name="save" class="btn btn-primary <?php if($flashSuccess){echo 'btn-success' ;} ?> " type="submit">
                    <?php if($flashSuccess){echo "<i class='glyphicon glyphicon-ok'></i>  Done " ;}else echo "Save Changes"; ?>
                </button>
            </div>
            </div> 

    </div>

    </fieldset>
</form>
<script type='text/javascript'>
$('#datetimepicker1 input').datepicker({
    format: 'yyyy-mm-dd'
});
</script>
