        <link href="<?php echo base_url('assets'); ?>/admin/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <div class="wrapper">
            <div class="container">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li>
                                        <a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        Style
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Style</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php }if($this->session->flashdata('error')){ ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                        <?php } ?>
                        <div class="panel panel-border panel-info">
                            <div class="panel-heading row">
                                <h4 class="m-t-0 header-title pull-left">Custom Style Css File </h4>
                                <!-- <button type="button" class="m-b-10 btn btn-info pull-right addNew">Add New Page</button> -->
                            </div>
                            <hr style="margin:0;">
                            <div class="table-responsive1">
                                <form action="" class="form-horizontal" method="post">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <textarea name="style" class="form-control" rows="15"><?php echo $dynamic; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-1 col-md-11">
                                                <input type="submit" name="Update" value="Update" class="btn btn-info">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div
                        </div>
                    </div> <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box package-edit hidden">
                            <h4 class="header-title"></h4>
                            <hr>
                            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-body">
                                    <!-- <div class="form-group">
                                        <label class="control-label col-md-3"> Logo
                                        </label>
                                        <div class="col-md-4">
                                            <img src="" class="img" height="60px" width="60px" style="cursor:pointer;">
                                        </div>
                                    </div>                        
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Change Logo
                                        </label>
                                        <div class="col-md-4">
                                            <input type="hidden" name="hdimg" value="">
                                            <input name="img" type="file" class="form-control" value="" />
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Name
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Title
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Description
                                        </label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="description" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Keywords</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="keywords" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Package Title</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="package_title" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Package </label>
                                        <div class="col-md-4">
                                            <select name="package" class="form-control">
                                                <option>--Select Package--</option>
                                                <?php if(!empty($package)){ foreach ($package as $key => $value) { ?>
                                                    <option value="<?php echo $value->ID; ?>"><?php echo $value->packageType." => ".$value->packageName; ?></option>
                                                <?php } } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Timeline </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="timeline" rows="10" ></textarea>
                                            <small id="emailHelp" class="form-text text-muted">[{"title":"DETAILED TRADEMARK CHECK","date":"2 to 4 working hours"},{"title":"TRADEMARK APPLICATION FILING ( TM )","date":"3 working days"}]</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Page Banner Left </label>
                                        <div class="col-md-9">
                                            <textarea id="editor" class="form-control" name="section1" rows="10" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Section 1</label>
                                        <div class="col-md-9">
                                            <textarea id="editor1" class="form-control editor" name="section2" rows="10" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Section 2</label>
                                        <div class="col-md-9">
                                            <textarea id="editor2" class="form-control" name="section3" rows="10" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Section 3</label>
                                        <div class="col-md-9">
                                            <textarea id="editor3" class="form-control" name="section4" rows="10" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label class="control-label col-md-3">Section 4</label>
                                        <div class="col-md-9">
                                            <textarea id="editor4" class="form-control" name="section5" rows="10" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3"> Status</label>
                                        <div class="col-md-4">
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox4" type="checkbox" name="Status" value="1">
                                                <label for="checkbox4">
                                                    Is Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="hidden" name="id" class="form-control">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                                            <button type="button" class="btn btn-default btn-cancel">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                    </div> <!-- end col -->
                </div>
<script src="<?php echo base_url('assets'); ?>/admin/plugins/toastr/toastr.min.js"></script>