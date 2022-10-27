 
var messegePop = document.querySelector("#messegee");
var myLoaction = document.querySelector(".locations");
var myDateTime = document.querySelector(".time_date");
var yes = document.querySelector(".yes");


const d = new Date();
let hour = d.getHours();


let mydata =  new Date().toLocaleString();
console.log(yes)


fetch('https://api.ipregistry.co/?key=motsheejucfbs9sn')
     .then(function (response) {
        return response.json();
    })
    .then(function (payload) {
        let myCity = payload.location.country.name + ', ' + payload.location.city;
        myLoaction.innerHTML = myCity;
    });


    let msg ="good morning"

    if(hour >= 0 && hour <= 12){
         msg = "good morning"
        messegePop.innerHTML = msg;
        myDateTime.innerHTML = mydata;
        
       
    }else{
        msg = "good afternoon"
        messegePop.innerHTML = msg;
        myDateTime.innerHTML = mydata;
    }"none";

