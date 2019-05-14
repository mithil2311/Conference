<?php require_once('../../connection.php');?>
<?php


if(isset($_GET['mid']) && isset($_GET['mname']))
{
    $mid =  base64_decode(urldecode($_GET['mid']));
 $sql = "SELECT * FROM student_tb WHERE mid=". $mid;
 $res = $conn->query($sql);
}
else
{
    header("Location: http://localhost/fprd/admin/pages/mentorlist.php");
}

?>
<?php
$title = "List of Student Under ".base64_decode(urldecode($_GET['mname']));

?>

<?php require('../../template/header.php');?>
<?php require('../../template/navbar.php');?>
<?php require('../../template/sidebar.php');?>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List of <?php echo base64_decode(urldecode($_GET['mname']));?> </h1>
          </div>
    
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example23" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Roll No</th>
                  <th>Name</th>
                  <th>course</th>
                  <th>batch</th>
                  <th>Contact No</th>
                  <th>email</th>
                  <th>Project Type</th>
                  <th>Joining Date</th>
                  <th>Ending Date</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    if($res->num_rows > 0)
                    {

                        while($row = $res->fetch_assoc())
                        {
                          
                            ?>
                            <tr>
                                <td><?php echo $row["rno"];?></td>
                                <td><?php echo $row["sname"];?></td>
                                <td><?php echo $row["course"];?></td>
                                <td><?php echo $row["batch"];?></td>
                                <td><?php echo $row["pno"];?></td>
                                <td><?php echo $row["email"];?></td>
                                <td><?php 
                                  if($row["intype"] == 1)
                                  {
                                    echo "Industrial";
                                  }
                                  else
                                  {
                                    echo "Academic";
                                  }
                                
                                ?></td>
                                 <td><?php echo $row["sdate"];?></td>
                                <td><?php echo $row["edate"];?></td>
                             </tr>  



                            <?php
                        }

                    }
                    ?>
        
                </tbody>
                <tfoot>
                <tr>
                  <th>Roll No</th>
                  <th>Name</th>
                  <th>course</th>
                  <th>batch</th>
                  <th>Contact No</th>
                  <th>email</th>
                  <th>Project Type</th>
                  <th>Joining Date</th>
                  <th>Ending Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php require('../../template/footer.php');?>