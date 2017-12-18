<?php get_header(); ?> 

<div class="spaces" style="height: 8vh"></div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3 mr-0 pr-0 d-flex" style="height: inherit; width: 100%">
          <div class="card border-0 rounded-0 m-login mb-3 d-flex" style="background-image: url('https://www.dramafever.com/st/news/images/Korean-Elementary-School-M.jpg'); background-size: cover; background-position: -50px;">
            <div class="card-body" style="background: rgba(3, 3, 3, 0.6);">
              <div>
                <h3 class="text-light pt-5">Welcome back!</h3>
                <p class="pr-3 text-secondary">
                    Our community is 100% prioritized your presence, and we 
                    thankyou for having us as your personal English Tutorial Chosen
                    Website.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 pl-0 pb-0">
            <div class="card card-bgc-secondary border-0 rounded-0 m-login mb-3 pt-5">
                <div class="card-body border-0 p-3 pt-2 mt-3 p-5 rounded-0">
                    <div class="spaces" style="height: 3rem;"></div>
                    <form>
                          <div class="form-group">
                            <input type="email" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Email Address">
                            <input type="password" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Password">

                        </div>
                        
                        <a href="<?php echo home_url(); ?>/index.php/login/" class="btn butt-bg pr-3 pl-3 rounded-0 pull-right">Login</a></a>
                    </form>
                    <div class="spaces" style="height: 3rem;"></div>
                </div>
                <div class="list-group list-group-flush mt-5">
                    <a href="<?php echo home_url(); ?>/index.php/register/" class="text-secondary">
                    <div class="list-group-item list-g-compo text-center">
                        <span class="pl-3">Don't have an account? Register Now. It's FREE.</span>
                    </div>
                </a>
                </div>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div>

<div class="spaces" style="height: 10vh"></div>

<?php get_footer(); ?>