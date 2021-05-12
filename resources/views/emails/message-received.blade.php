<!DOCTYPE html>
    <html lang="en_EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       <title>SoporteManheim - Nuevo Email</title>
    </head>
    <body style="margin: 0; padding: 0;  align:center ">
    
    <table  border="1" align="center cellpadding="0" cellspacing="0" width="600px" style=" border-color:#293D82" >
    <!-- JAVI HAY QUE DARLE MAS FORMATO QUE NO ME DA TIEMPO LA IMPORTACION-->
        <tr>
            <td align="center" style="padding: 40px 0 30px 0;">
                 <img src="https://www.manheim.co.uk/assets/images/master/logo_desktop.jpg" alt="Manheim Logo" width="500" height="230" style="display: block;" />
            </td>
        </tr>
        <tr>
    
        <td  align="center" style="padding: 20px 0 30px 0;">
                    <p><strong>Recibiste un mensaje de : </strong> {{ $msg['name'] }} </p>
                    <p> <strong>Email:</strong>   {{ $msg['email'] }}</p>
                    <p><strong>Asunto: </strong>  {{ $msg['subject'] }}</p>
                    <p><strong>Contenido: </strong>  {{ $msg['contenido'] }}</p>
           </td>
    
        </tr>
    </table>
    </body>

    <footer style="margin: 0; padding: 0;  align:center " >
        <div class="col-md-12 copyright text-center" style="margin-top: 2px; padding-bottom: 2px; color:#293D82">
                        <a href="https://www.manheim.es/">
                    <strong> Manheim España</a>|  Copyright @ 2008 - {{date('Y') }} </strong>
    </div>
    </footer>
</html>


