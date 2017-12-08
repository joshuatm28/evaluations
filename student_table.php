<table class="table  table-bordered table-hover" id="dataTable" width="100%" cellspacing="0" >
    <div style = "margin-left:240px;">
    <!-- <a href = "" class = "btn btn-primary"><i class = "fa fa-fw fa-tags"></i>Talisay Campus</a> &nbsp
    <a href = "" class = "btn btn-primary"><i class = "fa fa-fw fa-tags"></i>Fortune Town Campus</a> &nbsp
    <a href = "" class = "btn btn-primary"><i class = "fa fa-fw fa-tags"></i>Alijis Campus</a> &nbsp
    <a href = "" class = "btn btn-primary"><i class = "fa fa-fw fa-tags"></i>Binalbagan Campus</a> &nbsp -->
    </div>
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Gender</th>
            <th>Employment Status</th>
            <th>Campus</th>
            <th>Educational Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php                                   
            $query1=mysqli_query($conn,"select * from personal ORDER BY persid DESC")or die(mysqli_error($conn));
            while ($row=mysqli_fetch_array($query1)){
                $persid = $row["persid"];  
        ?>  
            <tr>
                <td style="text-transform:capitalize;"><?php echo $row['lastname']; ?></td>
                <td style="text-transform:capitalize;"><?php echo $row['firstname']; ?></td>
                <td style="text-transform:capitalize;"><?php echo $row['gender']; ?></td>
                <td style="text-transform:capitalize;"><?php echo $row['empstat']; ?></td>
                <td style="text-transform:capitalize;"><?php echo $row['campus']; ?></td>
                <td style="text-transform:capitalize;"><?php echo $row['status']; ?></td>
                <td>               
                    <!--<a href="student_update.php" class="btn btn-primary" data-target="#update_student" href="#view_student"><span class="fa fa-fw fa-pencil-square-o"></span></a>-->
                    <!-- <a href="employee_view.php?persid=<?php echo $row['persid'];?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-fw fa-eye"></span></a> -->
                    <a href = "print.php?persid=<?php echo $row['persid'];?>" class="btn btn-danger btn-sm"><span class="fa fa-fw fa-eye"></span></a>
                    <?php
                    ?>
                </td>

            </tr>
            <?php
            }
        ?>
    </tbody>
</table>



