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

                <h3>STUDENTS</h3>

  <div class="panel-body">
                   <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>
                                              <th>ID</th>
                                              <th>Name</th>
                                              <th>Roll Number</th>
                                              <th>Batch</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($students as $key => $value) {?>
                                          <tr class="odd gradeX">
                                            <td><?php echo $value['id']; ?></td>
                                              <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['roll_number']; ?></td>
                                            <td><?php
                                            foreach ($batches as $key => $batch) {
                                              if ($batch['id'] == $value['batch']){
                                                echo $batch['start_year']."-".$batch['end_year'];
                                              }
                                            }
                                          ?>
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
