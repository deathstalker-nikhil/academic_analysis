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

                <h3>ADD BATCH</h3>
                <form method="post" action="/home/addBatch">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Start Year</label>
                        <input class="form-control" name="start_year" placeholder="Start Year">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>End Year</label>
                        <input class="form-control" name="end_year" placeholder="End Year">

                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Batch</button>
                    </div>
                </div>

                </form>

  <h4 style="margin-top: 150px;">Current Batches</h4>
  <div class="panel-body">
                   <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>
                                              <th>Batch</th>
                                              <th>Edit</th>
                                              <th>Delete</th>

                                          </tr>
                                      </thead>
                                      <tbody>

                                          <tr class="odd gradeX">
                                              <td>2012-2016</td>
                                              <td><a class="btn btn-success">Edit</a></td>
                                              <td><a class="btn btn-danger">Delete</a></td>
                                          </tr>

                                      </tbody>
                                  </table></div></div>
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
