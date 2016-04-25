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

                <h3>SUBJECTS</h3>

  <div class="panel-body">
                   <div class="dataTable_wrapper">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                          <tr>
                                              <th>Subject Name</th>
                                              <th>Internal</th>
                                              <th>External</th>
                                              <th>total</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($subjects as $key => $value) {?>
                                          <tr class="odd gradeX">
                                              <td><?php echo $value['subject_name']; ?></td>
                                              <td><?php echo $value['internal']; ?></td>
                                              <td><?php echo $value['external']; ?></td>
                                              <td><?php echo $value['total']; ?></td>
                                              
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
