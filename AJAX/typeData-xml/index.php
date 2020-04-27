<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <div id="result3">XML</div>
        <br/>
        <input type="button" name="clickme" id="xml-click" value="Get List By XML"/>
        <script language="javascript">
            $('#xml-click').click(function()
            {
                $.ajax({
                    url : 'xml.php',
                    type : 'get',
                    dataType : 'xml',
                    success : function (result)
                    {
                        console.log(result);

                        // HTML lúc đầu
                        var html = '';
                        html += '<table border="1" cellspacing="0" cellpadding="10">';
                        html += '<tr>';
                           html += '<td>';
                                html += 'Username';
                                html += '</td>';
                                html += '<td>';
                                html += 'Email';
                           html += '</td>';
                        html += '<tr>';
                         
                        // Lặp để lấy data
                        $(result).find('items').each (function (key, val){
                             html +=  '<tr>';
                                html +=  '<td>';
                                    html +=  $(val).find('name').text();
                                html +=  '</td>';
                                html +=  '<td>';
                                    html +=  $(val).find('status').text();
                                html +=  '</td>';
                            html +=  '<tr>';
                        });
                         
                        html +=  '</table>';
                         
                        $('#result3').html(html);
                    
                    }
                });
            });    
        </script>
         
    </body>
</html>