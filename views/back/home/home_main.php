
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
                        <h4 class="page-title">Home Page</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home Page</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php

include('views/back/common/footer.php');

?>