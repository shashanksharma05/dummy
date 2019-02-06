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
                                        Companies
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Companies</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-border panel-success">
                            <div class="panel-heading row">
                                <div class="col-sm-4">
                                    <h4 class="header-title">ALL COMPANIES LISTING</h4>
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
                            <hr style="margin: 0px;">
                            <div class="table-responsive">
                                <table class="table table-centered m-0">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Company Name</th>
                                            <th>Class</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Authorise Capital</th>
                                            <th>Paid Capital</th>
                                            <th>State</th>
                                            <th>ROC</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($Data['list'])){ foreach($Data['list'] as $k=>$pan){ 
                                        $offset = $Data['offset'];?>
                                        <tr class="gradeX">
                                            <td><?php echo $offset+($k+1); ?></td>
                                            <td><?php echo $pan->company_name; ?></td>
                                            <td><?php echo $pan->class; ?></td>
                                            <td><?php echo $pan->category; ?></td>
                                            <td><?php echo $pan->sub_category; ?></td>
                                            <td><?php echo $pan->authorise_capital; ?></td>
                                            <td><?php echo $pan->paid_capital; ?></td>
                                            <td><?php echo $pan->state; ?></td>
                                            <td><?php echo $pan->ROC; ?></td>
                                            <td><?php echo $pan->status; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pull-left">
                        <p><?php if (!empty($Data['list'])){echo 'Total Results : '.$Data['total'];}else{echo 'No Companies Found';} ?></p>
                        </div>
                        <div class="text-right">
                            <ul class="pagination pagination-split m-t-0">
                            <?php  if (!empty($Data['list'])): 
                                $page = $Data['page'];$pages = $Data['pages'];
                                $start = $Data['start']; $end = $Data['end'];
                                $searchValue = $this->input->get('search');
                                $daterange = $this->input->get('daterange');$search = '';
                                if($daterange){
                                    $search .= 'daterange='.$daterange.'&';
                                }if($searchValue){
                                    $search .= 'search='.$searchValue.'&';
                                }
                                if($page!=1){
                                    echo '<li>
                                            <a href="'.base_url('admin/companies?').$search.'page='.($page-1).'"><i class="fa fa-angle-left"></i></a>
                                         </li>';
                                }
                                $i = $start;
                                for($i;$i<=$end;$i++): 
                                      if($i==$page){$active = 'class="active"';}else{$active = '';}
                                    echo '<li '.$active.'>
                                            <a href="'.base_url('admin/companies?').$search.'page='.$i.'">'.$i.'</a>
                                         </li>';  
                                endfor; if($page!=$pages){
                                    echo '<li>
                                            <a href="'.base_url('admin/companies?').$search.'page='.($page+1).'"><i class="fa fa-angle-right"></i></a>
                                         </li>';
                                } endif; ?>
                            </ul>
                        </div>
                    </div> <!-- end col -->
                </div>