<?php include"connection.php";?>

<?php
$filename = 'thesis_data.txt';
$the_big_array = []; 

if (($h = fopen("{$filename}", "r")) !== FALSE) 
{

  while (($data = fgetcsv($h, 5, ",")) !== FALSE) 
  {
    $the_big_array[] = $data;		
  }

  fclose($h);
}


  $mq2 = $the_big_array[0][0];
  $mq3 = $the_big_array[1][0];
  $mq4 = $the_big_array[2][0];
  $mq9 = $the_big_array[3][0];
  $mq135 = $the_big_array[4][0];
  

  $query = "INSERT INTO index (date1,area,lat,lng,mq2,mq3,mq4,mq9,mq135) 
                       VALUES (now(),'Dhaka','70.23','71.23','$mq2','$mq3','$mq4','$mq9','$mq135')
                        WHERE area = 'Dhaka' ";

    $add_new_value = mysqli_query($conn, $query);

        if ( !$add_new_value ){
          die("Query Failed ". mysqli_error($conn));
        }
        else{
        }

?>