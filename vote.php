<?php

include("home2.php");
if(!$_SESSION['id_generated'])
{
    header("location:elections.php");
}

?>
<br>
<div class="container">

<div class="col-md-6 col-md-offset-3">
   <form method="POST">
         <label><h1><b>Elections Name:</b></h1></label>
         <select class="form-control" name="title"> 
         <option value="" selected="selected">Select Election</option>
        <?php
              require("db_conn.php");
              $sel="select * from new_election";
              $run=$con->query($sel);
              if($run->num_rows>0)
              {
                  while($row=$run->fetch_array())
                  {
                ?>
                <option value="<?php echo $row['title'];   ?>"><?php echo $row['title'];   ?></option>
                        
                 <?php      
                  }
              }
?>
    
            </select>
            <br>
            <br>
            <input type="submit" name="submit_data" class="btn btn-success" value="Search Candidate">
            </form>
</div>
</div>
<?php
   
  
  if(isset($_POST['submit_data']))
{
    $title=$_POST['title'];
    $sel="select * from new_election where title='$title'";
    $run=$con->query($sel);
    if($run->num_rows>0)
    {
        while($row=$run->fetch_array())
        {
            $elec_start=$row['elec_start'];
          $elec_end=$row['elec_end'];
        }
    }

$current_ts=time();
$elec_start_ts=strtotime($elec_start);
$elec_end_ts=strtotime($elec_end);
if($elec_start_ts>$current_ts)
{
    echo "Election did not start..";
}
else if($current_ts>$elec_end_ts)
{
    echo "Election has been closed";

}
else{
    ?>

  <p>Now you can cast your vote--</p><a href="voting.php?title=<?php echo str_replace(' ','-',$title); ?>">Click Here</a>;
  <?php
}

}

?>