let button = document.getElementById('button')
let list = document.getElementById('list')
let main = document.getElementById('main')

button.addEventListener('click', ()=>{

    list.classList.toggle('items-active')
    main.classList.toggle('main-active')

})