<div class="container">
  <div class="row px-3">
    <div class="col-lg-10 col-xl-6 card flex-row mx-auto px-0">
      <div class="card-body">
        <h4 class="title text-center mt-4">
          Login into account
        </h4>
        <form class="form-box px-3">
          <div class="form-input">
            <span><i class="fa fa-user"></i></span>
            <input type="text" name="username" placeholder="Username">
          </div>
          <div class="form-input">
            <span><i class="fa fa-key"></i></span>
            <input type="password" name="password" placeholder="Password">
          </div>


          <div class="mb-3">
            <button type="submit" class="btn btn-block text-uppercase">
              Login
            </button>
          </div>



          <hr class="my-4">

          <div class="text-center mb-2">
            Don't have an account?
            <a href="<?= base_url('login/regis'); ?>" class="register-link">
              Register here
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>