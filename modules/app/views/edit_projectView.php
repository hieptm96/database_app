 <div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Project</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit project <small>by admin</small></h2>
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

            <form class="form-horizontal form-label-left" action="?mod=app&c=project&a=update" method="POST">

             
              <!-- <span class="section">Project Info</span>  novalidate -->
                <input type="hidden" name="hidden_id" value="<?php echo $_GET['id'] ?>" />
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Projecct Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="" required="required" type="text" value="<?php if(isset($project)) echo $project['name']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="startdate">Start date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="startdate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="startdate" placeholder="" required="required" type="date" value="<?php if(isset($project)) echo $project['start_date']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="targetenddate">Due date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="targetenddate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="targetenddate" placeholder="" required="required" type="date" value="<?php if(isset($project)) echo $project['target_end_date']; ?>">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="actualenddate">Actual End date <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="actualenddate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="actualenddate" placeholder="" required="required" type="date" value="<?php if(isset($project)) echo $project['actual_end_date']; ?>">
                </div>
              </div>
              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="createon">Create On <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="createon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="createon" placeholder="" required="required" type="date">
                </div>
              </div> -->
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="createby">Create By <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="createby" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="createby" placeholder="" required="required" type="text" value="<?php if(isset($project)) echo $project['created_by']; ?>">
                </div>
              </div>
              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modifiedon">Modified On <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="modifiedon" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="modifiedon" placeholder="" required="required" type="date">
                </div>
              </div> -->
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="modifiedby">Modified By <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="modifiedby" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="modifiedby" placeholder="" required="required" type="text" value="<?php if(isset($project)) echo $project['modified_by']; ?>">
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