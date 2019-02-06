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
                                        User Carts
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">User Carts</h4>
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
                                            <input type="text" id="search-input" name="search" class="form-control product-search" placeholder="Search by keyword, type and package..." value="<?php echo $this->input->get('search'); ?>">
                                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-4">
                                     <!-- <a href="#" class="btn btn-success btn-md waves-effect waves-light m-b-30"><i class="md md-add"></i> Add New User</a> -->
                                </div>
                            </div>

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table class="table table-striped table-centered table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;"> S.No </th>
                                            <th> User </th>
                                            <th> Ip </th>
                                            <th> Token </th>
                                            <th> Keyword </th>
                                            <th> Type </th>
                                            <th> Package </th>
                                            <th> Date </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if (!empty($userData['list'])):
                                            $offset = $userData['offset'];
                                            foreach ($userData['list'] as $key => $value) { ?>
                                            <tr class="odd gradeX" id="tr<?php echo $value->ID; ?>">
                                                <td>
                                                    <?php echo ($key+1)+$offset; ?>
                                                </td>
                                                <td>
                                                <?php if(!empty($value->Name)){ ?>
                                                    <p class="user-name"><?php echo $value->Name; ?></p>
                                                    <a class="small"><?php echo $value->Email; ?></a>
                                                <?php }else{
                                                    echo 'Visitor';
                                                } ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->IP; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->Token; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->Keyword; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->Type; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->packageName; ?>
                                                </td>
                                                <td>
                                                    <?php echo date('d-m-Y',$value->DateAdded); ?>
                                                </td>
                                            </tr>                        
                                        <?php } else: ?>
                                            
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div> <!-- end table responsive -->
                        </div> <!-- end card-box -->

                        <div class="pull-left">
                        <p><?php if (!empty($userData['list'])){echo 'Total Results : '.$userData['total'];}else{echo 'No Carts Found';} ?></p>
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
                                            <a href="'.base_url('admin/carts?').$search.'page='.($page-1).'"><i class="fa fa-angle-left"></i></a>
                                         </li>';
                                }
                                $i = $start;
                                for($i;$i<=$end;$i++): 
                                      if($i==$page){$active = 'class="active"';}else{$active = '';}
                                    echo '<li '.$active.'>
                                            <a href="'.base_url('admin/carts?').$search.'page='.$i.'">'.$i.'</a>
                                         </li>';  
                                endfor; if($page!=$pages){
                                    echo '<li>
                                            <a href="'.base_url('admin/carts?').$search.'page='.($page+1).'"><i class="fa fa-angle-right"></i></a>
                                         </li>';
                                } endif; ?>
                            </ul>
                        </div>

                    </div> <!-- end col -->
                </div>        