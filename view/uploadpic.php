<html>
    <head>
        <title>Create Event</title>
        <script src="http://localhost/blood_bank/trunk/js/jquery.tools.min.js"></script>

<script>

 function adddiv(){
	 $("#addmore").append('<input type="file" name="img[]">');

	 }
 
 </script>
    </head>
    
    <body>
        <form id="frmid2" action="../controller/adminController.php?method=insertPic" enctype="multipart/form-data" method="POST">
        <table>
            
            <tr>
                <td>
                    Upload Image *:
                </td>
                <td>
                    <input type="file" name="img[]">
                </td>       
            </tr>
            
            <tr>
                <td>
                 
                </td>
                <td id=addmore>
                    
                </td>       
            </tr>
            
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="button" name="imgadd" value="Add More +" onclick="adddiv()">
                </td>       
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="Submit" value="Insert">
                </td>       
            </tr>
        </table>
        </form>   

    </body>
</html>