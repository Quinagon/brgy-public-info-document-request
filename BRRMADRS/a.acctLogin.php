<!DOCTYPE html>
<html>
<style >
    body
{
    font-family: Helvetica, sans-serif;
    background-color: #CCC;
    padding: 0px;
    margin: 0px;
}

.containerA /*that white box*/
{
    background: #F8F9FA;
    width: 505px;
    height: 450px;
    border-radius: 05px; /*border nung white container lang*/
    margin: 0 auto;
    border-bottom: 1px solid #CCC;
    
}

.paragraphA
{
    background: #74b9ff;
    color: white;
    font-family: Helvetica, sans-serif;
    font-size: 30px;
    text-align: center;
    border-radius: 03px; /*border nung title*/
    padding: 15px 0px 15px 0px; /*size ng border ni title*/
    margin-bottom: 50px; /*whitespace after border #55efc4*/
}

.iptA
{
    width: 385px;
    height: 35px;
    border-radius: 03px;
    border: none; /*medyo faded color lang yung txtbox*/
    border: 1px solid #CCC;
    margin-left: 50px; /*that lil margin between them txtboxes*/
    padding-left: 05px; /*space ng elements sa loob ng txtboxes*/
    border-left: 03px solid #00cec9;
    margin-top: 3px;
}

.headerA
{
    margin-right: 2px;
    font-family: Helvetica, sans-serif;
    font-size: 20px;
    margin-left: 10px;
}

.show
{
    margin-left: 10px;
    width: 20px;
    
}

button
{
    background-color: #F8F9FA;
    margin-left: 150px;
    border: 2px solid #008CBA;
    width: 200px;
    height: 50px;
    font-family: Helvetica, sans-serif;
    font-size: 20px;
    transition-duration: 0.3s;
    color: #576574;
}

button:hover
{
    background-color: #54a0ff;
    color: #F8F9FA;
}

/*.inputfile
{
    margin-left: 10px;
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    
    z-index: -1;
}

.inputfile + label
{
    font-size: 1.25em;
    font-weight: 500;
    color: #576574;
    border: 2px solid #008CBA;
    display: inline-block;
}

.inputfile:focus + label, .inputfile + label:hover
{
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s;
}

.inputfile + label
{
    cursor: pointer; /* "hand" cursor */
}

*/


input
{
    
    overflow: hidden; 
  
}

input[type="file"]
{ 
    z-index: -1;
    position: absolute;
    opacity: 0;

  
}

input + label
{
    margin-left: 10px;
    border: 2px solid #008CBA;
}

input:focus + label 
{
    outline: 2px solid;
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s;

}

input:hover + label 
{
    color: white;
    background-color: #54a0ff;
    transition-duration: 0.3s; 
}

.filename
{
    margin-left: 10px;
    margin-top: 5px;
}








</style>
    <?php
    session_start();
    include('head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        include "connection.php";
        ?>
        <?php include('header.php'); 
        ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('admin_sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Staff Login Credentials Registration
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">

                               <div class="containerA">
        <form action="a.acctLogin_process.php" method="POST">
            <p class ="paragraphA">Account Registration Form</p>
            
            <input type = "text" name="user" placeholder="Enter Username" required aria-required="true" class="iptA">
            
            <br>
            <br>
            <input type = "password" id = "pass" name = "pass" placeholder="Enter Password" required aria-required="true" class = "iptA"/>
            
            <br>
            <br>
            <script>
                function myFunction() {
                var x = document.getElementById("pass");
                    if (x.type === "password") 
                    {
                        x.type = "text";
                    } 
                    else 
                    {
                        x.type = "password";
                    }
                }
            </script>
           
           
         
            
           <!---   <input type="file" id="file" name="file" class="inputfile" multiple required/>
            <label for="file">Choose a file</label>
            
             <script>
            var input = document.getElementById( 'file' );
                 var infoArea = document.getElementById( 'file-filename' );

                 input.addEventListener( 'change', showFileName );

                 function showFileName( event ) {
                     // the change event gives us the input it occurred in 
                     var input = event.srcElement;
  
                    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                    var fileName = input.files[0].name;
  
                    // use fileName however fits your app best, i.e. add it into a div
                    infoArea.textContent = 'File name: ' + fileName;
                    }
            </script>
             --->
            
            <br>
            
            <a href="Notif.php">
            <button class = "iptA" name="save">Register</button>
            </a>
        </form>
        
    </div>

                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php 
        include "footer.php"; ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>
    </body>
</html>