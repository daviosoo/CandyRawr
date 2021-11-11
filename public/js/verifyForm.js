
let form = document.getElementById('form')

form.addEventListener('submit',validateForm)

function validateForm(event) {

    event.preventDefault()

    let name = document.getElementById('name').value
    let brand = document.getElementById('brand').value
    let price = document.getElementById('price').value
    let description = document.getElementById('description').value

    if(name && brand && price && description !== ""){
        if (price.match(/^[0-9]+$/)){
            this.submit();
        }
        else{
            alert('Por favor ingrese un valor valido en el precio')
        }
    }
    else{
        alert('Por favor ingrese todos los datos')
    }

}