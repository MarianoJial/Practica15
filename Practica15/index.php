<!doctype html>
<html>
<head>
	<title>Practica 15</title>
	<meta charset="utf-8"/>
	<SCRIPT>
    function mensaje(){
        alert ("Hola Mundo JavaScript");
        enviar();
    }
        function enviar(){
            var _nombre=document.getElementById("nom").value;
            var _edad=document.getElementById("ed").value;
            
        
            if(_nombre==""){
                alert("Te falta el nombre");
                return;
            }
            if(_edad==""){
                alert("Te falta la edad");
                return;

            }
            document.getElementById("miForm").submit();
            
        }
    </SCRIPT>
    </head>
<body>
    <form method=" POST" action="validacion.php" id="miForm">
       <p>
               NOMBRE:<INPUT TYPE="TEXT" NAME="nombre" ID="nom"/>
               <br/>
       </p>
                EDAD:<INPUT TYPE="TEXT" NAME="edad" ID="ed"/>
               <br/>
       </p>
       <INPUT TYPE="BUTTON" VALUE="ENVIAR" onclick="mensaje()"/>
       
        
    </form>
	
</body>
</html>