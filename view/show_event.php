<?php
$count=count($get);
echo "<table><tr><td>Date of Event</td><td>Event Name</td><td>Location</td></tr>";
for($i=0;$i<$count;$i++)
{
	echo "<tr><td>".$get[$i]['date_of_event']."</td><td>".$get[$i]['name_event']."</td><td>".$get[$i]['location']."</td></tr>";
}
?>