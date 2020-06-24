<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php
            include './Sidebar.php';
            include '../Connection.php';
        // put your code here
        ?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <?php
         
       //     include '../Connection.php';
        // put your code here
        ?>
        
        <?php
            $sql="SELECT co.*,st.*,ct.*,lg.* FROM `companyinfo`  co LEFT JOIN tblstate st on st.StateId = co.State LEFT JOIN tblcity ct on ct.CitytId = co.City LEFT JOIN tbllogin lg on lg.LoginId = co.LoginId";
            
            $resultarr = mysqli_query($conn, $sql);
            
        ?>
        
        <div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card" id="pl">
                    <div class="card-header">
                        <strong class="card-title">Registered Companies</strong>
                    </div>
                    <div class="card-body">
                        <table style="background: white" class="table table-striped table-bordered table-responsive table-hover">
            <thead class="thead-dark ">
                                    <th>Sr. No.</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Contact Person Name</th>
                                    <th>Mobile No</th>
                                    <th>Company Email</th>
                                    <th>Website</th>
                                    <th>About Company</th>
                                    <th>Email Id</th>   
                                    </thead>
                                    <?php
                                    $count=0;
                                    while ($row = mysqli_fetch_assoc($resultarr)) {
                                    ?>
                                    <tr>
                                         <td>  <?php echo  ++$count.'.';  ?>
                                            <td><?php echo $row['CompanyName']; ?></td>
                                            <td><?php echo $row['Address']; ?></td>
                                            <td><?php echo $row['CityName']; ?></td>
                                            <td><?php echo $row['StateName']; ?></td>
                                            <td><?php echo $row['ContactPersonName']; ?></td>
                                            <td><?php echo $row['Mobile']; ?></td>
                                            <td><?php echo $row['CompanyEmail']; ?></td>
                                            <td><?php echo $row['Wesite']; ?></td>
                                            <td><?php echo $row['AboutCompany']; ?></td>
                                            <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <?php }?>
        </table>
   
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div>
    
        <br>
        <br>
        
    </body>
</html>
<?php include './Footer.php'; ?>
