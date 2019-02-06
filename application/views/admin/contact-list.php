        <link href="<?php echo base_url('assets'); ?>/admin/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        <style>
        .dropdown-menu > li > a {
            padding: 5px;
        }.dropdown-menu {
            min-width: 120px;
            right: 0;
            left: auto;
        }
        </style>
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
                                        Contact messages
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Contact messages</h4>
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
                                <h4 class="m-t-0 header-title">ALL Contact Messages LIST </h4>
                            </div>
                            <hr style="margin:0;">
                            <div class="table-responsive">
                                <table class="table table-colored table-centered table-info m-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>User Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Reply</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($Data['list'])){ foreach($Data['list'] as $k=>$page){ 
                                        $offset = $Data['offset']; ?>
                                        <tr class="gradeX">
                                            <td><?php echo $offset+($k+1); ?></td>
                                            <td class="name"><?php echo $page->Name; ?></td>
                                            <td class="phone"><?php echo $page->Phone; ?></td>
                                            <td class="email"><?php echo $page->Email; ?></td>
                                            <td class="message" data-message="<?php echo $page->Message; ?>"><?php if(strlen($page->Message)>25){echo substr($page->Message,0,25).'...';}else{ echo $page->Message;} ?></td>
                                            <td class="reply" id="reply<?php echo $page->ID; ?>" data-reply="<?php echo $page->Reply; ?>"><?php if(strlen($page->Reply)>25){echo substr($page->Reply,0,25).'...';}else{ echo $page->Reply;} ?></td>
                                            <td><?php echo date('d-M-Y',$page->Date); ?></td>
                                            <td class="actions">
                                                <div class="dropdown" id="<?php echo $page->ID; ?>">
                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <i class="caret"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="active text-info edit-row" href="javascript:void(0)">View & Reply</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                        <tr><td colspan="8">&nbsp;</td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php if(empty($Data['list'])){ 
                                    echo '<center><br><b>No any messages found.</b></center>';
                             } ?>
                        </div>
                        <div class="pull-left">
                        <p><?php if (!empty($Data['list'])){echo 'Total messages : '.$Data['total'];} ?></p>
                        </div>
                        <div class="text-right">
                            <ul class="pagination pagination-split m-t-0">
                            <?php  if (!empty($Data['list'])): 
                                $page = $Data['page'];$pages = $Data['pages'];
                                $start = $Data['start']; $end = $Data['end'];
                                $search = $this->input->get('search');
                                if($search){
                                    $search = 'search='.$search.'&';
                                }
                                if($page!=1){
                                    echo '<li>
                                            <a href="'.base_url('admin/contact_messages?').$search.'page='.($page-1).'"><i class="fa fa-angle-left"></i></a>
                                         </li>';
                                }
                                $i = $start;
                                for($i;$i<=$end;$i++): 
                                      if($i==$page){$active = 'class="active"';}else{$active = '';}
                                    echo '<li '.$active.'>
                                            <a href="'.base_url('admin/contact_messages?').$search.'page='.$i.'">'.$i.'</a>
                                         </li>';  
                                endfor; if($page!=$pages){
                                    echo '<li>
                                            <a href="'.base_url('admin/contact_messages?').$search.'page='.($page+1).'"><i class="fa fa-angle-right"></i></a>
                                         </li>';
                                } endif; ?>
                            </ul>
                        </div>
                    </div> <!-- end col -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box package-edit hidden">
                            <h4 class="header-title"></h4>
                            <hr>
                            <form action="" class="form-horizontal" method="post">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="text-right col-md-3">User Name
                                        </label>
                                        <div class="col-md-4">
                                            <span class="Name"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-right col-md-3">Phone
                                        </label>
                                        <div class="col-md-4">
                                            <span class="Phone"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-right col-md-3">Email
                                        </label>
                                        <div class="col-md-4">
                                            <span class="Email"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-right col-md-3">Message
                                        </label>
                                        <div class="col-md-6">
                                            <span class="Message"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Reply
                                        </label>
                                        <div class="col-md-6">
                                            <textarea class="form-control" rows="10" name="Reply" required ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="hidden" name="id" class="form-control">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Send" />
                                            <button type="button" class="btn btn-default btn-cancel">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        </div>
                    </div> <!-- end col -->
                </div>
<script src="<?php echo base_url('assets'); ?>/admin/plugins/toastr/toastr.min.js"></script>
<script>
    $(document).ready(function() {   
        var item = $('.package-edit');      
        $('form').submit(function(e) {
            e.preventDefault();$('[name="submit"]').attr('type','button').val('Please wait..');
            var reply = $('[name="Reply"]').val();
            var id = $('[name="id"]').val();
            $.ajax({
                url:"<?php echo base_url('admin/replyContactMessage'); ?>",
                type:"POST",                
                data:{id:id,reply:reply},
                dataType: 'json',
                success : function(data) {
                    if(data){
                        toast_msg('success','Message Replied Successfully');
                        $('#reply'+id).text(reply);
                        item.addClass('hidden');
                        $('html,body').animate({
                            scrollTop: $('.wrapper').offset().top},
                        1000);
                    }else{
                        toast_msg('info','Message not send.');
                    }
                    $('[name="submit"]').attr('type','submit').val('Send');
                }
            });
        });

        $('.btn-cancel').on('click',function() {
            item.addClass('hidden');
            $('html,body').animate({
                 scrollTop: $('.wrapper').offset().top},
            1000);
        });

        $('.edit-row').on('click',function() {
            var id = $(this).parent().parent().parent().attr('id');
            edit = $(this).parent().parent().parent().parent().parent();
            var name = edit.find('td.name').text();
            var email = edit.find('td.email').text();
            var message = edit.find('td.message').data('message');
            var phone = edit.find('td.phone').text();
            var reply = edit.find('td.reply').data('reply');

            item.find('.header-title').text('Reply For : '+name);
            $('span.Name').text(name.trim());
            $('span.Phone').text(phone.trim());
            $('span.Email').text(email);
            $('span.Message').text(message);
            $('[name="id"]').val(id);$('[name="Reply"]').val(reply);
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