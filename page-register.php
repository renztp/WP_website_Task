<?php get_header(); ?>

<div class="spaces" style="height: 8vh"></div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card card-bgc-light border-0 rounded-0 m-login mb-3">
                <div class="card-header border-0 pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-user-o"></i> Register</div> 
                <div class="card-body border-0 p-3 pt-2 rounded-0">
                    <form>
                          <div class="form-group">
                            <input type="text" class="form-control pull-left w-50 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname">
                            <input type="text" class="form-control mb-3 pull-right w-50 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lastname">
                            <input type="email" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Email Address">
                            <input type="password" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Gender</label>
                            <select onchange="ifOther(this);" class="form-control" id="exampleFormControlSelect1" style="width: 50%;">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other..</option>
                          </select>
                            <input type="text" style="display: none" class="form-control mb-3 mt-3 rounded-0" id="shows" placeholder="Specify"> 
                          <script>
                              function ifOther(selects){
                                if(selects.value == "Other"){
                                    document.getElementById("shows").style.display = "block";
                                } else{
                                    document.getElementById("shows").style.display = "none";
                                }
                              }
                          </script>
                      </div>                        
                      <span class="pl-3"> Already Have an account? If so, Please <a href="<?php echo home_url(); ?>/index.php/login/" class="text-secondary"><u>Login</u></a>.</span><br><br>
                        <a href="<?php echo home_url(); ?>/index.php/login/" class="btn butt-bg pr-3 pl-3 rounded-0 pull-right">Register</a></a>
                    </form>
                </div>
            </div>
        <div class="col-md-4"></div>
    </div>
</div>
</div>

<div class="spaces" style="height: 10vh"></div>

<?php get_footer(); ?>