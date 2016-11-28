    

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit people</h3>
      </div>
      
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="?mod=app&c=people&a=update" method="POST">

             
              <!-- <span class="section">Project Info</span>  novalidate -->
                <input type="hidden" name="hidden_id" value="<?php echo $_GET['id'] ?>" />
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first_name">First name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="first_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="first_name" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['first_name']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Last name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="last_name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="last_name" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['last_name']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company">Company <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="company" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="company" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['company']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['email']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="job_title">Job Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="job_title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="job_title" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['job_title']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_phone">Mobile Phone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="mobile_phone" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="mobile_phone" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['mobile_phone']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fax_number">Fax Number <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="fax_number" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fax_number" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['fax_number']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="address" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="address" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['address']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="web_page">Web Page <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="web_page" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="web_page" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['web_page']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="note">Note <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="note" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="note" placeholder="" required="required" type="text" value="<?php if(isset($people)) echo $people['note']; ?>">
                </div>
              </div>
              
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button id="send" type="submit" class="btn btn-success" name="submit">Update</button>
                  <button type="reset" class="btn btn-primary">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!-- /page content -->

