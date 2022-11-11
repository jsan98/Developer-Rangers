window.addEventListener("load", function(){

    if (sessionStorage.getItem("item") == null || sessionStorage.getItem("item") == "1"){
        Clear_Items();
        let Item1 = document.getElementById("Item1");
        Item1.style.color = "rgb(255, 255, 255)";
        Item1.style.borderBottomWidth = "4px";
    }
    else if (sessionStorage.getItem("item") == "2"){
        Clear_Items();
        let Item2 = document.getElementById("Item2");
        Item2.style.color = "rgb(255, 255, 255)";
        Item2.style.borderBottomWidth = "4px";
     
    }
    else if (sessionStorage.getItem("item") == "3"){
        Clear_Items();
        let Item3 = document.getElementById("Item3");
        Item3.style.color = "rgb(255, 255, 255)";
        Item3.style.borderBottomWidth = "4px";
       
    }
    else if (sessionStorage.getItem("item") == "4"){
        Clear_Items();
        let Item4 = document.getElementById("Item4");
        Item4.style.color = "rgb(255, 255, 255)";
        Item4.style.borderBottomWidth = "4px";
      
    }
    else if (sessionStorage.getItem("item") == "5"){
        Clear_Items();
        let Item5 = document.getElementById("Item5");
        Item5.style.color = "rgb(255, 255, 255)";
        Item5.style.borderBottomWidth = "4px";
        
    }

});


function AjusActItem1(){
    sessionStorage.setItem("item", "1");
}

function AjusActItem2(){
    sessionStorage.setItem("item", "2");
}

function AjusActItem3(){
    sessionStorage.setItem("item", "3");
}

function AjusActItem4(){
    sessionStorage.setItem("item", "4");
}

function AjusActItem5(){
    sessionStorage.setItem("item", "5");
}

function AjusActItemRes1(){
    sessionStorage.setItem("itemR", "1");
}

function Clear_Items (){
    let Items1 = document.getElementById("Item1");
    let Items2 = document.getElementById("Item2");
    let Items3 = document.getElementById("Item3");
    let Items4 = document.getElementById("Item4");
    let Items5 = document.getElementById("Item5");

    Items1.style.color = "rgb(216, 225, 225)";
    Items1.style.borderBottomWidth = "0px";

    Items2.style.color = "rgb(216, 225, 225)";
    Items2.style.borderBottomWidth = "0px";

    Items3.style.color = "rgb(216, 225, 225)";
    Items3.style.borderBottomWidth = "0px";

    Items4.style.color = "rgb(216, 225, 225)";
    Items4.style.borderBottomWidth = "0px";

    Items5.style.color = "rgb(216, 225, 225)";
    Items5.style.borderBottomWidth = "0px";
}