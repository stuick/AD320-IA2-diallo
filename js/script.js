var validate= function (){
    var name= document.getElementById("name").value;
    var email= document.getElementById("email").value;
    
    if(name=="" || email==""){
        alert("Please fill the required fields.");
        return false;
    };
}