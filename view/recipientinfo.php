<script>
 
  
  function recipientdetail(id)
  {
	  $.ajax
	  ({
		  url: '../controller/supplyController.php?method=recipientDetails',
			data:$("#recipientform").serialize(),
		  success: function(data)
		  {
			  $("#tab1").html($.trim(data));
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
			  $("#status").html("correct");
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
                    Name *:
                </td>
                <td>
                    <input type="text" name="recipient_name" />
                </td>       
            </tr>
            <tr>
                <td>
                    Address *:
                </td>
                <td>
                    <input type="text" name="recipient_address"/>
               </td>       
            </tr>
            <tr>
                <td>
                    Email Id *:
                </td>
                <td>
                    <input type="text" name="recipient_email" onkeyup="fetchdonor(this.value)"/>
			<label id="status"/>
                </td>       
            </tr>
            <tr>
                <td>
                    Contact No:
                </td>
                <td>
                    <input type="text" name="recipient_contactno" />
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
        
