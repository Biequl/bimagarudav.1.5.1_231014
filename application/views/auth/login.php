<div class="container">
    <div class="info-box bg-transparent shadow-none">
        <?php
        $logo_app = $setting->logo_kanan == null ? base_url() . 'assets/img/favicon.png' : base_url() . $setting->logo_kanan;
        ?>
    </div>
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center">
            <div class="login-box">
					
					<div class="card form-signin">
						<div class="login-logo text-white" style="text-shadow: 1px 1px 2px #000000">
						<br>
						<img src="<?= $logo_app ?>" width="60" height="60"> 
						<p><b><?= $setting->sekolah ?></b></p>
					</div>
                    <div class="card-body">
                        <p class="login-box-msg">Silahkan Masukan User dan Pasword yang dimiliki</p>
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?= form_open("auth/cek_login", array('id' => 'login')); ?>
                        <div class="input-group mb-3 has-feedback">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <?= form_input($identity, '', 'required'); ?>
                            <div class="help-block"></div>
                        </div>
                        <div class="input-group mb-3 has-feedback">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <?= form_input($password, '', 'required'); ?>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span id="toggle-password" class="fas fa-eye-slash" style="cursor: pointer"></span>
                                </div>
                            </div>
                            <div class="help-block"></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <!--
								<div class="icheck-primary">
									<?= form_checkbox('remember', '', FALSE, 'id="remember"'); ?>
									<label for="remember">
										Remember Me
									</label>
								</div>
								-->
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <?= form_submit('submit', lang('login_submit_btn'), array('id' => 'submit', 'class' => 'btn btn-primary btn-block btn-flat')); ?>
                            </div>
                            <!-- /.col -->
                        </div>
                        <?= form_close(); ?>
                        <!--
				<a href="<?= base_url() ?>auth/forgot_password" class="text-center"><?= lang('login_forgot_password'); ?></a>
				-->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/assets/app/js/jquery.backstretch.js"></script>
<script type="text/javascript">
    let base_url = '<?=base_url();?>';
    var img = ["wall1.jpg", "wall2.jpg", "wall3.jpg", "wall4.jpg"];

    $.backstretch([
        base_url + 'assets/img/' + img[0],
        base_url + 'assets/img/' + img[1],
        base_url + 'assets/img/' + img[2],
        base_url + 'assets/img/' + img[3]
    ], {
        fade: 1000,
        duration: 10000
    });
</script>
<script src="<?= base_url() ?>/assets/app/js/auth/login.js"></script>
