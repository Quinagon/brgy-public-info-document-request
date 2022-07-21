<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>   
  <link rel =stylesheet a href="style_acct.css">
   <style>
   .col-sm-6{text-align:Center}
   .col-sm-12{text-align:Center}
   </style>
    <?php
    session_start();
    include('head_css.php'); ?>
    <body class="skin-black">

        
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
        <?php include('header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('admin_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        LIST OF STAFFS
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
<?php
        $conn = new mysqli('localhost','root','','brgyinfo') or die(mysqli_error($conn));
        $result = $conn->query("SELECT *FROM tbladministrator WHERE role ='staff'") or die ($conn->error);
    ?>
        <br>
        <a href="admin_add_staffDemog.php"><h3><span> Add staff: </span><span><button type="button"  class="btn btn-info btn-lg" name="add" value="Add Staff">  Add staff</button></span></h3></a>
        
        <div class="container">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Staff Name (FN, MN, LN)</th>
                  
               </tr>
            </thead>
            <tbody>
               <?php 
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                  ?>
               <tr>
                  <td> <?php echo $row["firstname"] ?>
                  <?php echo $row["middlename"] ?>
                  <?php echo $row["lastname"] ?></td>
                  
               </tr>
               <?php    
                  }
                  ?>
            </tbody>
         </table>
      </div>
      <div id="myModal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               
               <div class="modal-body" id="load_data">
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <script>
      
      $(document).ready(function(){
          $(".get_id").click(function(){
              var ids = $(this).data('id');
               $.ajax({
                   url:"upload.php",
                   method:'POST',
                   data:{id:ids},
                   success:function(data){
                       
                       $('#load_data').html(data);
                   
                   }
                   
               })
          })
          
      })
      
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>



                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

</body>
</html>