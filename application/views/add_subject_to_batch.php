<!DOCTYPE html>
<?=$head?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="mainSearchForm" onsubmit="return false;" action="/login">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <h4 class="section-heading" style="color: #000; text-align: center;">USER LOGIN</h4>
                            <div class="col-md-12">
                            <div class="form-group">

                                <input class="form-control" placeholder="username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="password">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">

                                <button style="background-color: #2c3e50; color: #fff; float:right;" type="submit" class="btn">LOGIN</button>
                            </div>
                        </div>
                        </div>


                                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row" style="padding: 20px;">

            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php echo $left; ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

                <h3>CURRENT SUBJECTS ADDED TO BATCHES</h3>

  <div class="panel-body">
                   <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>
                                              <th>Subject Name</th>
                                              <th>Batch</th>
                                              <th>Delete</th>



                                          </tr>
                                      </thead>
                                      <tbody>

                                          <tr class="odd gradeX">
                                              <td>Computer Networks</td>
                                              <td>2012-2016</td>
                                              <td><a class="btn btn-danger">Delete</a></td>
                                          </tr>
                                          <tr class="odd gradeX">
                                              <td>Opertating Systems</td>
                                              <td>2012-2016</td>
                                              <td><a class="btn btn-danger">Delete</a></td>
                                          </tr>
                                          <tr class="odd gradeX">
                                              <td>Computer Networks</td>
                                              <td>2013-2017</td>
                                              <td><a class="btn btn-danger">Delete</a></td>
                                          </tr>

                                      </tbody>
                                  </table></div></div>
                                  <h3>ADD SUBJECT TO BATCH</h3>
                                  <form method="post" action="/home/addSubjectToBatch">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                          <label>Subject Name</label>
                                          <select class="form-control" name="subject_id">
                                              <?php foreach ($subjects as $key => $value) { ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo $value['subject_code'].":".$value['subject_name'] ?></option>
                                          <?php } ?>
                                          </select>

                                      </div>
                                  </div>

                                  <div class="col-md-3">
                                      <div class="form-group">
                                          <label>Batch</label>
                                          <select class="form-control" name="batch_id">
                                            <?php foreach ($batches as $key => $value) { ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['start_year']."-".$value['end_year']; ?></option>
                                            <?php } ?>
                                          </select>

                                      </div>
                                  </div>

              
                                  <div class="col-md-12">
                                      <div class="form-group">

                                           <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                                          <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Subject to Batch</button>
                                      </div>
                                  </div>

                                  </form>

            </div>


    </div>
</div>


<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

     <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<script src="/assets/js/agency.js"></script>

<script src="/assets/js/custom.js"></script>
<script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
      responsive: true
});
});
</script>

</body>
</html>
