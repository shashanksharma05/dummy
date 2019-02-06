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
                                        Pages
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pages</h4>
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
                                <h4 class="m-t-0 header-title pull-left">ALL Pages LIST </h4>
                                <button type="button" class="m-b-10 btn btn-info pull-right addNew">Add New Page</button>
                            </div>
                            <hr style="margin:0;">
                            <div class="table-responsive1">
                                <table class="table table-colored table-centered table-info m-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Page Name</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Keywords</th>
                                            <th>Time</th>
                                            <th>Update</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($Data)){ foreach($Data as $k=>$page){ 
                                            if($page->Status==1){$label='success';$status='Active';$action='danger';$actionStatus='Inactive';}else{$label='danger';$status='Inactive';$action='success';$actionStatus='Active';} ?>
                                        <tr class="gradeX">
                                            <td><?php echo $k+1; ?></td>
                                            <td class="pname"><?php echo $page->name; ?></td>
                                            <td class="ptitle"><?php echo $page->title; ?></td>
                                            <td class="pdescription"><?php echo $page->description; ?></td>
                                            <td class="pkeywords"><?php echo $page->keywords; ?></td>
                                            <td class="pentry"><?php echo $page->entry; ?></td>
                                            <td><?php echo $page->update_time; ?></td>
                                            <td class="status"><span class="label label-<?php echo $label; ?>"><?php echo $status; ?></span></td>
                                            <td class="actions">
                                                <div class="dropdown" id="<?php echo $page->page_meta_id; ?>">
                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <i class="caret"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="active text-<?php echo $action; ?> action-row" href="javascript:void(0)"><?php echo $actionStatus; ?></a></li>
                                                        <li><a class="active text-info edit-row" href="javascript:void(0)">Edit</a></li>
                                                    </ul>
                                                </div>
                                                <input class="package" name="package" value="<?php echo $page->package; ?>" type="hidden">
                                                <input class="package_title" name="package_title" value="<?php echo $page->package_title; ?>" type="hidden">
                                                <input class="package_content" name="package_content" value="<?php echo $page->package_content; ?>" type="hidden">
                                                <input class="short_title" name="short_title" value="<?php echo $page->short_title; ?>" type="hidden">
                                                <textarea style="display: none;" class="timeline"><?php echo $page->timeline; ?></textarea>
                                                <textarea style="display: none;" class="section1"><?php echo $page->section1; ?></textarea>
                                                <textarea style="display: none;" class="section2"><?php echo $page->section2; ?></textarea>
                                                <textarea style="display: none;" class="section3"><?php echo $page->section3; ?></textarea>
                                                <textarea style="display: none;" class="section4"><?php echo $page->section4; ?></textarea>
                                                <textarea style="display: none;" class="section5"><?php echo $page->section5; ?></textarea>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if(empty($Data)){ 
                                    echo '<center><br><b>No any pages found.</b></center>';
                             } ?>
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
                                        <label class="control-label col-md-3">Short Title</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="short_title" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Package Title</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="package_title" ></textarea>
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
                                        <label class="control-label col-md-3">Package Content</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" name="package_content" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Timeline </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="timeline" rows="10" ></textarea>
                                            <small id="emailHelp" class="form-text text-muted">[{"title":"DETAILED TRADEMARK CHECK","date":"2 to 4 working hours","detail":"Full Detail"},{"title":"TRADEMARK APPLICATION FILING ( TM )","date":"3 working days","detail":"Full Detail"}]</small>
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
<script src="https://cdn.ckeditor.com/ckeditor5/11.1.0/classic/ckeditor.js"></script>
<script>
    let editor;
    let editor1;
    let editor2;
    let editor3;
    let editor4;

    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','insertTable', 'undo', 'redo', ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
        } )
        .then( newEditor => {
            editor = newEditor;
            // console.log( Array.from( editor.ui.componentFactory ) );
        } )
        .catch( error => {
            console.error( error );
        } );
    // const editorData = editor.getData();
    ClassicEditor
        .create( document.querySelector( '#editor1' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','insertTable', 'undo', 'redo', ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
        } )
        .then( newEditor => {
            editor1 = newEditor;
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor2' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','insertTable', 'undo', 'redo', ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
        } )
        .then( newEditor => {
            editor2 = newEditor;
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor3' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','insertTable', 'undo', 'redo', ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
        } )
        .then( newEditor => {
            editor3 = newEditor;
        } )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#editor4' ),{
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote','insertTable', 'undo', 'redo', ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
        } )
        .then( newEditor => {
            editor4 = newEditor;
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    $(document).ready(function() {        
        $('.action-row').on('click',function() {
            var package = $(this);
            var id = package.parent().parent().parent().attr('id');var status = package.text();
            $.ajax({
                url:"<?php echo base_url('admin/actionPage'); ?>",
                type:"POST",                
                data:{id:id,status:status},
                dataType: 'json',
                success : function(data) {
                    if(data){
                        toast_msg('success','Page Update Successfully');
                        package.parent().parent().parent().parent().parent().find('.status').html(data.status);
                        package.text(data.text);package.removeClass('text-success');package.removeClass('text-danger');
                        package.addClass(data.class);
                    }else{
                        toast_msg('info','Page not Update.');
                    }
                }
            });
        });

        var item = $('.package-edit');  

        $('.btn-cancel').on('click',function() {
            item.addClass('hidden');
            $('html,body').animate({
                 scrollTop: $('.wrapper').offset().top},
            1000);
        });

        $('.edit-row').on('click',function() {
            var id = $(this).parent().parent().parent().attr('id');
            edit = $(this).parent().parent().parent().parent().parent();
            var pname = edit.find('td.pname').text();
            var ptitle = edit.find('td.ptitle').text();
            var pdescription = edit.find('td.pdescription').text();
            var pkeywords = edit.find('td.pkeywords').text();
            var short_title = edit.find('td .short_title').val();
            var package = edit.find('td .package').val();
            var package_title = edit.find('td .package_title').val();
            var package_content = edit.find('td .package_content').val();
            var timeline = edit.find('td .timeline').val();
            var section1 = edit.find('td .section1').val();
            var section2 = edit.find('td .section2').val();
            var section3 = edit.find('td .section3').val();
            var section4 = edit.find('td .section4').val();
            var section5 = edit.find('td .section5').val();
            var isactive = edit.find('td.status>span').text();

            item.find('.header-title').text('UPDATE PAGE : '+pname);
            $('[name="name"]').val(pname.trim());
            $('[name="title"]').val(ptitle.trim());
            $('[name="description"]').val(pdescription);
            $('[name="keywords"]').val(pkeywords);
            $('[name="short_title"]').val(short_title);
            $('[name="package"]').val(package);
            $('[name="package_title"]').val(package_title);
            $('[name="package_content"]').val(package_content);
            $('[name="timeline"]').val(timeline);
            // $('[name="section1"]').val(section1);
            // $('[name="section2"]').val(section2);
            // $('[name="section3"]').val(section3);
            // $('[name="section4"]').val(section4);
            // $('[name="section5"]').val(section5);
            // ClassicEditor.instances['#editor'].setData(section1);
            editor.setData(section1);
            editor1.setData(section2);
            editor2.setData(section3);
            editor3.setData(section4);
            editor4.setData(section5);
            // console.log(editor.getData());
            $('[name="id"]').val(id);
            if(isactive=='Active'){
                $('[name="Status"]').attr('checked','checked');
            }
            item.removeClass('hidden');
            $('html,body').animate({
                 scrollTop: item.offset().top},
            1000);
        });
        $('.addNew').on('click',function() {
            item.find('.header-title').text('ADD NEW PAGE');
            $('[name="name"]').val('');
            $('[name="title"]').val('');
            $('[name="description"]').val('');
            $('[name="keywords"]').val('');
            $('[name="short_title"]').val('');
            $('[name="package_content"]').val('');
            $('[name="timeline"]').val('');
            // $('.form-horizontal [name="section1"]').val('');
            // $('.form-horizontal [name="section2"]').val('');
            // $('.form-horizontal [name="section3"]').val('');
            // $('.form-horizontal [name="section4"]').val('');
            // $('.form-horizontal [name="section5"]').val('');
            editor.setData("");
            editor1.setData("");
            editor2.setData("");
            editor3.setData("");
            editor4.setData("");
            $('[name="id"]').val('');
            $('[name="Status"]').attr('checked','checked');
            item.removeClass('hidden');
            $('html,body').animate({
                 scrollTop: item.offset().top},
            1000);
        });
    });
</script>  
<script>
    function toast_msg(priority, message) {
        toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        toastr[priority](message)
    }
</script>

<!-- <script src="<?php echo base_url(); ?>assets/js/tinymce.min.js"></script> -->

<!-- <script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script> -->
