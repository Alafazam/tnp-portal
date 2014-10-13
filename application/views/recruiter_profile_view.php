<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Company_name">Company Name</label>  
  <div class="col-md-5">
  <input id="Company_name" name="Company_name" type="text" placeholder="Company Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="website_link">Website Link</label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon">www.</span>
      <input id="website_link" name="website_link" class="form-control" placeholder="example.com" type="text">
    </div>
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Company_Type">Company Type</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Company_Type-0">
      <input type="radio" name="Company_Type" id="Company_Type-0" value="1.Private Sector" checked="checked">
      1.Private Sector
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-1">
      <input type="radio" name="Company_Type" id="Company_Type-1" value="2.Start-up">
      2.Start-up
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-2">
      <input type="radio" name="Company_Type" id="Company_Type-2" value="3.Government">
      3.Government
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-3">
      <input type="radio" name="Company_Type" id="Company_Type-3" value="4.Public Sector">
      4.Public Sector
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-4">
      <input type="radio" name="Company_Type" id="Company_Type-4" value="5.MNC (Indian Origin)">
      5.MNC (Indian Origin)
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-5">
      <input type="radio" name="Company_Type" id="Company_Type-5" value="6.MNC (Foreign Origin)     7.Others">
      6.MNC (Foreign Origin)
    </label>
  </div>
  <div class="radio">
    <label for="Company_Type-6">
      <input type="radio" name="Company_Type" id="Company_Type-6" value="">
      7.Others
    </label>
  </div>
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Industry_Sector">Industry Sector</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Industry_Sector-0">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-0" value="1.Analytics" checked="checked">
      1.Analytics
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-1">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-1" value="2.Consulting">
      2.Consulting
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-2">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-2" value="3.Core (Technical)">
      3.Core (Technical)
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-3">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-3" value="4.Finance">
      4.Finance
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-4">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-4" value="5.IT">
      5.IT
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-5">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-5" value="6.Management">
      6.Management
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-6">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-6" value="7.Teaching &amp; Research">
      7.Teaching &amp; Research
    </label>
  </div>
  <div class="radio">
    <label for="Industry_Sector-7">
      <input type="radio" name="Industry_Sector" id="Industry_Sector-7" value="8.Other">
      8.Other
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Brief">Brief write-up on the Company (50 -75 words)</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Brief" name="Brief"></textarea>
  </div>
</div>

</fieldset>
</form>
