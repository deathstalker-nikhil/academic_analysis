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
                                            <td><?php echo $value['university_roll_number']; ?></td>
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
