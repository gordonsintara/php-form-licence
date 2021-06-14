const form = document.getElementById('form');
const id = document.getElementById('id_number');

form.addEventListener('button', (e) =>{
    console.log("sent");
    e.preventDefault();
    checkInputs();
});

function checkInputs(){
    const idValue = id.value.trim();

    if(idValue === ''){

        setErrorFor(id, 'ID cant be blank')
    }else{
        setSuccessFor(id);
    }
}

function setErrorFor(input, message){
const formControl = input.parentElement;
const small = formControl.querySelector('p');

small.innerText = message;

formControl.className = 'form-control error';
}