

function cargarindex() {
    dato = [document.getElementById("a0"), document.getElementById("a1"), document.getElementById("a2"), document.getElementById("a3"), document.getElementById("a4"), document.getElementById("a5"), document.getElementById("a6"), document.getElementById("a7")];
    carta = document.getElementsByClassName("texto");
    for (let index = 0; index < 8; index++) {
        dato[index].classList.add("card-img-top");
        dato[index].classList.add("img-fluid");
    }

    for (let index = 0; index < carta.length; index++) {
        carta[index].classList.add("mobilever");
        carta[index].classList.add("card-body");
    }


}

function cargarprod() {
    dato = document.getElementsByClassName("a");
    carta = document.getElementsByClassName("texto");
    for (let index = 0; index < dato.length; index++) {
        dato[index].classList.add("card-img-top");
        dato[index].classList.add("img-fluid");
    }

    for (let index = 0; index < carta.length; index++) {
        carta[index].classList.add("mobilever");
        carta[index].classList.add("card-body");
    }


}

function cargarmuestra() { 
    dato=document.getElementsByClassName("a");  
    for (let index = 0; index < dato.length; index++) {
        dato[index].classList.add("muestraimg");
        dato[index].classList.add("img-fluid");
    }
}
    
    const btn_delete = document.querySelectorAll('.btn-delete');

btn_delete.forEach( (item) => {
    
        item.addEventListener('click', (e) => {
    
            e.preventDefault();
    
            Swal.fire({
                title: '¿Estas seguro?',
                text: "Esto no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText:'No, Me equivoque de boton ',
                confirmButtonText: '¡Si, Borrar!'
              }).then((result) => {
                if (result.isConfirmed) {
                    var z = parseInt(Math.random()*4);
                    console.log(z);
        switch (z) {
             case 0:
             Swal.fire(
                    'Listo!',
                    'Terminator se encargara del trabajo.'
                  )
             break;
            case 1:
            Swal.fire(
                'Listo!',
                'ya se lo cargo el payaso.'
              )
            break;
            case 2:
            Swal.fire(
              'Listo!',
              'Se perdio definitivamente.'
              )
            break;
            case 3:
                Swal.fire(
                  'Listo!',
                  'lo tire por la ventana.'
                  )
                break;
            }

            setTimeout(function(){location.href = item.href;},2000);
                }



              })

        });
    
} );

