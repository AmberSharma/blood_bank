<script type="text/javascript">

function onchange_action() {
	
var strUser = $("#events option:selected").val();
$.ajax({
	  url: '../controller/infouserController.php?method=showinformationpage&eventid='+strUser,
	  success: function(data){
	  $("#tab1").show();
	  $("#tab3").show();
	  $("#tab3").html(data);
	  }
	  });
}
</script>

<?php
$count=count($get);
echo "Choose the Event   ";
echo "<select name='events' id='events' onchange='javascript:onchange_action()'><option value='null'>select</option>";
for($i=0;$i<$count;$i++)
{
	echo "<option value='".$get[$i]['id']."'>".$get[$i]['name_event']."</option>";
}
echo "</select>";
?>
 