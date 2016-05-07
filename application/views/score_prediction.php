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

                <h3>PREDICT SCORE FOR NEXT YEAR</h3>
                <form method="post" action="/home/goForScorePredictor">


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department">
                          <?php foreach ($departments as $key => $value) { ?>
                          <option value="<?php echo $value['id']; ?>"><?php echo $value['department_name']; ?></option>
                          <?php } ?>
                        </select>

                    </div>
                </div>


                <div class="col-md-8">
                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name="subject">
                          <?php foreach ($subjects as $key => $value) { ?>
                          <option value="<?php echo $value['id']; ?>"><?php echo $value['subject_code']." - ".$value['subject_name']; ?></option>
                          <?php } ?>
                        </select>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Prediction Basis</label>
                        <select class="form-control" name="prediction">
                            <option value="1">Internal Score</option>
                            <option value="2">Extra Curricular Activities</option>
                            <option value="3">Attendance</option>
                        </select>

                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Predict Score</button>
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
