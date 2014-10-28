  <!-- <h4 class="text-center"><small>Logistics Requirements</small></h4> -->
        <legend>Logistics Requirements</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Members">Number of Members</label>
            <div class="col-md-4">
                <input required id="Number of Members" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($number_of_members)) { echo "value='".$number_of_members."'"; } ?> name="number_of_members" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Number of Rooms required for selection process">Number of Rooms required for selection process</label>
            <div class="col-md-4">
                <input required <?php if ($approved) { echo "readonly"; } ?> id="Number of Rooms required for selection process" <?php if (isset($number_of_rooms)) { echo "value='".$number_of_rooms."'"; } ?> name="number_of_rooms" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Other Requirements">Other Requirements</label>
            <div class="col-md-4">
                <input  id="Other Requirements" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($other_requirements)) { echo "value='".$other_requirements."'"; } ?> name="other_requirements" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Name">Name</label>
            <div class="col-md-4">
                <input required id="Name" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_name)) { echo "value='".$contact_name."'"; } ?> name="contact_name" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Designation">Designation</label>
            <div class="col-md-4">
                <input id="Designation" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_designation)) { echo "value='".$contact_designation."'"; } ?> name="contact_designation" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Email Address">Email Address</label>
            <div class="col-md-4">
                <input required id="Email Address" style="text-transform:none;" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_email)) { echo "value='".$contact_email."'"; } ?> name="contact_email" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Contact Number (Mobile)">Contact Number (Mobile)</label>
            <div class="col-md-4">
                <input required id="Contact Number (Mobile)" <?php if ($approved) { echo "readonly"; } ?> <?php if (isset($contact_number)) { echo "value='".$contact_number."'"; } ?> name="contact_number" type="text" placeholder="" class="form-control input-md">

            </div>
        </div>
