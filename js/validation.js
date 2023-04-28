// file validate form

var errorMessage;  // this global varibale

const validate = () => {
    let formData = document.querySelector('form');


    let email = formData.email.value;


    if ( /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {

        console.log("sdj");
        return false;
        
    } else {
        alert('invalid email')
    }




    return false;

}