const form = document.getElementById("blogForm");
const clearBtn = document.getElementById("clearBtn");

clearBtn.addEventListener("click", function(){

    if(confirm("Clear all fields?")){
        // Manually clear the fields
     document.getElementById("title").value="";
     document.getElementById("content").value="";

     //Remove error styling 
     document.getElementById("title").classList.remove("error");
     document.getElementById("content").classList.remove("error");
    }

});

form.addEventListener("submit",function(event){

    let title= document.getElementById("title");
    let content= document.getElementById("content");

    let valid=true;

    //Remove error class before validation.
    title.classList.remove("error");
    content.classList.remove("error");

    //validate only on submit.
    if(title.value.trim()===""){
        title.classList.add("error");
        valid=false;
    }

    if(content.value.trim()===""){
        content.classList.add("error");
        valid=false;
    }

    if(!valid){
        event.preventDefault(); //Stops posting. 
        alert("Complete all fields.");
    }

});
