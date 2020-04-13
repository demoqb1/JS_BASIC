<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <div id="result1">TEXT</div>
        
        <br/>
        <input type="button" name="clickme" id="text-click" value="Get List By Text"/>
       
        <script language="javascript">
            $('#text-click').click(function()
            {
                $.ajax({
                    url : 'text.php',
                    type : 'get',
                    dataType : 'text',
                    success : function (result){
                        console.log(result);
                        $('#result1').html(result);
                    }
                });
            });
        </script>
         
    </body>
</html>