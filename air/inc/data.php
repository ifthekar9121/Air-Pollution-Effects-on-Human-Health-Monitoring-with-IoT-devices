<?php include "../connection.php";?>

<?php

$filename = 'thesis_data.txt';
$the_big_array = []; 

if (($h = fopen("{$filename}", "r")) !== FALSE) 
{

  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {
    $the_big_array[] = $data;   
  }

  fclose($h);
}

  echo $the_big_array[1][0];

  // $mq2 = $the_big_array[][];
  // $mq3 = $the_big_array[][];
  // $mq4 = $the_big_array[][];
  // $mq9 = $the_big_array[][];
  // $mq135 = $the_big_array[][];
  

  // $query = "INSERT INTO index (date,time,area,lat,lng,mq2, mq3, mq4, mq9, mq135) VALUES ( now(), now(), '', '', '$mq2', '$mq3', '$mq4', '$mq9', '$mq135')";

  //   $add_new_value = mysqli_query($conn, $query);

  //       if ( !$add_new_value ){
  //         die("Query Failed ". mysqli_error($conn));
  //       }
  //       else{
  //         header("Location: allusers.php");
  //       }

?>
