<?php get_header(); ?>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-bgc-light border-0 rounded-0 m-login mb-3">
                <div class="card-header border-0 pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-user-o"></i> Login</div> 
                <div class="card-body border-0 p-3 pt-2 rounded-0">
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <input type="checkbox"><span> Forgot Password? or <a href="<?php echo home_url(); ?>/index.php/register/" class="text-light"><u>Register</u></a>.</span>
                    <a href="<?php echo home_url(); ?>/index.php/login/" class="btn btn-light pr-3 pl-3 rounded-0 pull-right">Login</a></a>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
 -->
    <br>
    <div class="container">
       <div class="row">
           <div class="col-md-3">
               <div class="card card-bgc-light border-0 rounded-0 m-login mb-3">
                <!-- <div class="card-header border-0 pb-2 pt-2 rounded-0 pl-3"></div> -->
                <div class="card-body border-0 p-3 pt-2 rounded-0">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://www.livelingua.com/img/profilesTeachers/228/Young-jun-Jung-IMG_000323.jpg" class="rounded-circle" width="180%" alt="">
                        </div>
                        <div class="col-md-9">
                            <h5 class="pl-3">Heon Woo jung</h5>
                            <button class="btn btn-secondary rounded-0 ml-3 text-center">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bgc-light border-0 rounded-0 m-login mb-3">
                <!-- <div class="card-header border-0 pb-2 pt-2 rounded-0 pl-3"></div> -->
                <div class="card-header m-login rounded-0">Personal Todo-list</div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item">Review on Present Tenses <span class="pull-right"><i class="fa fa-check"></i> <i class="fa fa-close pl-2"></i></span></div>
                    <div class="list-group-item">Practice more on Grammar <span class="pull-right"><i class="fa fa-check"></i> <i class="fa fa-close pl-2"></i></span></div>
                    <div class="list-group-item">Review on Future Tenses <span class="pull-right"><i class="fa fa-check"></i> <i class="fa fa-close pl-2"></i></span></div>
                    <div class="list-group-item">Review on Upcoming Exam<span class="pull-right"><i class="fa fa-check"></i> <i class="fa fa-close pl-2"></i></span></div>
                    <div class="list-group-item text-center" style="cursor: pointer;"><i class="fa fa-plus"></i></div>
                </div>
            </div>
         </div>



         <div class="col-md-9 main">
            <div class="row">
                <div class="col-md-12 pl-5 pr-5 pt-5 pb-5">
                    <h3 class="text-center">Class Schedule</h3>
                    <div class="card">
                        <div class="card-header text-center"><b>Today</b></div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Verbs, Adverbs Noun <span class="text-secondary">With Teacher Tannia</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Past, Future Tenses <span class="text-secondary">With Teacher Yani</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-secondary">Exam</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Past, Future Tenses 2 <span class="text-secondary">With Teacher Yani</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="card">
                        <div class="card-header text-center"><b>Tommorow</b></div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Comparison of Quantity - menu <span class="text-secondary">With Teacher Tannia</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Comparison of Quantity - showing difference <span class="text-secondary">With Teacher Rica</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-secondary">Exam</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Comparison of Quantity - showing no difference <span class="text-secondary">With Teacher Rica</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="card">
                        <div class="card-header text-center"><b>Wednesday</b></div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Pitstop Grammar <span class="text-secondary">With Teacher Tannia</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-light">English 4</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Pitstop Grammar 2 <span class="text-secondary">With Teacher Tannia</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item p-0">
                                <div class="row">
                                    <div class="col-md-2">
                                        <h6 class="p-3 m-0 bg-secondary">Exam</h6>
                                    </div>
                                    <div class="col-md-9">
                                        <h6 class="p-3 m-0 text-center">Grammar Practice <span class="text-secondary">With Teacher Rica</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
 </div>
 <br>
<?php get_footer(); ?>