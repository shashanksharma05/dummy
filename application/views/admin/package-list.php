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
                                       Company Packages
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Company Packages</h4>
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
                                <h4 class="m-t-0 header-title">ALL COMPANY PACKAGES LIST </h4>
                            </div>
                            <hr style="margin:0;">
                            <div class="table-responsive1">
                                <table class="table table-colored table-centered table-info m-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Package Name</th>
                                            <th>Govt Fee(Rs.)</th>
                                            <th>Prof Fees(Rs.)</th>
                                            <th>Total Price</th>
                                            <th>Update</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($Data)){ foreach($Data as $k=>$package){ 
                                            if($package->Status==1){$label='success';$status='Active';$action='danger';$actionStatus='Inactive';}else{$label='danger';$status='Inactive';$action='success';$actionStatus='Active';}
                                            $additional = json_decode($package->AdditionalPrice,true); ?>
                                        <tr class="gradeX">
                                            <td><?php echo $k+1; ?></td>
                                            <td class="pname"><?php echo $package->packageName; ?></td>
                                            <td class="price"><?php echo $package->packagePrice; ?></td>
                                            <td class="fee"><?php echo $package->packageFee; ?></td>
                                            <td><b>Rs.<?php echo $package->packageTotalPrice; ?></b></td>
                                            <td><?php if($package->DateUpdate){ echo date('d-m-Y h:i A',$package->DateUpdate); } ?></td>
                                            <td class="status"><span class="label label-<?php echo $label; ?>"><?php echo $status; ?></span></td>
                                            <td class="actions" data-dsc="<?php echo !empty($additional[0]['dsc'])?$additional[0]['dsc']:'' ?>" data-dscprice="<?php echo !empty($additional[0]['price'])?$additional[0]['price']:'' ?>" data-notary="<?php echo !empty($additional[1]['price'])?$additional[1]['price']:'' ?>" data-stamp="<?php echo !empty($additional[2]['price'])?$additional[2]['price']:'' ?>" data-pantan="<?php echo !empty($additional[3]['price'])?$additional[3]['price']:'' ?>">
                                                <div class="dropdown" id="<?php echo $package->ID; ?>">
                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <i class="caret"></i></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a class="active text-<?php echo $action; ?> action-row" href="javascript:void(0)"><?php echo $actionStatus; ?></a></li>
                                                        <li><a class="active text-info edit-row" href="javascript:void(0)">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if(empty($Data)){ 
                                    echo '<center><br><b>No any package found.</b></center>';
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
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Package Name
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="packageName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Government Fee
                                        </label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" name="packagePrice" min="0" step=".01" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">DSCs
                                        </label>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" name="dsc" step="1" min="0" placeholder="No of DSC">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" name="dscprice" step=".01" min="0" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Stamp Duty Cost
                                        </label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" name="stamp" step=".01" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Notarization Cost
                                        </label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" name="notary" step=".01" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">PAN & TAN Fee
                                        </label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" name="pantan" step=".01" min="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Professional Fees
                                        </label>
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" name="packageFee" min="0" step=".01" required>
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
                                            <button type="button" class="btn btn-default">Cancel</button>
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
        $('.action-row').on('click',function() {
            var package = $(this);
            var id = package.parent().parent().parent().attr('id');var status = package.text();
            $.ajax({
                url:"<?php echo base_url('admin/actionPackage'); ?>",
                type:"POST",                
                data:{id:id,status:status},
                dataType: 'json',
                success : function(data) {
                    if(data){
                        toast_msg('success','Package Update Successfully');
                        package.parent().parent().parent().parent().parent().find('.status').html(data.status);
                        package.text(data.text);package.removeClass('text-success');package.removeClass('text-danger');
                        package.addClass(data.class);
                    }else{
                        toast_msg('info','Package not Update.');
                    }
                }
            });
        });

		var item = $('.package-edit');  

        $('.form-actions .btn-default').on('click',function() {
            item.addClass('hidden');
            $('html,body').animate({
                 scrollTop: $('.wrapper').offset().top},
            1000);
        });

        $('.edit-row').on('click',function() {
            var id = $(this).parent().parent().parent().attr('id');
            edit = $(this).parent().parent().parent().parent().parent();
            var pname = edit.find('td.pname').text();
            var dsc = edit.find('td.actions').data('dsc');
            var dscprice = edit.find('td.actions').data('dscprice');
            var stamp = edit.find('td.actions').data('stamp');
            var notary = edit.find('td.actions').data('notary');
            var pantan = edit.find('td.actions').data('pantan');
            var price = edit.find('td.price').text();
            var fee = edit.find('td.fee').text();
            var isactive = edit.find('td.status>span').text();

            item.find('.header-title').text('UPDATE PACKAGE : '+pname);
            $('[name="packageName"]').val(pname.trim());
            $('[name="packagePrice"]').val(price.trim());$('[name="dsc"]').val(dsc);
            $('[name="dscprice"]').val(dscprice.trim());$('[name="pantan"]').val(pantan.trim());
            $('[name="packageFee"]').val(fee);$('[name="stamp"]').val(stamp.trim());
            $('[name="notary"]').val(notary.trim());$('[name="id"]').val(id);
            
            if(isactive=='Active'){
                $('[name="Status"]').attr('checked','checked');
            }
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