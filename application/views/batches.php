<!DOCTYPE html>
<?=$head?>

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

                                              <th>Start Year</th>
                                              <th>End Year</th>
                                              <th>Batch</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($batches as $key => $value) {?>
                                          <tr class="odd gradeX">
                                            <td><?php echo $value['start_year']; ?></td>
                                            <td><?php echo $value['end_year']; ?></td>
                                              <td><?php echo $value['start_year']."-".$value['end_year']; ?></td>
                                          </tr>
                                          <?php } ?>
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
