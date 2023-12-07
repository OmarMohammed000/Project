// getting the number and converting form object to string 

const contactNum = document.getElementById('Contact-number').value;

// getting the form so i can add event listenr to it

const form = document.getElementById('form');

// getting the date of birth and conveting it from object to string then spliting it into array
let DOB= document.getElementById('DOB');
let date=DOB.value;

let dateArray= date.split("/");
// getting the gender value from selection menu 
const gender= document.form.gender.value;
// creating indvial error message

const errorElement= document.getElementById('error');
const numError= document.getElementById('NumberError');
const genderError= document.getElementById('GenderError');
const dateError= document.getElementById('DateError');


// adding event listener note that e is the sumbit event that goes onto the function 
form.addEventListener('submit', (e)=>{
    // Doing a message counter to ensure if ther is an error
    let messages=[]
    // ensuring that the smallest number is 7 digits
    if(contactNum.length <= 6){
        numError.innerHTML=`
        <div class=" alert alert-danger w-50" role="alert"">
        Please enter a vaild number
        </div>` ;
        messages.push(1);
    }
    // ensuring that you choose a gneder
    if(gender == ''){
        genderError.innerHTML=`
        <div class=" alert alert-danger w-50" role="alert"">
        Please enter your gender
        </div>
        `;
        messages.push(2);
        
    }
//    converting the array into a number and 0 index is where the year is  so this make sure that the kid is atleast 5 and not 18

    if (parseInt(dateArray[0]) < 2004 || parseInt(dateArray[0]) > 2019) {
        dateError.innerHTML = `
            <div class="alert alert-danger w-50" role="alert">
                Please enter a valid date between 2004 and 2019.
            </div>
        `;

        messages.push(3);
    }
// this pervent submisson form going throught to the server side 
if(messages.length >0){
    e.preventDefault()
    
    errorElement.innerHTML= `<div class="alert alert-danger" role="alert">
    Invaild input 
    </div>`
}
})
