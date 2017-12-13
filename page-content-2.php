<?php get_header(); ?>

<br>
<div class="container">
    <div class="row">
        <!-- CARD LOGIN -->
        <div class="col-md-3 p-0">
            <div class="card card-bgc-light rounded-0 m-login mb-3">
                <div class="card-header pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-user-o"></i> Login</div> 
                <div class="card-body p-3 pt-2 rounded-0">
                    <form>
                      <div class="form-group">
                        <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <span> <a href="#" data-toggle="modal" data-target="#exampleModal"  class="text-secondary"><u>Forgot Password?</u></a> or <a href="<?php echo home_url(); ?>/index.php/register/" class="text-secondary"><u>Register</u></a>.</span>
                        <a href="<?php echo home_url(); ?>/index.php/login/" class="btn btn-secondary pr-3 pl-3 rounded-0 pull-right">Login</a></a>
                </form>
            </div>
        </div>
        <!-- CARD REMINDER -->
        <div class="card card-bgc-light m-remind mb-3 rounded-0">
            <div class="card-header pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-sticky-note-o"></i> Reminders</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Saturday Seminar <i class="pull-right">Dec - 9</i></li>
                <li class="list-group-item">Monday Mass <i class="pull-right">Dec - 10</i></li>
                <li class="list-group-item">Final Period <i class="pull-right">Dec - 12</i></li>
            </ul>
        </div>
        <!-- CARD RESERVATIONS -->
        <div class="card card-bgc-light login m-remind mb-3 rounded-0">
            <div class="card-header pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-list"></i> Reservations</div>
            <ul class="list-group list-group-flush">
                <!-- <li class="list-group-item"></li>
                <li class="list-group-item">Afternoon - Evening <i class="pull-right">1PM - 5PM</i></li> -->
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_23656" alt="">
                        </div>
                        <div class="col-md-8 pl-0 text-center">
                            <span>Teacher: Yani <br>2017 / 12 / 07</span>
                            <button class="btn btn-secondary w-100 rounded-0 mt-2">View More</button></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_26053" alt="">
                        </div>
                        <div class="col-md-8 pl-0 text-center">
                            <span>Teacher: Rica <br>2017 / 12 / 07</span>
                            <button class="btn btn-secondary w-100 rounded-0 mt-2">View More</button></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_25289" alt="">
                        </div>
                        <div class="col-md-8 pl-0 text-center">
                            <span>Teacher: Tannia <br>2017 / 12 / 07</span>
                            <button class="btn btn-secondary w-100 rounded-0 mt-2">View More</button></div>
                    </div>
                </li>
                <li class="list-group-item more" style="cursor: pointer;"><span>You have 10+ more reservations</span></li>
            </ul> 
        </div>
        <!-- CARD FREE CLASS LIST -->
        <div class="card card-bgc-light m-remind rounded-0">
            <div class="card-header pb-2 pt-2 rounded-0 pl-3"><i class="fa fa-list-alt"></i> Free Class List</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_25289" alt="">
                        </div>
                        <div class="col-md-4 pl-0">
                            <img width="80%" src="http://news.gts.edu/wp-content/uploads/2013/03/JaeChung.jpg" style="min-height: 50px; max-height: 80px;" alt="">
                        </div>
                        <div class="col-md-4 pl-0">2017 / 12 / 07 <br> 8AM - 9PM<br> Teacher Tannia</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_25289" alt="">
                        </div>
                        <div class="col-md-4 pl-0">
                            <img width="80%" src="https://pbs.twimg.com/media/BwwT0kGCcAE1RUa.jpg" style="min-height: 50px; max-height: 73px;" alt="">
                        </div>
                        <div class="col-md-4 pl-0">2017 / 12 / 07 <br> 8AM - 9PM<br> Teacher Tannia</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 pr-0">
                            <img width="80%" src="https://witheng.com/data/teacher/primary_photo_26053" alt="">
                        </div>
                        <div class="col-md-4 pl-0">
                            <img width="80%" src="https://www.livelingua.com/img/profilesTeachers/228/Young-jun-Jung-IMG_000323.jpg" style="min-height: 73px; max-height: 73px;" alt="">
                        </div>
                        <div class="col-md-4 pl-0">2017 / 12 / 07 <br> 8AM - 9PM<br> Teacher Rica</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.teachaway.com/sites/default/files/styles/threshold-768/public/teach-in-korea-01.jpg?itok=24OeQMF4" alt="Third slide">          
                        <div class="carousel-caption d-none d-md-block">
                        <h3>Knowledge is our #1 Priority</h3>
                        <p>English is a gateway to communicate outside and other people. We can express
                        more and know more about other people, and we assure you we will give you that ability.</p>
                    </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2014/12/31/18/pg-24-korea-maths-1-wp.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Certified Professionals</h3>
                    <p>Trained and certified professionals, not just to help you learn, but will serve you to achieve
                    that certain knowledge 100% committed.</p>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://japanesefilmfestival.net/wp-content/uploads/2016/08/1920p-My-Korean-Teacher-2-1-1.jpg" alt="Third Slide slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>More Fun</h3>
                <p>Learning doesn't have to be boring, our community is full of fun people especially
                our teachers are trained to be more fun at teaching enthusiastically and surely.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>
