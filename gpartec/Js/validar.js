function mostrar(dato){
    if(dato=="1"){
        document.getElementById("Administrador").style.display = "block";
        document.getElementById("Cuentadante").style.display = "none";
         document.getElementById("Operador").style.display = "none";
        document.getElementById("Usuario").style.display = "none";
    }
    if(dato=="2"){
        document.getElementById("Administrador").style.display = "none";
        document.getElementById("Cuentadante").style.display = "block";
        document.getElementById("Operador").style.display = "none";
        document.getElementById("Usuario").style.display = "none";
    }
    if(dato=="3"){
        document.getElementById("Administrador").style.display = "none";
        document.getElementById("Cuentadante").style.display = "none";
        document.getElementById("Operador").style.display = "block";
        document.getElementById("Usuario").style.display = "none";
    }
    if(dato=="4"){
        document.getElementById("Administrador").style.display = "none";
        document.getElementById("Cuentadante").style.display = "none";
        document.getElementById("Operador").style.display = "none";
        document.getElementById("Usuario").style.display = "block";
    }
}
