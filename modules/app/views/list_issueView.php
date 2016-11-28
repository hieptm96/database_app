

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
          <h1 style="color: black;">Mio::sabeevo::robotnaut</h1>
      </div>
      
    </div>

    <div class="clearfix"></div>
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li><a href="#home" role="tab" data-toggle="tab">OVERVIEW</a></li>
      <li class="active"><a href="#profile" role="tab" data-toggle="tab">ISSUES</a></li>
      <li><a href="#messages" role="tab" data-toggle="tab">NEW ISSUE</a></li>
      <li><a href="#settings" role="tab" data-toggle="tab">DOCUMENT</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane" id="home">
            <div class="col-md-6">
                <div class="issue-tracking">
                    <h3>Issue tracking</h3>
                    <ul>
                        <li>Bug: <?php echo $number_issues_bug; ?> open</li>
                        <li>Feature: <?php echo $number_issues_feature; ?> open</li>
                        <li>Support: <?php echo $number_issues_support; ?> open</li>
                    </ul>
                    <p><a href="">View all issues</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="members">
                    <h3>Members</h3>
                    <ul>
                        <?php foreach($list_members as $member){ ?>
                        <li><a href="#"><?php echo $member['last_name'].' '.$member['first_name']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane active" id="profile">
            <?php if(isset($success)) get_template_part("success"); ?>
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

                      <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                      <div class="table-responsive">
                              <table class="table table-striped jambo_table bulk_action">
                                  <thead>
                                          <tr class="headings">
                                              <th>
                                                  <input type="checkbox" id="check-all" class="flat">
                                              </th>
                                              <th class="column-title">STT </th>
                                              <th class="column-title"># </th>
                                              <th class="column-title">Title </th>
                                              <th class="column-title">Assignee </th>
                                              <th class="column-title">Status </th>
                                              <th class="column-title">Tracker </th>
                                              <th class="column-title">Opened Date </th>
                                              <th class="column-title">Updated </th>
                                              <th class="column-title">Due Date </th>
                                              <th class="column-title no-link last"><span class="nobr">Action</span>
                                              </th>
                                              <th class="bulk-actions" colspan="7">
                                                  <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                              </th>
                                          </tr>
                                  </thead>

                                  <tbody>
                                      <?php 
                                          $temp = 0;
                                          foreach($list_issues as $issue){ 
                                              $temp++;
                                      ?>
                                          <tr class="even pointer">
                                              <td class="a-center ">
                                                  <input type="checkbox" class="flat" name="table_records">
                                              </td>
                                              <td class=" "><?php echo $temp; ?></td>
                                              <td class=" "><?php echo $issue['id']; ?></td>
                                              <td class=" "><?php echo $issue['title']; ?></td>
                                              <td class=" "><?php echo $issue['first_name']; ?></td>
                                              <td class=" "><?php echo $issue['status']; ?></td>
                                              <td class=" "><?php echo $issue['tracker']; ?></td>
                                              <td class=" "><?php echo $issue['open_date']; ?></td>
                                              <td class=" "><?php echo $issue['modified_date']; ?></td>
                                              <td class=" "><?php echo $issue['target_end_date']; ?></td>
                                              <td class=" last">
                                                <a href="?mod=app&c=project&a=edit&id=<?php echo $issue['id']; ?>" target="_self">Edit</a>
                                                 | 
                                                <a href="?mod=app&c=project&a=destroy&id=<?php echo $issue['id']; ?>" target="_self">Delete</a>
                                              </td>
                                          </tr>
                                          <?php } ?>
                                  </tbody>
                              </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="tab-pane" id="messages">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Issue <small>by To Hiep</small></h2>
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

                    <form class="form-horizontal form-label-left" method="POST" action="?mod=app&c=issue&a=create">
                        <input type="hidden" name="hidden_id" value="<?php echo $_GET['project_id']; ?>" />
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tracker">Tracker <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="tracker">
                                <option value="Feature">Feature</option>
                                <option value="Bug">Bug</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="title" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="description" name="description" required="required" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="status">
                                <option value="To do">To do</option>
                                <option value="Doing">Doing</option>
                                <option value="Pause">Pause</option>
                                <option value="Resolve">Resolve</option>
                            </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="priority">Priority <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="priority">
                                <option value="Normal">Normal</option>
                                <option value="Low">Low</option>
                                <option value="High">High</option>
                            </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="assignee">Assignee <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control col-md-7 col-xs-12" name="assigned_to">
                                <option></option>
                                <?php foreach($list_members as $member){ ?>
                                <option value="<?php echo $member['id']; ?>"><?php echo $member['first_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opened_date">Start date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="opened_date" name="opened_date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="target_end_date">Due date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="target_end_date" name="target_end_date" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                          <button id="send" type="reset" class="btn btn-success">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="tab-pane" id="settings">
            DOCUMENT
        </div>
    </div>

    

    
  </div>
</div>
<!-- /page content -->

