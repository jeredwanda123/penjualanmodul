<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="<?= base_url(); ?>template/assets/images/logo.png" alt="">
        <img class="logo-compact" src="<?= base_url(); ?>template/assets/images/logo-text.png" alt="">
        <img class="brand-title" src="<?= base_url(); ?>template/assets/images/logo-text.png" alt="">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">

                </div>

                <ul class="navbar-nav header-right">

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- Logout form -->
                            <form action="<?= base_url('auth/logout'); ?>" method="post">
                                <button type="submit" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout</span>
                                </button>
                            </form>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>