<div class="row main ml-0 mr-0 mt-3 pt-1">
    <div class="col-md-4 pt-2 pb-0 pl-3">
        <h5>Learn to speak Korean where you want; when you want.</h5>
        <p class="text-justify">Ultimate flexibility. Pick lesson times that fit around your lifestyle and learn online from any location. It's affordable too. Book from just one Korean lesson to a whole language course.</p>
    </div>
    <div class="col-md-4 pt-2 pb-0">
        <h5>Live conversation. Native experienced English teachers.</h5>
        <p class="text-justify">Build fluency and confidence through interactive online classes that are effective and fun. Live conversation with a native speaker is the key to success and what learning to speak a foreign language is all about.</p>
    </div>
    <div class="col-md-4 pt-2 pb-0 pr-3">
        <h5>Tailor made lessons matched to your individual goals.</h5>
        <p class="text-justify">Customize your learning. Enjoy tailor-made lessons delivered by some of the best online Korean tutors in the world. Online language training gives you the support & motivation you need to succeed with a touch.</p>
    </div>
</div>
<div class="row main ml-0 mr-0 mt-3 m-teacher-cards">
    <div class="col-md-12 pt-3">
        <h5>Instructor Introduction</h5>
        <p class="text-justify">A native speaker is not a good student, but a well-trained instructor.
            In Guttok Video English, we are recruiting talented people and conducting classes that satisfy all students after the instructor training.
        </p> 
    </div>
    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_21305" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Sofia</i></li>
                <li class="list-group-item rounded-0">
                    <p>HelloStudents !! My name is Teacher So, I've taught English for 5 years.I handle begginer, intermediate and advance students. I am </p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_26816" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Sab</i></li>
                <li class="list-group-item">
                    <p>Hello everyone! I'm teaching Tannia and I love teaching students. I have also been experienced in the development of the </p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_26554" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Ema</i></li>
                <li class="list-group-item">
                    <p>Hello students, My name is Teacher Rica.I have been teaching English toKoreans for four years now.Learning English is fun </p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_27830" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Cassy</i></li>
                <li class="list-group-item">
                    <p>Hello! My name is Gab. I really like teaching and sharing the knowledge that I have in English. It's a pleasure for me to teach students that really eager to learn in a fun and productive way.</p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_35071" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Nice</i></li>
                <li class="list-group-item">
                    <p>Hi thereI'm Teacher Iyah. I have been teaching English for 7 years nowand I can say thatteaching has always been my passion. </p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 pt-2 pb-4">
        <div class="card rounded-0">
            <img src="https://witheng.com/data/teacher/primary_photo_44998" alt="" class="rounded-0 card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item pt-1 pb-1 text-center">Teacher Kriss</i></li>
                <li class="list-group-item">
                    <p>Hey there! This is teacher Maybelle. I'm 25 years old and I have been teaching English for almost years now. I chose this field of work because I enjoy communicating with people.</p>
                    <a href="#" class="pull-right text-secondary">Read more..</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link text-secondary" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
    </li>
    <li class="page-item"><a class="page-link text-secondary" href="<?php echo home_url(); ?>">1</a></li>
    <li class="page-item"><a class="page-link text-secondary" href="<?php echo home_url(); ?>/index.php/content-2/">2</a></li>
    <li class="page-item"><a class="page-link text-secondary" href="<?php echo home_url(); ?>/index.php/content-3">3</a></li>
    <li class="page-item">
      <a class="page-link text-secondary" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
    </a>
</li>
</ul>
</div>
</div>
</div>


<!-- RIGHT SIDEBAR -->
<div class="col-md-2 p-0 rounded-0">
    <div class="card m-ad_3 mb-3 rounded-0">
        <div class="card-body rounded-0"></div>
    </div>
    <div class="card m-ad_1 mb-3 rounded-0">
        <div class="card-body rounded-0">
            <h5 class="p-3" style="line-height: 30px; background: rgba(3, 3, 3, .5);">
                JOIN THE HARVARD SCHOOL UNIVERSITY!
                <br><br>
                APPLY NOW! TO GET A 10% DISCOUNT NOW FOR FREE!
            </h5>
            <a href="#" class="btn btn-dark pull-right rounded-0">APPLY NOW</a href="#">
            </div>
        </div>

        <div class="card card-bgc-light m-ad_2 mb-3 rounded-0">
            <div class="card-body rounded-0 pt-2">
                <h6>Infographic of the day.</h6>
                <p>Infographic of the day tells us interesting and tropical tails and stories
                in a fresh, visual way. </p>
                <a href="#" class="pull-right text-secondary pt-0 mt-0">Read more...</a>
            </div>
        </div>
    </div>
</div>
</div>
<br>

<!-- MODAL -->
<div class="modal rounded-0 mt-5 fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-body pt-3 pb-3 pl-2 pr-2 text-center">
        
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/locked.svg" alt="" style="width: 15%; text-center" class="pt-5 pb-4">
        <h4>Forgot your password?</h4>
        <p class="lead pb-3 text-secondary">Enter your email address<br>so we can help you
        <br>find your lost password.</p>
        <div class="input-group pl-5 pr-5 pb-4">
          <input type="email" class="form-control w-90" placeholder="Email Address..." aria-label="Email Address.." aria-describedby="basic-addon2">
          <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn rounded-0 btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" class="btn rounded-0 btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>