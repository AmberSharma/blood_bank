<script>

  function supply(id)
  {
	  $.ajax
	  ({
		  url: '../controller/supplyController.php?method=supplyBlood&id='+id,
		  success: function(data)
		  {
			  $("#tab1").append($.trim(data));
		  }
	  });
  }
 </script>
<?php
echo "<table>";
echo "<tr>";
echo "<td>S.no</td><td>Blood Group</td><td>Quantity</td><td>Action</td>";
echo "</tr>";

for($i = 0 ; $i < count($result) ;$i++)
{
	echo "<tr>";
	echo "<td>".$result[$i]['id']."</td><td>".$result[$i]['blood']."</td><td>".$result[$i]['quantity']."</td><td><a href='#' onclick='supply(".$result[$i]['id'].")'>Supply </a></td>";
	echo "</tr>";
}
?>