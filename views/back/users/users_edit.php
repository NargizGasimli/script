
<?php
if (!defined('MYADMINSCRIPT')) {
    exit();
}
include('views/back/common/header.php');
//print_r($item); exit;
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
                            <form action="" method="post">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($item['name'])?>"  id="fname"
                                                placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="surname" value="<?php echo htmlspecialchars($item['surname'])?>" id="lname"
                                                placeholder="Last Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname"
                                            class="col-sm-3 text-end control-label col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($item['age'])?>" name="age"id="lname"
                                                placeholder="Age Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1"
                                            class="col-sm-3 text-end control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" value="<?php echo htmlspecialchars($item['email'])?>" class="form-control" id="email1"
                                                placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1"
                                            class="col-sm-3 text-end control-label col-form-label">Salary</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($item['salary'])?>" name="salary" id="cono1"
                                                placeholder="Salary Here">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Login</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($item['login'])?>" name="salary" name="login" id="login"
                                                placeholder="Login Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Password Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 mt-3">Position</label>
                                    <div class="col-md-3">
                                        <select name="position_id" required  class="select2 form-select shadow-none"
                                            style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <optgroup label="Positions">
                                                <?php foreach ($positions as $position): ?>

                                                       <option value="<?= $position['position_id'] ?>" 
                                                                selected="<?= $item['position_id'] == $position['id'] ? "selected" : "" ?>">
                                                                <?= $position['position_name'] ?>
                                                        </option>;
                                                <?php endforeach; ?>
                                                                                       
                                                ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Admin</label>
                                    <div class="col-md-9">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" value="1"   <?= ($item['admin'])?'checked':''  ?> name="admin" class="form-check-input"
                                                id="customControlAutosizing1">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Blocked</label>
                                    <div class="col-md-9">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" value="1"  <?= ($item['blocked'])?'checked':''  ?> name="blocked" class="form-check-input"
                                                id="customControlAutosizing2">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Deleted</label>
                                    <div class="col-md-9">
                                        <div class="form-check mr-sm-2">
                                            <input type="checkbox" value="1" <?= ($item['deleted'])?'checked':''  ?> name="deleted" class="form-check-input"
                                                id="customControlAutosizing3">
                                            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>

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