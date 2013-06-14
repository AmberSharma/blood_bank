<?php 
require_once '/var/www/blood_bank/trunk/libraries/constant.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script>
 
  
  function recipientdetail(id)
  {
	  $.ajax
	  ({
		  url: '../controller/supplyController.php?method=recipientDetails&id='+id,
			data:$("#recipientform").serialize(),
		  success: function(data)
		  {
			  $("#tab1").html($.trim(data));
		  }
	  });
  }

function emailindb(argument)
{
	$.ajax
	({
		url: '../controller/supplyController.php?method=emailindb',
		data:"strval=" + argument,
		success: function(data)
		{
			if($.trim(data) == "1")
			{
				$("#status").show();
			  	$("#status").html("Present");
			}
			else
			{
				$("#status").show();
			  	$("#status").html("Not Present");
				//document.getElementById('name').value = $.trim(data); 
			}
		  }
	  });
  }

function fetchdonor(argument)
{
	$.ajax
	({
		url: '../controller/supplyController.php?method=fetchdonorname',
		data:"strval=" + argument,
		success: function(data)
		{
			if($.trim(data) == "1")
			{
				$("#status").show();
			  	$("#status").html("Not Present");
			}
			else
			{
				var resp=jQuery.parseJSON(data);
				$.each(resp, function(key, val) 
				{
					document.getElementById(key).value = val; 
				});
				
			}
		  }
	  });
  }
 </script>
<body>
<form id="recipientform">
        <table>
            <tr>
                <td colspan="2" style="text-align: center; color: red;">Asterisk Fields are required</td>
            </tr>
		<tr>
                <td>
                    Email Id *:
                </td>
                <td>
                    <input type="text" name="recipient_email" onkeyup="emailindb(this.value)" onblur="fetchdonor(this.value)"/>
			<label id="status"/>
                </td>       
            </tr>
            <tr>
                <td>
                    Name *:
                </td>
                <td>
                    <input type="text" name="recipient_name" id="0"/>
                </td>       
            </tr>
            <tr>
                <td>
                    Address *:
                </td>
                <td>
                    <input type="text" name="recipient_address" id="1"/>
               </td>       
            </tr>
            
            <tr>
                <td>
                    Contact No:
                </td>
                <td>
                    <input type="text" name="recipient_contactno" id="2"/>
               </td>       
            </tr>
            <tr>
                <td>
                    Profession *:
                </td>
                <td>
                    <input type="text" name="recipient_profession" />
               </td>       
            </tr>
            <tr>
                <td>
                    Date *: 
                </td>
                <td>
                    <input id="datepicker" type="text" name="recipient_date" />
               </td>       
            </tr>
		<tr>
                <td>
                    Quantity *: 
                </td>
                <td>
                    <input type="text" name="quantity" />
               </td>       
            </tr>
            <tr>
                <td>
                    Reason *:
                </td>
                <td>
                    <textarea rows="6" cols="40" name="recipient_reason"></textarea>
               </td>       
            </tr>
            
                
                <td><input type="button" value="Save" onclick="recipientdetail('<?php echo $_REQUEST['id']; ?>')"></td>
            </tr>
        </table>
        </form>   
        </body>
        
