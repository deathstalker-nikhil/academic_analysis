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

                <h3>ADD SUBJECT</h3>
                <form method="post" action="/home/addSubject">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Department</label>
                        <select class="form-control" name="department_id">
                          <?php foreach ($departments as $key => $value) { ?>
                          <option value="<?php echo $value['id']; ?>"><?php echo $value['department_name']; ?></option>
                          <?php } ?>
                        </select>

                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Subject Code</label>
                        <input class="form-control" name="subject_code" placeholder="Subject Code">

                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input class="form-control" name="subject_name" placeholder="Subject Name">

                    </div>
                </div>



                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Subject</button>
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
