<?php 
$request = \Config\Services::request(); 
$session = session();
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url($request->uri->getSegment(1));?>" class="brand-link">
        <img src="<?php echo base_url(); ?>/assets/dist/img/DJP.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">DJP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                
            </div>
            <div class="info">
                <a href="#" class="d-block">Hi, <?= $full_name; ?></a>
            </div>
        </div>
     

        <!-- Sidebar Menu -->
        <nav class="mt-2" style="font-size:14px">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url()."/home"?>" class="nav-link
                        <?php 
                            if ($request->uri->getSegment(1) == '' ||
                                $request->uri->getSegment(1) == 'home')
                                { echo 'active'; } else { echo ''; } 
                        ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="<?php echo base_url().'/dashboard'?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>
                        
                    </a>
                </li>
                <!-- end dashboard -->

                <!-- Access for Level1 Admin & Editor -->
                <li class="nav-header"><i class="nav-icon fas fa-th"></i> MENU</li>
                <?php 
                if($session->get('PENUserLevel')=="Level1-Admin" OR $session->get('PENUserLevel')=="Level1-Peneliti"OR $session->get('PENUserLevel')=="Editor"){
                ?>
                <li class="nav-item">
                    <!-- <a href="pages/layout/collapsed-sidebar.html" class="nav-link"> -->
                        <a href="<?php echo base_url()."/pengajuan"?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Pengajuan</p>
                        </a>
                </li>
                <?php
                }
                ?>
                
                <!-- Access for Level1 Peneliti & Editor-->
                <?php 
                if($session->get('PENUserLevel')=="Level1-Peneliti" OR $session->get('PENUserLevel')=="Editor"){
                ?>
                <li class="nav-item">
                        <a href="<?php echo base_url()."/pengajuansub"?>" class="nav-link">
                            <i class="nav-icon far fa-file-alt"></i>
                            <p>SUB</p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="<?php echo base_url()."/stg"?>" class="nav-link">
                            <i class="nav-icon fas fa-file-invoice"></i>
                            <p>STG</p>
                        </a>
                </li>
                <?php
                }
                ?>
                <!-- Level2 # Edit Reference table & user-->
                <?php 
                if($session->get('PENUserLevel')=="Level2"){
                ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Configuration Reff.
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/JenisPermohonan"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1A-Jenis Permohonan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/JenisPajak"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1A-Jenis Pajak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/MataUang"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1A-Mata Uang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/JenisKetepan"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1A-Jenis Ketetapan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/JenisEkspedisi"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1P-Ekspedisi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/Keputusan"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1P-Keputusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/TujuanRespon"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1P-Tujuan Respon Kanwil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url()."/SetDB/SetArsip"?>" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>L1P-SUBArsip</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <!-- <li class="nav-header"><i class="fas fa-user-cog"></i>  Setting User</li> -->
                <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-cog"></i>
                                <p>
                                    Configuration User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url()."/users/viewUsers"?>" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url()."/users/viewDepartemen"?>" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Manage Departemen</p>
                                    </a>
                                </li>
                            </ul>
                </li>
                <?php
                }
                ?>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-unlock-alt"></i>
                            <p> Change Password</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url()?>/login/logout" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p> Sign Out</p>
                        </a>
                    </li>
                </li> 
            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>