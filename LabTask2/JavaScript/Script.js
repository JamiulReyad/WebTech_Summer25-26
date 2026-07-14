
function collect_data(){


let isvalidname=collect_name();

let isvalidpass=collect_pass();

return false;

    

}


function collect_name()
{
    let uname= document.getElementById("username").value;
   
    if(uname=="")
    {
        document.getElementById("errorname").innerHTML="username Can Not Be Empty";
        return false;
    }
     if(uname!="AIUB")
    {
        document.getElementById("errorname").innerHTML="you have 3 attempts left";
        return false;
    }
   
    console.log(uname);
    return false;
}

function collect_pass()
{
    let upass= document.getElementById("password").value;
   
    if(upass=="")
    {
        document.getElementById("errorpass").innerHTML="Password needed";
        return false;
    }
    if(upass!="$_student")
    {
        
        document.getElementById("errorpass").innerHTML="you have 3 attempts left";
        return false;
    }
    
   
    console.log(upass);
    return false;
}

