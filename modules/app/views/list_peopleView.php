

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>LIST PEOPLE</h3>
            </div>

        </div>

        <div class="clearfix"></div>
        <?php if (isset($success)) get_template_part("success"); ?>

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
                                        <th class="column-title">Last Name </th>
                                        <th class="column-title">First Name </th>
                                        <th class="column-title">Email Address </th>
                                        <th class="column-title">Job Title </th>
                                        <th class="column-title">Mobile Phone </th>
                                        <th class="column-title">Web Page </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($list_peoples as $people) { ?>
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class=" "><?php echo $people['last_name']; ?></td>
                                            <td class=" "><?php echo $people['first_name']; ?></td>
                                            <td class=" "><?php echo $people['email']; ?> <i class="success fa fa-long-arrow-up"></i></td>
                                            <td class=" "><?php echo $people['job_title']; ?></td>
                                            <td class=" "><?php echo $people['mobile_phone']; ?></td>
                                            <td class="a-right a-right "><?php echo $people['web_page']; ?></td>
                                            <td class=" last">
                                                <a href="?mod=app&c=people&a=edit&id=<?php echo $people['id']; ?>" target="_self">Edit</a>
                                                | 
                                                <a href="?mod=app&c=people&a=destroy&id=<?php echo $people['id']; ?>" target="_self">Delete</a>
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

