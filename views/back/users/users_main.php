
<?php
if (!defined('MYADMINSCRIPT')) {
    exit();
}
include('views/back/common/header.php');

?>
<div id="main-wrapper">

<?php
include('views/back/common/sidebar.php');
?>
        <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Users</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Datatable</h5>
                            <div class="table-responsive">

                                <table id="zero_config" class="table table-striped table-bordered">
                                    <?php echo'<a href="'.ADMIN_SCRIPT.'?mod=users&act=add" style="float: right;" type="button" class="btn btn-success btn-lg text-white">Add User></a>'?>
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>surname</th>
                                            <th>age</th>
                                            <th>email</th>
                                            <th>admin</th>
                                            <th>position_id</th>
                                            <th>salary</th>
                                            <th>blocked</th>
                                            <th>deleted</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($users as $user) {
                                           echo '
                                            <tr>
                                                <td>'.$user['id'].'</td>
                                                <td>'.$user['name'].'</td>
                                                <td>'.$user['surname'].'</td>
                                                <td>'.$user['age'].'</td>
                                                <td>'.$user['email'].'</td>
                                                <td>'.$user['admin'].'</td>
                                                <td>'.$user['position_id'].'</td>
                                                <td>'.$user['salary'].'</td>
                                                <td>'.$user['blocked'].'</td>
                                                <td>'.$user['deleted'].'</td>
                                                <td><a href="'.ADMIN_SCRIPT.'?mod=users&act=edit&id='.$user['id'].'"><img width="50px" src="assets/images/edit.jpg"> </td>
                                                <td><a href="'.ADMIN_SCRIPT.'?mod=users&act=delete&id='.$user['id'].'"><img width="40px" src="assets/images/delete.jpg"></td>
                                            </tr>
                                           ';
                                        }
                                           
                                        ?>
                                    </tbody>
                                    
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
</div>
<?php

include('views/back/common/footer.php');

?>