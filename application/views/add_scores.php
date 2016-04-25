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

                <h3>ADD SCORES</h3>

  <div class="panel-body">
                   <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>
                                              <th>Subject Name</th>
                                              <th>Semester</th>
                                              <th>Score</th>
                                              <th>Total</th>
                                              <th>Verified</th>



                                          </tr>
                                      </thead>
                                      <tbody>

                                          <tr class="odd gradeX">
                                              <td>Computer Networks</td>
                                              <td>3</td>
                                              <td><input type="text" class="form-control"></td>
                                              <td>100</td>
                                              <td><a class="btn btn-success">Verified</a></td>
                                          </tr>
                                          <tr class="odd gradeX">
                                              <td>Opertating Systems</td>
                                              <td>4</td>
                                              <td><input type="text" class="form-control"></td>
                                              <td>100</td>
                                              <td><a class="btn btn-danger">Not Verified</a></td>
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
