<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="PHP Simple Login with CodeIgniter Framework">
    <meta name="author" content="">

    <title>Simple Login - <?= ($page['title'] ?? 'Undefined'); ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= site_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= site_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <?php if ($this->session->flashdata('success_message')) : ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('success_message'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php elseif ($this->session->flashdata('error_message')) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?= $this->session->flashdata('error_message'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>

                                    <?= form_open('login', ['class' => 'user']); ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?= (form_error('username') ? 'is-invalid' : ''); ?>" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?= (form_error('password') ? 'is-invalid' : ''); ?>" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="remember" name="remember" value="1">
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    <?= form_close(); ?>
                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="<?= site_url('register'); ?>">Create an Account!</a>
                                    </div>
                                    <a href="<?= base_url('') ?>" type="button" class="btn btn-success btn-user btn-block mt-4">Kembali Ke MyResume</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= site_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= site_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= site_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= site_url('public/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>