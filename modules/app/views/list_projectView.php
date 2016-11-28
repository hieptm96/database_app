

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>LIST PROJECT </h3>
          <!--<a href="#">project/list</a>-->
      </div>


      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" id="search-form" class="form-control" placeholder="Search for...">
            <div id="search-result"></div>
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
            <script>
              $(document).ready(function(){
                $('#search-form').keyup(function(){
                  if($(this).val() != ''){
                    $.ajax({
                        url: "?mod=app&c=ajax&a=search_project",
                        type: "post",
                        dataType: "text",
                        data: {
                            query_string: $(this).val()
                        },
                        success: function (result) {
                            $('#search-result').html(result);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                    $('#search-result').show();
                  } else {
                    $('#search-result').hide();
                  }
                })
              });
            </script>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <?php if(isset($success)) get_template_part("success"); ?>
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <!--<h2>Table design <small>Custom design</small></h2>-->
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
                    <th class="column-title">Project Name </th>
                    <th class="column-title">Start Date </th>
                    <th class="column-title">Due date </th>
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
                    foreach($list_projects as $project){ 
                      $temp++;
                  ?>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" "><?php echo $temp; ?></td>
                    <td class=" "><a href="?mod=app&c=issue&a=index&project_id=<?php echo $project['id']; ?>" target="_self"><?php echo $project['name']; ?> </a></td>
                    <!--<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>-->
                    <td class=" "><?php echo $project['start_date']; ?></td>
                    <td class=" "><?php echo $project['target_end_date']; ?></td>
                    <!--<td class="a-right a-right ">$7.45</td>-->
                    <td class=" last">
                      <a href="?mod=app&c=project&a=edit&id=<?php echo $project['id']; ?>" target="_self">Edit</a>
                       | 
                      <a href="?mod=app&c=project&a=destroy&id=<?php echo $project['id']; ?>" target="_self">Delete</a>
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
</div>
<!-- /page content -->

