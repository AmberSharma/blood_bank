<script>
 
  
  function insertdetails(id)
  {
	  $.ajax
	  ({
		  url: '../controller/supplyController.php?method=recipientDetails',
		  success: function(data)
		  {
			  $("#tab1").html($.trim(data));
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
                    <input type="text" name="recipient_name"/>
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
                    <input type="text" name="recipient_email" />
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
                    Reason *:
                </td>
                <td>
                    <textarea rows="6" cols="40" name="recipient_reason"></textarea>
               </td>       
            </tr>
            
                
                <td><input type="button" value="Save" onclick="insertdetails('$_REQUEST['id']')"></td>
            </tr>
        </table>
        </form>   
        </body>
        
