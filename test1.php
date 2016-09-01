<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
        
        <form method="post" action="maidservice.html">
            <input type="button" value="press 1" onclick="hello()"/>
            <input type="submit" value="press 2" onclick="hello()"/>
        </form>
        
        <?php
        
            function hello()
            {
                 $a = 10;
                 echo $a;
            }
        ?>
    </body>
</html>
    