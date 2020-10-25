<div class="container">
    <div class="row px-3">
        <div class="col-lg-10 col-xl-6 card flex-row mx-auto px-0">
            <div class="card-body">
                <h4 class="title text-center mt-4">
                    Make Your Account
                </h4>
                <form class="form-box px-3" method="POST" action="<?= base_url('login/regis') ?>">
                    <div class="form-input">
                        <span><i class="fas fa-id-card"></i></span>
                        <input type="text" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-input">
                        <span><i class="fas fa-signature"></i></span>
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-input">
                        <span><i class="fas fa-envelope"></i></i></span>
                        <input type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-input">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-key"></i></span>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-input">
                        <span><i class="fas fa-phone"></i></i></span>
                        <input type="text" name="Phone" placeholder="phone">
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-block text-uppercase">
                            Register
                        </button>
                    </div>



                    <hr class="my-4">

                    <div class="text-center mb-2">
                        Already Have An Account?
                        <a href="<?= base_url('login/logon'); ?>" class="register-link">
                            Login Here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>