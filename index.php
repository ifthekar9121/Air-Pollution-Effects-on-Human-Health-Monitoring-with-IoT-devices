<?php include"inc/header.php";?>
 
      <div class="body_content">
        <div class="row">
          <div class="col-md-12">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

                <thead>
                    <tr>
                        <th class="th-sm">Date</th>
                        <th class="th-sm">Time</th>
                        <th class="th-sm">Area</th>
                        <th class="th-sm">MQ2</th>
                        <th class="th-sm">MQ3</th>
                        <th class="th-sm">MQ4</th>
                        <th class="th-sm">MQ9</th>
                        <th class="th-sm">MQ135</th>
                    </tr>
                </thead>

                <tbody>

              <?php 

                $query = "SELECT * FROM `index` ORDER BY `id` DESC";

                $alldata = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($alldata)) {
                  # code...
                  $date     =   $row['date1'];
                  $time     =   $row['time1'];
                  $area     =   $row['area'];
                  $lat      =   $row['lat'];
                  $lng      =   $row['lng'];
                  $mq2      =   $row['mq2'];
                  $mq3      =   $row['mq3'];
                  $mq4      =   $row['mq4'];
                  $mq9      =   $row['mq9'];
                  $mq135    =   $row['mq135'];
                  ?>

                  <tr>
                    <td><?php echo $date;?></td>
                    <td><?php echo $time;?></td>
                    <td><?php echo $area;?></td>
                    <td><?php echo $mq2;?></td>
                    <td><?php echo $mq3;?></td>
                    <td><?php echo $mq4;?></td>
                    <td><?php echo $mq9;?></td>
                    <td><?php echo $mq135;?></td>
                  </tr>

                  <?php 
                }
              ?>
                           
                </tbody>
                
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include"inc/footer.php";?>

    
