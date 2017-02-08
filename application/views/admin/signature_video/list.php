<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User List<small><a href="<?php echo base_url("admin/users/add"); ?>">Add Users</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Users</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Users</h3>
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <?php if (isset($message)) : ?>
                    <div class="alert alert-success">
                      <a class="close" data-dismiss="alert" href="#">×</a>
                      <?php echo $message ; ?>
                    </div>
                  <?php endif ; ?>                
                  <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                    <?php foreach($users as $user) : ?>
                        <tr>
                            <td><?php echo $user->uid ;?></td>
                            <td><?php echo $user->name ;?></td>
                            <td><?php echo $user->mail ;?></td>
                            <td>
                              <?php foreach ($user->roles as $role) : ?>
                                <?php echo $role->r_name." / "; ?>
                              <?php endforeach; ?>
                            </td>
                            <td><?php echo ($user->is_active == 1) ? "<small class='label bg-green'>Active</small>" : "<small class='label bg-red'>Inactive</small>" ;?></small></td>
                            <td><a href="<?php echo base_url("admin/users/edit/".$user->uid); ?>"><small class="label bg-red">edit</small></a></td>
                        </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>