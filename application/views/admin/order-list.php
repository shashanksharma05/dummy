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
                                        Orders
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Orders</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="header-title">ALL ORDERS LISTING</h4>
                                </div>
                                <div class="col-sm-8">
                                    <form role="form" action="" method="get">
                                        <div class="form-group search-box">
                                            <input type="text" id="search-input" name="search" class="form-control product-search" placeholder="Search here..." value="<?php echo $this->input->get('search'); ?>">
                                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive1">
                                <table class="table table-colored table-centered table-success m-0" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Order No</th> 
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>City/State</th>
                                            <th>Products</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($orderData['list'])){ foreach($orderData['list'] as $k=>$val){ 
                                        $offset = $orderData['offset']; ?>
                                        <tr class="gradeX">
                                            <td><?php echo $offset+($k+1); ?></td>
                                            <td><?php echo $val->OrderID; ?></td>
                                            <td><?php echo $val->Name; ?></td>
                                            <td><?php echo $val->Address; ?></td>
                                            <td><?php echo $val->City.'/'.$val->State; ?></td>
                                            <td><?php echo count($val->OrderDetails); ?></td>
                                            <td><?php echo date('d-m-Y h:i A',$val->OrderDate); ?></td>
                                            <td class="actions" data-id="<?php echo $val->ID; ?>">
                                                <button type="button" class="btn btn-success btn-sm view-row"><i class="fa fa-eye"></i> View</button>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pull-left">
                        <p><?php if (!empty($orderData['list'])){echo 'Total Results : '.$orderData['total'];}else{echo 'No Tickets Found';} ?></p>
                        </div>
                        <div class="text-right">
                            <ul class="pagination pagination-split m-t-0">
                            <?php  if (!empty($orderData['list'])): 
                                $page = $orderData['page'];$pages = $orderData['pages'];
                                $start = $orderData['start']; $end = $orderData['end'];
                                $search = $this->input->get('search');
                                if($search){
                                    $search = 'search='.$search.'&';
                                }
                                if($page!=1){
                                    echo '<li>
                                            <a href="'.base_url('admin/orders?').$search.'page='.($page-1).'"><i class="fa fa-angle-left"></i></a>
                                         </li>';
                                }
                                $i = $start;
                                for($i;$i<=$end;$i++): 
                                      if($i==$page){$active = 'class="active"';}else{$active = '';}
                                    echo '<li '.$active.'>
                                            <a href="'.base_url('admin/orders?').$search.'page='.$i.'">'.$i.'</a>
                                         </li>';  
                                endfor; if($page!=$pages){
                                    echo '<li>
                                            <a href="'.base_url('admin/orders?').$search.'page='.($page+1).'"><i class="fa fa-angle-right"></i></a>
                                         </li>';
                                } endif; ?>
                            </ul>
                        </div>
                    </div> <!-- end col -->
                </div>
<div class="modal fade" id="myModal" tabindex="-1" style="display: none;" role="dialog" aria-labelledby="agentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg danger">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4>Order Detail History</h4>
            </div>
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive" id="table">                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="ListRow">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<script>
$(document).ready(function() {  
    $('.view-row').on('click',function() {
        var id  = $(this).parent().data('id');     
        $.ajax({
            url  : "<?php echo base_url('admin/orderDetails'); ?>",
            type : "POST",                
            data : { id : id },
            success : function(data) {
                $('#table').html(data);
                $('#myModal').modal('show');                                            
            }
        });
    });
});
</script>