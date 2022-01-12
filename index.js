        function usrpas(){
        if (document.mainform.txt.value=="admin" && document.mainform.password.value==1234){window.location="ingreso.html"}
        else {alert("Error en Usuario o Contraseña. Intenta de nuevo.")}
        }
        document.oncontextmenu=new Function("return false");
