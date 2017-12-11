<?php get_header(); ?> 

<div class="spaces" style="height: 8vh"></div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card card-bgc-light border-0 rounded-0 m-login mb-3">
                <div class="card-header border-0 pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-user-o"></i> Login</div> 
                <div class="card-body border-0 p-3 pt-2 rounded-0">
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Email Address">
                        <input type="password" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Password">

                    </div>                        
                    <span> <a href="#" class="text-secondary"><u>Forgot Password?</u></a> or <a href="<?php echo home_url(); ?>/index.php/register/" class="text-secondary"><u>Register</u></a>.</span><br><br>
                    <a href="<?php echo home_url(); ?>" class="btn btn-secondary pr-3 pl-3 rounded-0 pull-right">Login</a></a>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</div>

<div class="spaces" style="height: 10vh"></div>

<?php get_footer(); ?>