<?php include('header.php') ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <?php include('navfixed.php') ?>

    <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="students.php">Students</a>
                </li>
                <li class="breadcrumb-item active">Add New Students</li>
            </ol>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Registration Form </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <?php include('connection.php') ?>
                            <form action="addnewstu.php" method="POST" role="form">                                
                                <h5>I. Personal Information</h5>
                                <div class="form-group col-lg-12">
                                    <div class="row">
                                        <div>
                                            <input type="hidden" name="persid" class="form-control " id="addlastname"  placeholder="Last Name" style="text-transform:capitalize;" >
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="addlastname" class="control-label">Last Name:</label>
                                            <input type="name" name="addlastname" class="form-control " id="addlastname"  placeholder="Last Name" style="text-transform:capitalize;"       required>
                                            <label for="addfirstname" class="control-label">First Name:</label>
                                            <input type="name" name="addfirstname" class="form-control" id="addfirstname" placeholder="First Name" style="text-transform:capitalize;"       required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="addmiddle" class="control-label">Middle Name:</label>           
                                            <input type="name" name="addmiddle" class="form-control" id="addmiddle" placeholder="Middle Name" style="text-transform:capitalize;">
                                            <label for="addsuffix" class="control-label">Suffix:</label>
                                            <input type="name" name="addsuffix" class="form-control" id="addsuffix" placeholder="Sr., Jr." style="text-transform:capitalize;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="bdate" class="control-label">Date of Birth:</label>                                    
                                                    <input type="date" name="bdate" class="form-control " id="bdate" placeholder="Date of Birth"      required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="age" class="control-label">Age:</label>                                    
                                                    <input type="number" name="age" class="form-control " id="age" placeholder="Age"     required>
                                                </div>
                                            </div>
                                             <label for="citizenship" class="control-label">Citizenship:</label>                                  
                                            <input type="name" name="citizenship" class="form-control" id="citizenship" placeholder="Citizenship" style="text-transform:capitalize;"    required>                                          
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="pdate" class="control-label">Place of Birth:</label>                                    
                                            <input type="name" name="pdate" class="form-control " id="pdate" placeholder="Place of birth" >
                                            <div class="row">
                                                <div class="col-lg-6">
                                                <label for="gender" class="control-label">Gender:</label>
                                                <select name="gender" class="form-control " id="gender" placeholder="Gender"    required>
                                                    <option disabled >Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="status" class="control-label">Civil Status:</label> 
                                                    <input list="status" type="name" name="status" class="form-control"  placeholder="Civil Status (Type here for Others and specify)"   required>
                                                    <datalist id="status">
                                                        <option value="Single">
                                                        <option value="Widowed">
                                                        <option value="Married">
                                                        <option value="Separated">                                                
                                                    </datalist>
                                                </div>
                                            </div>
                                            
                                        </div>                                    
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="present" class="control-label">Present Address:</label>
                                            <input type="name" name="present" class="form-control " id="present" placeholder="House No./Street Village" style="text-transform:capitalize;"  required>
                                            <input type="name" name="present1" class="form-control " id="present1" placeholder="Barangay" style="text-transform:capitalize;"  required>
                                            <input type="name" name="present2" class="form-control " id="present2" placeholder="Municipality/City" style="text-transform:capitalize;" required>
                                            <input type="name" name="present3" class="form-control " id="present3" placeholder="Province" style="text-transform:capitalize;" required>  
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="perma" class="control-label">Permanent Address:</label>
                                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                            <input type="checkbox" name="permanent" onchange="copyTextValue(this);">check if same as Present Address<br>
                                            <input type="name" name="perma" class="form-control " id="perma" placeholder="House No./Street Village" style="text-transform:capitalize;" required>
                                            <input type="name" name="perma1" class="form-control " id="perma1" placeholder="Barangay" style="text-transform:capitalize;" required>
                                            <input type="name" name="perma2" class="form-control " id="perma2" placeholder="Municipality/City" style="text-transform:capitalize;" required>
                                            <input type="name" name="perma3" class="form-control " id="perma3" placeholder="Province" style="text-transform:capitalize;" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="height" class="control-label">Height:</label>
                                                    <input type="name" name="height" class="form-control " id="height" placeholder="Height">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="weight" class="control-label">Weight:</label>
                                                    <input type="name" name="weight" class="form-control " id="weight" placeholder="Weight">
                                                </div>
                                            </div>
                                            <label for="email" class="control-label">Email Address:</label>
                                            <input type="name" name="email" class="form-control " id="email" placeholder="Email Address" required>
                                            <label for="empstatus" class="control-label">Employemnt Status:</label> 
                                            <input list="empstatus" type="name" name="empstatus" class="form-control"  placeholder="Employment Status (Specify Country Terminated)" required>
                                            <datalist id="empstatus">
                                                <option value="Employed">Employed</option>
                                                <option value="Unemployed">
                                                <option value="Wage Employed">
                                                <option value="Self Employed">
                                                <option value="New Entrant/ Fresh Graduate"> 
                                                <option value="Finished Contract">                                              
                                                <option value="Resigned">
                                                <option value="Terminated/Laidoff(local)">
                                                <option value="Terminated/Laidoff(abroad)">
                                            </datalist>                                                                                
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="landline" class="control-label">Landline Number:</label>                                    
                                            <input type="number" name="landline" class="form-control " id="landline" placeholder="Landline Number">
                                            <label for="mobile" class="control-label">Mobile Number:</label>                                    
                                            <input type="number" name="mobile" class="form-control " id="mobile" placeholder="primary Number"required>
                                            <input type="number" name="mobile1" class="form-control " id="mobile1" placeholder="secondary Number">
                                        </div>
                                    </div>
                                </div><hr>
                                <h5>II. Educational Background</h5>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="hieduc" class="control-label">Highest Educational Level:</label>
                                            <select name="hieduc" class="form-control " id="hieduc" placeholder="Gender" >
                                                <option value="">Select Highest Educational Level</option>
                                                <option value="No formal education">No formal education</option>
                                                <option value="Elementary Level">Elementary Level</option>
                                                <option value="Elementary Graduate">Elementary Graduate</option>
                                                <option value="High School Level">High School Level</option>
                                                <option value="High School Graduate">High School Graduate</option>
                                                <option value="College Level">College Level</option>
                                                <option value="College Graduate">College Graduate</option>
                                                <option value="Technical-vocational graduate">Technical-vocational graduate</option>
                                                <option value="Post Graduate">Post Graduate</option>
                                            </select>
                                            <label for="ygla" class="control-label">Year Graduated/ Last Attended:</label>
                                            <input type="name" name="ygla" class="form-control " id="ygla" placeholder="Year Graduated/ Last Attended (Month/Year e.g March 2018)">
                                            <!-- <label for="edstat" class="control-label">Educational Status:</label>
                                            <input type="name" name="edstat" class="form-control " id="edstat" placeholder="Educational Status" style="text-transform:capitalize;"> -->
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="school" class="control-label">School/ University:</label>
                                            <input type="name" name="school" class="form-control " id="school" placeholder="School/ University" style="text-transform:capitalize;">
                                            <label for="campus" class="control-label">Campus:</label>
                                            <!-- <input type="name" name="campus" class="form-control " id="campus" placeholder="Campus" style="text-transform:capitalize;"> -->
											<input list="campus" type="name" name="campus" class="form-control"  placeholder="Campus (type here for others)" style="text-transform:capitalize;"  required>
                                                    <datalist id="campus">
                                                        <option disabled = "" selected = "true">Select Campus</option>
														<option value = "Talisay Campus"> Talisay Campus</option>
														<option value = "Fortune Town Campus"> Fortune Town Campus</option>
														<option value = "Alijis Campus"> Alijis Campus</option>
														<option value = "Binalbagan Campus"> Binalbagan Campus</option>                                            
                                                    </datalist>
                                            <label for="course" class="control-label">Course/ Program:</label>
                                            <input type="name" name="course" class="form-control " id="course" placeholder="Course/ Program" style="text-transform:capitalize;">
                                        </div>                                        
                                    </div> 
                                    <label for="awards" class="control-label">Awards/ Honors Received:</label>
                                    <textarea type="name" name="awards" class="form-control " id="awards" placeholder="Awards/ Honors Received"></textarea>
                                </div><hr>
                                <h5>III. 21st Century Skills - Check five(5) skills you possess (self-assessment)</h5>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="innovation" id="censkill" value="Innovation"> Innovation<br>
                                            <input class="font" type="checkbox" name="teamwork" id="censkill" value="Team Work"> Team Work<br>    
                                            <input class="font" type="checkbox" name="multitasking" id="censkill" value="Multitasking"> Multitasking<br>  
                                            <input class="font" type="checkbox" name="workethics" id="censkill" value="Work Ethics"> Work Ethics<br>  
                                            <input class="font" type="checkbox" name="selfmotivation" id="censkill" value="Self Motivation"> Self Motivation<br>  
                                        </div>
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="create_problem_solving" id="censkill" value="Create Problem Solving"> Create Problem Solving<br>
                                            <input class="font" type="checkbox" name="problem_solving" id="censkill" value="Problem Solving"> Problem Solving<br>    
                                            <input class="font" type="checkbox" name="critical_thinking" id="censkill" value="Critical Thinking"> Critical Thinking<br>  
                                            <input class="font" type="checkbox" name="decision_making" id="censkill" value="Decision Making"> Decision Making<br>  
                                            <input class="font" type="checkbox" name="stress_tolerance" id="censkill" value="Stress Tolerance"> Stress Tolerance<br>  
                                        </div>                                            
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="planning_organizing" id="censkill" value="Planning and Organizing"> Planning and Organizing<br>
                                            <input class="font" type="checkbox" name="social_perceptiveness" id="censkill" value="Social Perceptiveness"> Social Perceptiveness<br>    
                                            <input class="font" type="checkbox" name="english_functional_skills" id="censkill" value="English Finctional Skills"> English Functional Skills<br>
                                            <input class="font" type="checkbox" name="english_comprehension" id="censkill" value="English Comprehension"> English Comprehension<br>  
                                            <input class="font" type="checkbox" name="math_functional_skill" id="censkill" value="Math Funtional Skill"> Math Functional Skill<br>  
                                        </div>
                                    </div>                                   
                                </div><hr>
                                <hr>
                                <h5>IV. Technical Skill Aquired without Formal Training</h5>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="carpentry" id="censkill" value="Carpentry"> Carpentry<br>
                                            <input class="font" type="checkbox" name="masonry" id="censkill" value="Masonry"> Masonry<br>    
                                            <input class="font" type="checkbox" name="welding" id="censkill" value="Welding"> Welding<br>  
                                            <input class="font" type="checkbox" name="auto_mechanic" id="censkill" value="Auto Mechanic"> Auto Mechanic<br>                                             
                                        </div>
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="plumbing" id="censkill" value="Plumbing"> Plumbing<br>
                                            <input class="font" type="checkbox" name="driving" id="censkill" value="Driving"> Driving<br>    
                                            <input class="font" type="checkbox" name="gardening" id="censkill" value="Gardening"> Gardening<br>  
                                            <input class="font" type="checkbox" name="tailoring" id="censkill" value="Tailoring"> Tailoring<br>
                                        </div>                                            
                                        <div class="col-lg-4">
                                            <input class="font" type="checkbox" name="photography" id="censkill" value="Photography"> Photography<br>
                                            <input class="font" type="checkbox" name="hairdressing" id="censkill" value="Hairdressing"> Hairdressing<br>    
                                            <input class="font" type="checkbox" name="cooking" id="censkill" value="Cooking"> Cooking<br>
                                            <input class="font" type="checkbox" name="baking" id="censkill" value="Baking"> Baking<br>
                                            <label for="others" class="control-label">Others:</label>
                                            <input type="name" name="others" class="form-control " id="others" placeholder="Others" style="text-transform:capitalize;">
                                        </div>
                                    </div>                                
                                <br>
                                <button type="submit" class="btn btn-primary pull-right">  Submit  </button>
                            </form>
                        </div>
                    </div>
                <div class="card-footer small text-muted"></div>
            </div>
        </div>

        <?php include('scripts.php') ?>
    </div>
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © StudentRecords 2017</small>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        function copyTextValue(bf) {
            var text1 = bf.checked ? document.getElementById("present").value : '';
            var text2 = bf.checked ? document.getElementById("present1").value : '';
            var text3 = bf.checked ? document.getElementById("present2").value : '';
            var text4 = bf.checked ? document.getElementById("present3").value : '';

            document.getElementById("perma").value = text1;
            document.getElementById("perma1").value = text2;
            document.getElementById("perma2").value = text3;
            document.getElementById("perma3").value = text4;
        }
    </script>
</body>

</html>

 