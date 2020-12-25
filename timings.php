<?php
include("header.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM doctor_timings WHERE doctor_timings_id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('doctortimings record deleted successfully..');</script>";
	}
}
?>

<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">View Doctor Timings</li>
	</ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h1>View Doctor Timings record</h1>
    <table width="200" border="3">
      <tbody>
        <tr>
          <td>Doctor</td>
          <td>Timings available</td>
          <td>Status</td>
          <td>Action</td>
        </tr>
          <?php
			$sql ="SELECT * FROM doctor_timings";
            $qsql = mysqli_query($con,$sql);
            while($rs = mysqli_fetch_array($qsql))
            {
            echo "<tr>
              <td>&nbsp;$rs[doctorid]</td>
              <td>&nbsp;$rs[start_time]</td>
              <td>&nbsp;$rs[end_time]</td>
              <td>&nbsp;$rs[end_time]</td>
              <td>&nbsp;
              <a href='admin.php?editid=$rs[doctorid]'>Edit</a>| <a href='timings.php?delid=$rs[doctorid]'>Delete</a> </td>
            </tr>";
            }
		?>
        
      </tbody>
    </table>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>