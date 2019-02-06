        <div class="wrapper">
            <div class="container">
                <style>
                    .user-name{
                        margin-bottom: 0;
                        line-height: 1;
                    }
                </style>
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
                                        Users
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Users</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form role="form" action="" method="get">
                                        <div class="form-group search-box">
                                            <input type="text" id="search-input" name="search" class="form-control product-search" placeholder="Search here..." value="<?php echo $this->input->get('search'); ?>">
                                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4">
                                     <a href="<?php echo base_url('admin/guests'); ?>" class="btn btn-primary btn-md pull-right m-b-30">Guest Users</a>
                                </div>
                            </div>

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table class="table table-striped table-centered table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;"> S.No </th>
                                            <th> Name </th>
                                            <th style="width:15%;"> Address </th>
                                            <th> City </th>
                                            <th> Signup By </th>
                                            <th style="min-width:100px;"> Last Login </th>
                                            <th> Status </th>
                                            <th> Join Date </th>
                                            <!-- <th style="width: 8%;"> View </th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if (!empty($userData['list'])):
                                            $offset = $userData['offset'];
                                            foreach ($userData['list'] as $key => $value) {
                                                $usertime = $value->login_time;
                                                $time = time()-50; 
                                                if($usertime>$time){
                                                    $status = 'Online';$label = 'success';
                                                }else{
                                                    $status = 'Offline';$label = 'danger';
                                                }
                                            ?>
                                            <tr class="odd gradeX" id="tr<?php echo $value->ID; ?>">
                                                <td>
                                                    <?php echo ($key+1)+$offset; ?>
                                                </td>
                                                <td>
                                                    <p class="user-name"><?php echo $value->Name; ?></p>
                                                    <a class="small"><?php echo $value->Email; ?></a>
                                                </td>
                                                <td>
                                                    <?php echo $value->Address; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->City; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->SignupBy; ?>
                                                </td>
                                                <td>
                                                    <?php echo !empty($value->login_time && $status=='Offline')?date('d-m-Y h:i:s A',$value->login_time):''; ?>
                                                </td>
                                                <td class="status">
                                                    <span class="label label-<?php echo $label; ?>"><?php echo $status; ?></span>
                                                </td>
                                                
                                                <td>
                                                    <?php echo date('d-m-Y',$value->CreateTime); ?>
                                                </td>
                                                <!-- <td>
                                                    <a  href="<?php echo base_url('user/').$value->ID; ?>" id="<?php echo $value->ID; ?>" class="btn btn-sm btn-purple"><i class="fa fa-eye"></i> View</a>
                                                </td> -->
                                            </tr>                        
                                        <?php } else: ?>
                                            
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div> <!-- end table responsive -->
                        </div> <!-- end card-box -->

                        <div class="pull-left">
                        <p><?php if (!empty($userData['list'])){echo 'Total Results : '.$userData['total'];}else{echo 'No Users Found';} ?></p>
                        </div>
                        <div class="text-right">
                            <ul class="pagination pagination-split m-t-0">
                            <?php  if (!empty($userData['list'])): 
                                $page = $userData['page'];$pages = $userData['pages'];
                                $start = $userData['start']; $end = $userData['end'];
                                $search = $this->input->get('search');
                                if($search){
                                    $search = 'search='.$search.'&';
                                }
                                if($page!=1){
                                    echo '<li>
                                            <a href="'.base_url('admin/users?').$search.'page='.($page-1).'"><i class="fa fa-angle-left"></i></a>
                                         </li>';
                                }
                                $i = $start;
                                for($i;$i<=$end;$i++): 
                                      if($i==$page){$active = 'class="active"';}else{$active = '';}
                                    echo '<li '.$active.'>
                                            <a href="'.base_url('admin/users?').$search.'page='.$i.'">'.$i.'</a>
                                         </li>';  
                                endfor; if($page!=$pages){
                                    echo '<li>
                                            <a href="'.base_url('admin/users?').$search.'page='.($page+1).'"><i class="fa fa-angle-right"></i></a>
                                         </li>';
                                } endif; ?>
                            </ul>
                        </div>

                    </div> <!-- end col -->
                </div>

<script>
    $(document).ready(function() {
       
    });
</script>        