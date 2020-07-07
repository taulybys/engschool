function calc() {

    let experience = document.getElementById("experience");
    
    let hour = document.getElementById("hour");

    let day = document.getElementById("day");
    
    let result = document.getElementById("result"); 
 
    let income;

    income = parseInt(experience.value);            
    income = parseInt(hour.value) * income;
    income = parseInt(day.value) * income;

    if (income>0) {
        result.value = income;
    console.log(income);
    }
    else {
        result.value = "Доход";
    console.log(income);
    }
    
 
}

// alert(calc());


