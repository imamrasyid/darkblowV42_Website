<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="<?php echo $this->getsettings->Get2()->meta_author ?>">
        <meta name="description" content="<?php echo $this->getsettings->Get2()->meta_description ?>">
        <meta name="keywords" content="<?php echo $this->getsettings->Get2()->meta_keywords ?>" />
        <title><?php echo $this->getsettings->Get2()->project_name.' || '.$title ?></title>
        <!-- START: Styles -->
        
        <!-- Icon -->
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/goodgames/assets/images/settings/<?php echo $this->getsettings->Get2()->project_icon ?>">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <script defer src="<?php echo base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/all.js"></script>
        <script defer src="<?php echo base_url() ?>assets/goodgames/assets/vendor/fontawesome-free/js/v4-shims.js"></script>
        <!-- IonIcons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/ionicons/css/ionicons.min.css">
        <!-- Flickity -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/flickity/dist/flickity.min.css">
        <!-- Seiyria Bootstrap Slider -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">
        <!-- GoodGames -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/css/goodgames.css">
        <!-- Custom Styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/css/custom.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/theme-dark/dark.css">
        <script src="<?php echo base_url() ?>assets/goodgames/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
        <!-- dataTable -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/goodgames/assets/vendors/datatables/datatables.css">
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/goodgames/assets/vendor/jquery/dist/jquery.min.js"></script>
        <!-- END: Styles -->
    </head>
    <body>
        <header class="nk-header nk-header-opaque">
            <!-- START: Marquee -->
            <div class="nk-contacts-top">
                <marquee style="font-weight: 900; text-transform: uppercase;" class="text-main-1">
                <span>
                    <?php echo $this->getsettings->Get2()->running_text ?>
                </span>
                </marquee>
            </div>
            <!-- END: Marquee -->
            <!-- START: Navbar -->
            <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="<?php echo base_url('home') ?>" class="nk-nav-logo">
                        <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/settings/<?php echo $this->getsettings->Get2()->project_logo ?>" alt="<?php echo $this->getsettings->Get2()->project_name ?>" width="199">
                    </a>
                    <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                        <li class="<?php if(empty($this->uri->segment(1)) || $this->uri->segment(1) == "home"){echo 'active';}?>">
                            <a href="<?php echo base_url('home') ?>">
                                Home
                            </a>
                        </li>
                        <li class="nk-drop-item <?php if ($this->uri->segment(1) == "player_rank" || $this->uri->segment(1) == "clan_rank"){echo 'active';} ?>">
                            <a href="javascript:void(0)">
                                Ranks
                            </a>
                            <ul class="dropdown">
                                <li class="<?php if($this->uri->segment(1)== "player_rank"){echo 'active';}?>">
                                    <a href="<?php echo base_url('player_rank') ?>">
                                        Player Ranks
                                    </a>
                                </li>
                                <li class="<?php if($this->uri->segment(1)== "clan_rank"){echo 'active';}?>">
                                    <a href="<?php echo base_url('clan_rank') ?>">
                                        Clan Ranks
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php if($this->uri->segment(1)== "download"){echo 'active';}?>">
                            <a href="<?php echo base_url('download') ?>">
                                Download
                            </a>
                        </li>
                        <?php if ($this->getsettings->Get2()->webshop != 0 && $this->getsettings->Get2()->trade_market != 0) : ?>
                        <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade"){echo 'active';} ?>">
                            <a href="javascript:void(0)">FEATURED</a>
                            <ul class="dropdown">
                                <?php if ($this->getsettings->Get2()->webshop == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "webshop"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('webshop') ?>">Webshop</a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->getsettings->Get2()->trade_market == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "trade"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('trade') ?>">Trade Market</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->getsettings->Get2()->webshop == 1 && $this->getsettings->Get2()->trade_market == 0) : ?>
                        <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade"){echo 'active';} ?>">
                            <a href="javascript:void(0)">FEATURED</a>
                            <ul class="dropdown">
                                <?php if ($this->getsettings->Get2()->webshop == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "webshop"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('webshop') ?>">Webshop</a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->getsettings->Get2()->trade_market == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "trade"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('trade') ?>">Trade Market</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if ($this->getsettings->Get2()->webshop == 0 && $this->getsettings->Get2()->trade_market == 1) : ?>
                        <li class="nk-drop-item <?php if ($this->uri->segment(1) == "webshop" || $this->uri->segment(1) == "trade"){echo 'active';} ?>">
                            <a href="javascript:void(0)">FEATURED</a>
                            <ul class="dropdown">
                                <?php if ($this->getsettings->Get2()->webshop == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "webshop"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('webshop') ?>">Webshop</a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->getsettings->Get2()->trade_market == 1) : ?>
                                    <li class="<?php if ($this->uri->segment(1) == "trade"){echo 'active';} ?>">
                                        <a href="<?php echo base_url('trade') ?>">Trade Market</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php
                        if (empty($_SESSION['uid'])) :
                            ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "login" || $this->uri->segment(1) == "register" || $this->uri->segment(1) == "forgotpassword"){echo 'active';} ?>">
                                <a href="javascript:void(0)">Login</a>
                                <ul class="dropdown">
                                    <li class="<?php if($this->uri->segment(1)== "login"){echo 'active';}?>">
                                        <a href="<?php echo base_url('login') ?>">Login</a>
                                    </li>
                                    <li class="<?php if($this->uri->segment(1)== "register"){echo 'active';}?>">
                                        <a href="<?php echo base_url('register') ?>">Register</a>
                                    </li>
                                    <?php if ($this->getsettings->Get2()->forgot_password == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(1) == "forgotpassword"){echo 'active';} ?>">
                                            <a href="<?php echo base_url('forgotpassword') ?>">Forgot Password</a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                            <?php
                        endif;
                        if (!empty($_SESSION['uid'])) :
                            ?>
                            <li class="nk-drop-item <?php if ($this->uri->segment(1) == "player_panel"){echo 'active';} ?>">
                                <a href="javascript:void(0)">
                                    User Area
                                </a>
                                <ul class="dropdown">
                                    <li class="<?php if($this->uri->segment(2)== "home"){echo 'active';}?>">
                                        <a href="<?php echo base_url('player_panel/home') ?>">
                                            Player Panel
                                        </a>
                                    </li>
                                    <?php if ($_SESSION['access_level'] >= 3 && $_SESSION['access_level'] <= 6) : ?>
                                        <li>
                                            <a href="<?php echo base_url('adm/dashboard') ?>" target="_blank">
                                                Moderator Panel
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php if($this->uri->segment(2)== "redeemcode"){echo 'active';}?>">
                                        <a href="<?php echo base_url('player_panel/redeemcode') ?>">
                                            Redeem Code
                                        </a>
                                    </li>
                                    <?php if ($this->getsettings->Get2()->exchange_ticket == 1) : ?>
                                        <li class="<?php if ($this->uri->segment(2) == "exchange_ticket"){echo 'active';} ?>">
                                            <a href="<?php echo base_url('player_panel/exchange_ticket') ?>">
                                                Exchange Ticket
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($this->getsettings->Get2()->voucher == 1) : ?>
                                        <li class="<?php if($this->uri->segment(2)== "voucher"){echo 'active';}?>">
                                            <a href="<?php echo base_url('player_panel/voucher') ?>">
                                                Voucher
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="<?php if($this->uri->segment(2)== "inventory"){echo 'active';}?>">
                                        <a href="<?php echo base_url('player_panel/inventory') ?>">
                                            Inventory
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="Logout()">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php 
                        endif;
                        ?>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon d-lg-none">
                            <a href="javascript:void(0)" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- END: Navbar -->
</header>
<!-- START: Navbar Mobile -->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="<?php echo base_url('home') ?>" class="nk-nav-logo">
                <img src="<?php echo base_url() ?>/assets/goodgames/assets/images/settings/<?php echo $this->getsettings->Get2()->project_logo ?>" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->