<?php get_header(); ?>

<div class="spaces" style="height: 8vh"></div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3 mr-0 pr-0 d-flex" style="height: inherit; width: 100%">
          <div class="card border-0 rounded-0 m-login mb-3 d-flex" style="background-image: url('http://photos.nomadicsamuel.com/KoreaOldPhotos/Korean-Students/i-7VcH5QF/0/1050x1050/Gao-Elementary-School-Grade-4-1050x1050.jpg'); background-size: cover; background-position: -50px;">
            <div class="card-body" style="background: rgba(3, 3, 3, 0.6);">
              <div>
                <h3 class="text-light pt-5">Join the family.</h3>
                <p class="pr-3 text-secondary">
                  Join the class and start learning english in an efficient and
                  effective way!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 pl-0 pb-0">
            <div class="card card-bgc-secondary border-0 rounded-0 m-login mb-3">
                <div class="card-body border-0 p-3 pt-2 p-5 rounded-0">
                    <h3 class="pt-5">Register now</h3>
                    <form>
                          <div class="form-group">
                            <input type="text" class="form-control pull-left w-50 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname">
                            <input type="text" class="form-control mb-3 pull-right w-50 rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lastname">
                            <input type="email" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Email Address">
                            <input type="password" class="form-control mb-3 rounded-0" id="exampleInputPassword1" placeholder="Password">

                        </div>
                        <div class="form-group pt-1">
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
                      
                        <a href="<?php echo home_url(); ?>/login/" class="btn butt-bg pr-3 pl-3 rounded-0 pull-right">Register</a></a>
                    </form>
                </div>
                <div class="list-group list-group-flush mt-5">
                    <a href="<?php echo home_url(); ?>/login/" class="text-secondary">
                    <div class="list-group-item list-g-compo text-center">
                        <span class="pl-3">Already Have an account? Login now.</span>
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