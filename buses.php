<?php include"includes/admin_header.php";
    $connection=mysqli_connect("localhost","root","","bus");


?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hello! Admin
                             <small>Add or Update Bus List</small>
                        </h1>


                      
                                <table id="bus_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Bus_Id</th>
                                        
                                        <th>Source and Destination</th>
                                        <th>Intermediate Stations</th>
                                       
                                        
                                        <th>Date</th>
                                       
                                        <th>Ticket Cost</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
						
                                        $query = "SELECT *  FROM  posts";
                                        $select_posts = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            ?>
                                            <tr>

                                            
                                            <td><?php echo $row['post_id'];?></td>
                                          
                                           <td><?php echo $row['post_title'];?></td>
                                          <td><?php echo $row['post_via'];?></td>
                                           
                                           <td><?php echo $row['post_date'];?></td>
                                            
                                           <td><?php echo $row['seat_cost'];?></td>

                                       
                                        <?php
                                        }
                                       ?>

                    </div>
                </div>


            </div>

        </div>


<?php include"includes/admin_footer.php"; ?>
