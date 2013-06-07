<html>
    <head>
        <title>Create Event</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
         <link rel="stylesheet" href="../css/s.css" />

<script>

function upload_eventdetail()
  {
  $.ajax({
  type: "POST",    
  url: '../controller/infouserController.php?method=uploaddetail',
  data: $('#frmid').serialize(),
  success: function(data){
  $("#tab1").show();
  $("#tab3").show();
  $("#tab3").html("Data uploaded Successfully.");
  }
  });
  }
  
 </script>
    </head>
    
    <body>
        <form id="frmid">
        <table>
            <tr>
                <td colspan="2" style="text-align: center; color: red;">Asterisk Fields are required</td>
            </tr>
            <tr>
                <td>
                    Donor Name *:
                </td>
                <td>
                    <input type="text" name="donor_name"/>
                </td>       
            </tr>
            <tr>
                <td>
                    Address *:
                </td>
                <td>
                    <input type="text" name="donor_address"/>
               </td>       
            </tr>
            <tr>
                <td>
                    Email Id *:
                </td>
                <td>
                    <input type="text" name="donor_email" />
                </td>       
            </tr>
            <tr>
                <td>
                    Contact No:
                </td>
                <td>
                    <input type="text" name="donor_contactno" />
               </td>       
            </tr>
            <tr>
                <td>
                    Age:
                </td>
                <td>
                    <input type="text" name="donor_age" />
               </td>       
            </tr>
            <tr>
                <td>Blood Type</td><td>
                <?php
$count=count($get);
echo "<select name='donor_bloodname' id='donor_bloodname' ><option value='null'>select</option>";
for($i=0;$i<$count;$i++)
{
	echo "<option value='".$get[$i]['id']."'>".$get[$i]['blood']."</option>";
}
echo "</select>";
?>
                </td>
                </tr>
                <tr><td> <input type="hidden" name="donor_eventid" value="<?php echo $_REQUEST['eventid'];?>"/></td>
                <td><input type="submit" value="Save" onclick="upload_eventdetail()"></td>
            </tr>
        </table>
        </form>   

    </body>
</html>