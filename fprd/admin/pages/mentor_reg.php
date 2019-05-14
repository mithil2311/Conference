<?php
require_once('../../connection.php');
$title = 'home';

if(isset($_REQUEST['submit']))
{
  $name = $_POST["mnm"];
  $email = $_POST["email"];
  $pn = $_POST["pno"];
  $mn = $_POST["mno"];
  $password = $_POST["passw"];

  $sql = "INSERT INTO mentor_tb (mname,email,phno,mno,password) VALUES ('".$name."','".$email."',".$pn.",".$mn.",'".$password."');";

  $res = $conn->query($sql);
  

  if($res)
  {
    header("Location: http://localhost/fprd/admin/pages/mentorlist.php");
  }


}





?>
<?php require('../../template/header.php');?>
<?php require('../../template/navbar.php');?>
<?php require('../../template/sidebar.php');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-12">
        


        <!-- Main content -->
        <br>
        <br>
        <div class="invoice p-3 mb-3">
          <!-- title row -->
  
          <!-- info row -->
         
          <!-- /.row -->

          <!-- Table row -->
          
          <!-- /.row -->
  

          
              <div class="row pl-5 pr-5" >
               
         
                <!-- /.col -->


                <div class="col-12 ">
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title text-center">Faculity Registration  Form</h3>
              </div>
              <!-- /.card-header -->


              <!-- form start -->
              <form class="form-horizontal" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label autofocus ">Name*</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control " id="inputEmail3" placeholder="Name"  name="mnm"required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email*</label>

                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="inputPassword3" placeholder="Email"  name="email" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label autofocus"   >Phone Number</label>

                    <div class="col-sm-8">
                      <input type="tel" name="pno" class="form-control " id="inputEmail3"   title="Enter 13 digit Phone  number ex- 0431-2503741" size="13" placeholder="Phone Number" >
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label autofocus" >Mobile Number*</label>

                    <div class="col-sm-8">
                      <input type="tel" name="mno" class="form-control " id="inputEmail3" placeholder="Mobile Number"  size="10" pattern="[0-9]{1}[0-9]{9}"  title="Enter 10 digit mobile number" size="10"  required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label autofocus" >Password*</label>

                    <div class="col-sm-8">

                    
                      <input name="passw" type="password" class="form-control " id="password" placeholder="Password"  onkeyup='check();' required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label autofocus" >Confirm Password*</label>

                    <div class="col-sm-8">
                      <input name="confirm_password" id="confirm_password"  onkeyup='check();' type="password" class="form-control "  placeholder="Confirm Password"  required>
                      <span id='message'></span>
                    </div>
                  </div>




                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit"  name="submit" class="btn btn-info">Submit</button>
                  <button type="button" name="cancel" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
      </div>
                 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
           
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 

  <script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
    </script>
 
<?php require('../../template/footer.php');?>


