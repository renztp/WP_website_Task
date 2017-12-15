<?php get_header(); ?>
<br>

<div class="container">
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-5 p-4">

            <div class="card card-bgc-secondary rounded-0">
                <div class="card-header">Level-Test Form</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control w-100 rounded-0 text-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-3 w-100 rounded-0 text-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cell Phone #">
                                </div>
                                <div class="col-md-12 btn-grp">
                                    <select class="form-control">
                                      <option>12-15</option>
                                      <option>12-18</option>
                                      <option>12-19</option>
                                      <option>12-20</option>
                                      <option>12-21</option>
                                  </select>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-5">
                                          <label for="Option-1 mr-2"><input type="Radio" id="Option-1" name="option"> Option Value 1</label>
                                      </div>
                                      <div class="col-md-7">
                                          <label for="Option-2"><input id="Option-2" type="Radio" name="option"> Option Value 2</label>
                                      </div>
                                      <div class="col-md-5">
                                          <label for="option-3"><input type="Radio" id="option-3" name="option"> Option Value 3</label>
                                      </div>
                                      <div class="col-md-7">
                                          <label for="option-4"><input type="Radio" id="option-4" name="option"> Option Value 4</label>
                                      </div>
                                      <div class="col-md-5">
                                          <label for="option-5"><input type="Radio" id="option-5" name="option"> Option Value 5</label>
                                      </div>
                                      <div class="col-md-7">
                                          <label for="option-6"><input type="Radio" id="option-6" name="option"> Option Value 6</label>
                                      </div>
                                      <div class="col-md-5">
                                          <label for="option-7"><input type="Radio" id="option-7" name="option"> Option Value 7</label>
                                      </div>
                                      <div class="col-md-7">
                                          <label for="option-8"><input type="Radio" id="option-8" name="option"> Option Value 8</label>
                                      </div>
                                      <div class="col-md-5">
                                          <label for="option-9"><input type="Radio" id="option-9" name="option"> Option Value 9</label>
                                      </div>
                                      <div class="col-md-7">
                                          <label for="option-10"><input type="Radio" id="option-10" name="option"> Option Value 10</label>
                                      </div>
                                  </div>
                                  <div class="row pt-3">
                                      <div class="col-md-12"><span class="text-danger"><i class="fa fa-warning"></i> Please make sure you entered forms correctly</span></div>
                                      <div class="col-md-12 pt-3">
                                          <button class="btn btn-secondary w-100">Send form</button>
                                      </div>
                                  </div>
                              </div>

                          </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md"></div>
    </div> 
</div> 

<br><br>
<?php get_footer(); ?>