<!-- Local -->

<!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" id="view_<?php echo $persid; ?>" >
	<div class="modal-dialog modal-lg" >
	    <div class="modal-content">
			<div class="modal-body" style="font-size:14px;text-transform:capitalize;"> -->

				<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" > -->
				<!-- <span  aria-hidden="true" class="closebtn">&times;</span>
	            </button> -->

<?php include('header.php') ?>
<?php
 if(isset($_REQUEST['persid']))
    {
   $persid=$_REQUEST['persid'];
    }
      else
     {
    $persid=$_POST['persid'];
    }
 ?>
<style type="text/css">
    select, input{
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    .paginate_button{
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        border-radius: .25rem;
        transition: all .15s ease-in-out;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    } 
    div{
    	text-transform: capitalize;
    }
</style>	
				<body class="fixed-nav sticky-footer bg-dark" id="page-top">
			    <?php include('navfixed.php') ?>
			    <div class="content-wrapper">
			        <div class="container-fluid">
	          <!-- Breadcrumbs-->
	            <ol class="breadcrumb">
	                <li class="breadcrumb-item">
	                    <a href="students.php">Students</a>
	                </li>
	                <!-- <li class="breadcrumb-item active">Students</li> -->
	            </ol>
				<h5>I. Personal Information</h5>
				<br>
				<?php
					include('connection.php');
					$query1=mysqli_query($conn,"select * from personal WHERE persid = '$persid'")or die(mysqli_error($conn));
					$row=mysqli_fetch_assoc($query1);
				?>
				<div class="row">
					<span class="input-group">
						<div class="col-lg-3"><?php echo $row['lastname'];?></div>
						<div class="col-lg-3"><?php echo $row['firstname'];?></div>
						<div class="col-lg-3"><?php echo $row['middle'];?></div>
						<div class="col-lg-3"><?php echo $row['suffix'];?></div>
					</span>
					<span class="input-group" >
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Last Name</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>First Name</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Middle Name</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Suffix</strong></label></div>
					</span>
				</div>
				<div class="row">
					<span class="input-group">
						<div class="col-lg-3"><?php echo $row['bdate'];?></div>
						<div class="col-lg-3"><?php echo $row['placebdate'];?></div>
						<div class="col-lg-3"><?php echo $row['age'];?></div>
						<div class="col-lg-1"><?php echo $row['gender'];?></div>
					</span>
					<span class="input-group" >
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Date of Birth</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Place of Birth</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Age</strong></label></div>
						<div class="col-lg-1 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Sex</strong></label></div>
					</span>
				</div>
				<div class="row">
					<span class="input-group">
						<div class="col-lg-3"><?php echo $row['citizenship'];?></div>
						<div class="col-lg-3"><?php echo $row['civil'];?></div>
						<div class="col-lg-3"><?php echo $row['weight'];?></div>
						<div class="col-lg-1"><?php echo $row['height'];?></div>
					</span>
					<span class="input-group" >
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Citizenship</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Civil Status</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Weight</strong></label></div>
						<div class="col-lg-1 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Height</strong></label></div>
					</span>
				</div>
				<br>
				<div class="row">
					&nbsp&nbsp&nbsp&nbsp<h6><strong> Present Address</strong></h6>
					<span class="input-group">
						<div class="col-lg-3"><?php echo $row['presadd1'];?></div>
						<div class="col-lg-2"><?php echo $row['presadd2'];?></div>
						<div class="col-lg-2"><?php echo $row['presadd3'];?></div>
						<div class="col-lg-3"><?php echo $row['presadd4'];?></div>
					</span>
					<span class="input-group" style="font-size:12px">
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>House No./Street Village</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Barangay</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Municipality/City</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Province</strong></label></div>
					</span>
				</div>
				<div class="row">
					&nbsp&nbsp&nbsp&nbsp<h6><strong> Permanent Address</strong></h6>
					<span class="input-group">
						<div class="col-lg-3"><?php echo $row['permadd1'];?></div>
						<div class="col-lg-2"><?php echo $row['permadd2'];?></div>
						<div class="col-lg-2"><?php echo $row['permadd3'];?></div>
						<div class="col-lg-3"><?php echo $row['permadd4'];?></div>
					</span>
					<span class="input-group" style="font-size:12px">
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>House No./Street Village</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Barangay</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Municipality/City</strong></label></div>
						<div class="col-lg-3 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Province</strong></label></div>
					</span>
				</div>
				<br>
				<div class="row">
					<span class="input-group">
						<div class="col-lg-2"><?php echo $row['landline'];?></div>
						<div class="col-lg-2"><?php echo $row['primob'];?></div>
						<div class="col-lg-2"><?php echo $row['secmob'];?></div>
						<div class="col-lg-4"><?php echo $row['empstat'];?></div>
					</span>
					<span class="input-group" >
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Landline</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Mobile Number #1</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Mobile Number #2</strong></label></div>
						<div class="col-lg-4 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Employment Status</strong></label></div>
					</span>
				</div>
				<br>
				<hr>
				<h5>II. Educational Background</h5><br>
				<div class="row">
					<span class="input-group">
						<div class="col-lg-2"></div>
						<div class="col-lg-4"><?php echo $row['highed'];?></div>
						<div class="col-lg-2"style = "text-align:center;"><?php echo $row['yeargrad'];?></div>
						
					</span>
					<span class="input-group" >
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"></label></div>
						<div class="col-lg-4 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Highest Educational Level</strong></label></div>
						<div class="col-lg-4 border-top"><label align="center" class="input-group" style="width:180px;"><strong>Year Graduated/ Last Attended</strong></label></div>
						
					</span>
				</div>
				<div class="row">
					<span class="input-group" style="font-size:12px" >
						<div class="col-lg-4"><?php echo $row['school'];?></div>
						<div class="col-lg-4"><?php echo $row['course'];?></div>
						<div class="col-lg-2"><?php echo $row['awards'];?></div>
					</span>
					<span class="input-group" style="font-size:12px" >
						<div class="col-lg-4 border-top"><label align="center" class="input-group" style="width:150px;"><strong>School/ University</strong></label></div>
						<div class="col-lg-4 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Course/ Program</strong></label></div>
						<div class="col-lg-2 border-top"><label align="center" class="input-group" style="width:150px;"><strong>Awards/ Honors Received</strong></label></div>
					</span>
				</div>
				<hr>
				<h5>III. 21st Century Skills</h5><br>
				<hr>
				<h5>IV. Technical Skills Acquired without formal training</h5><br>
				<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © StudentRecords 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a> 
</div>
        
    </div>
</body>
		<!-- 	</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button> 
			</div>
	    </div> 
		
	</div>         
</div> -->
<!--End -->