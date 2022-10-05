const formLogin = document.querySelector('#formLogin');

formLogin.addEventListener('submit', (e)=>{
    e.preventDefault();

    const datosForm = new FormData(formLogin);

    document.querySelector('.contenedor-loader').classList.add('visible');

    fetch('../login/app/loginn.php', {
        method: "POST",
        body: datosForm
    })
        .then(resp => resp.text())
        .then(data =>{
            document.querySelector('.contenedor-loader').classList.remove('visible');
            if(data == '1'){
                console.log('hola');
            } else{
                document.querySelector('.mensaje').innerHTML = "Datos incorrectos";
                console.log('puto');
            }
        })
})