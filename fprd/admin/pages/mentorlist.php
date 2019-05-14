<?php
$title = 'Mentor';

?>
<?php require_once('../../connection.php');?>
<?php require('../../template/header.php');?>
<?php require('../../template/navbar.php');?>
<?php require('../../template/sidebar.php');?>


<?php

 function nofs($mid)
 {
     global $conn;
     $sql1 =  "select * from student_tb where mid =".$mid;
     $res1 =  $conn->query($sql1);
     return $res1->num_rows;

 }


 $sql = "SELECT * FROM mentor_tb";
 $res = $conn->query($sql);


?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mentor List </h1>
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Mobile No</th>
                  <th>Number of student</th>
                  <th>Action</th>
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
                                <td><?php echo $row["mname"];?></td>
                                <td><?php echo $row["email"];?></td>
                                <td><?php 
                                if($row["phno"])
                                {
                                echo $row["phno"];
                                }
                                else
                                {
                               ?> <span style="color:red;"><?php echo "Not Available";
                                }
                                ?><span>
                                </td>
                                

                                <td><?php 
                                if($row["mno"])
                                {
                                echo $row["mno"];
                                }
                                else
                                {
                               ?> <span style="color:red;"><?php echo "Not Available";
                                }
                                ?><span>
                                </td>

                                <td><a style="text-decoration: none;color:black;" href=<?php echo "http://localhost/fprd/admin/pages/mstudentlist.php?mid=".urlencode(base64_encode($row["mid"]))."&mname=".urlencode(base64_encode($row["mname"]));?>><?php echo nofs($row["mid"]);?></a></td>
                                <td><a href=<?php echo "http://localhost/fprd/admin/pages/mdelete.php?mid=".urlencode(base64_encode($row["mid"]));?> onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-warning">Delete</a></td>
                        </tr>  



                            <?php
                        }

                    }
                    ?>
        
                </tbody>
                <tfoot>
                <tr>
                <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Mobile No</th>
                  <th>Number of student</th>
                  <th>Action</th>
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