        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <!-- <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li>
                                        <a href="#">FlitPay</a>
                                    </li>
                                    <li class="active">
                                        Dashboard
                                    </li>
                                </ol>
                            </div> -->
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <form role="form" method="get" action="">
                        <div class="col-sm-8">
                            <div class="form-group search-box">
                                <input type="text" id="search-input" name="search" class="form-control product-search" placeholder="Search here...">
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                             <button type="submit" class="btn btn-primary btn-md waves-effect waves-light m-b-30"><i class="md md-add"></i> Search</button>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="mdi mdi-account-multiple widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="Total Users"><a href="<?php echo base_url('admin/users'); ?>">Total Users</a> <i class="mdi mdi-arrow-down text-flitpay"></i></h4>
                                <h2 class="text-primary"><?php echo $tUsers; ?></h2>
                                <p class="text-muted m-0">No. of registered users</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-inbox widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 font-secondary text-overflow text-success" title="Total Orders">Total Orders <i class="mdi mdi-arrow-down text-success"></i></h4>
                                <h2 class="text-success"><?php echo $torders; ?></h2>
                                <p class="text-muted m-0">No. of received orders</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-cart-arrow-down widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 font-secondary text-overflow text-primary" title="Total User Carts"><a href="<?php echo base_url('admin/carts'); ?>">Total Carts <i class="mdi mdi-arrow-down text-primary"></i></a></h4>
                                <h2 class="text-primary"><?php echo $tcarts; ?></h2>
                                <p class="text-muted m-0">No. of product in User carts</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-inr widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="Total INR">Total INR <i class="mdi mdi-arrow-down"></i></h4>
                                <h2><?php echo !empty($INROrder->total)?$INROrder->total:'0.00'; ?></h2>
                                <p class="text-muted m-0">Total amount having orders</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-ticket widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="All Company packages"><a href="<?php echo base_url('admin/packages/company'); ?>">Company packages</a></h4>
                                <h2 class="text-primary"><?php echo $cpackages; ?> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                <p class="text-muted m-0">No. of Company Packages</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-ticket widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="All Trademark packages"><a href="<?php echo base_url('admin/packages/trademark'); ?>">Trademark packages</a></h4>
                                <h2 class="text-primary"><?php echo $tpackages; ?> <small><i class="mdi mdi-arrow-up text-primary"></i></small></h2>
                                <p class="text-muted m-0">No. of Trademark Packages</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-building widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="Total Company"><a href="<?php echo base_url('admin/companies'); ?>">Total Company</a></h4>
                                <h2 class="text-primary"><?php echo $tcompany; ?> <small><i class="mdi mdi-arrow-down text-primary"></i></small></h2>
                                <p class="text-muted m-0">No. of registered company</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one widget-two-default">
                            <i class="fa fa-trademark widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <h4 class="m-0 text-uppercase font-600 text-overflow" title="Total Trademark"><a href="<?php echo base_url('admin/trademarks'); ?>">Total Trademark</a></h4>
                                <h2 class="text-primary"><?php echo $trademark; ?> <small><i class="mdi mdi-arrow-down text-primary"></i></small></h2>
                                <p class="text-muted m-0">No. of registered trademark</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Recent Users</h4>

                            <div class="table-responsive">
                                <table class="table table table-hover m-0 table-users">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th class="text-center" style="width:33%;">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($users)): foreach($users as $u=>$user): ?>
                                        <tr>
                                            <th>
                                            <?php if($user->Photo){$image = $user->Photo; }else{$image = '../assets/images/default-male.png';} ?>
                                                <img src="<?php echo $image; ?>" alt="user" class="thumb-sm img-circle" />
                                            </th>
                                            <td>
                                                <h5 class="m-0"><a href="<?php echo base_url('admin/users?search=').$user->Name; ?>"><?php echo $user->Name; ?></a></h5>
                                                <?php echo $user->Phone; ?>
                                            </td>
                                            <td><?php echo $user->Email; ?></td>
                                            <td class="text-center"><?php echo time_elapsed_string($user->CreateTime); ?></td>
                                        </tr>
                                        <?php endforeach; endif; ?>
                                    </tbody>
                                </table>

                            </div> <!-- table-responsive -->
                        </div> <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title m-t-0 m-b-30">Recent orders</h4>

                            <div class="table-responsive">
                                <table class="table table table-hover m-0 table-buyers">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>User Name</th>
                                            <th>City </th>
                                            <th>INR </th>
                                            <th>product</th>
                                            <th class="text-center">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($orders)): foreach($orders as $u=>$orders): ?>
                                        <tr>
                                            <th>
                                                <?php if($orders->Photo){$image = $orders->Photo; }else{$image = '../assets/images/default-male.png';} ?>
                                                <img src="<?php echo $image; ?>" alt="user" class="thumb-sm img-circle" />
                                            </th>
                                            <td>
                                            <?php if(strlen($orders->Name) > 10){$name = substr($orders->Name,0,10).'...';}else{$name = $orders->Name;} ?>
                                                <h5 class="m-0" TITLE="<?php echo $orders->Name; ?>"><a href="#"><?php echo $name; ?></a></h5>
                                                <p class="m-0 text-muted font-13"><small><?php echo $orders->Phone; ?></small></p>
                                            </td>
                                            <td><?php echo $orders->City; ?></td>
                                            <td><?php echo $orders->AmountPay; ?></td>
                                            <td><span class="label label-success"><?php echo count($orders->OrderDetails); ?></span></td>
                                            <td class="text-center"><?php echo time_elapsed_string(strtotime($orders->OrderDate)); ?></td>
                                        </tr>
                                        <?php endforeach; endif; ?>
                                    </tbody>
                                </table>

                            </div> <!-- table-responsive -->
                        </div> <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
<script>
    $(document).ready(function() {        
        setInterval(function(){
            $.ajax({
                url:"<?php echo base_url('admin/getRecentDataTime'); ?>",               
                dataType: 'json',
                success : function(data) {
                    if(data.res==1){
                        $('.table-users tbody').html(data.users);
                        $('.table-buyers tbody').html(data.buysells);
                    }else{
                        alert('Your conection has lost for background data.');
                    }
                }
            });
        },10000);
    });
</script>  