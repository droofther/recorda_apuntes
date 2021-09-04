const text_info = document.querySelector('.text-info');
const grid_body = document.querySelector('.content-note');



/*METODO DE ENVIO DE DATOS A LA BD */
const optionMetodo = {
    method: "POST"
}



/* TRAER LOS DATOS JSON Y CONVERTIRLO EN STRING */
fetch('php/pintar_table_db.php', optionMetodo)
    .then(repuesta => repuesta.json())
    .then(resultado => {
        let i = 0

        resultado.forEach(element => {
            i++

            grid_body.innerHTML += `

            <div class="card-note">
                    <h3>${element.titulo}</h3>
                    <a href="#" class="btn btn-read active" id="open-text">ver texto</a>
                    <a class="btn btn-read" id="close-text">cerrar texto</a>

                    <div class="btn-option">
                        <a href="./php/update.php?updateid='${element.id}'" class=" btn btn-ubdate">
                                <img src="./icon/update.png" alt="update">
                            </a>
                        <a href="./php/delete.php?deleteid='${element.id}'" class="btn btn-delete">
                                <img src="./icon/delete.png" alt="delete">
                            </a>
                    </div>
                    <div class="btn-option">
                    <spam>${element.fecha}</spam>
                    </div>
                    <div class="vew-note">
                        <div class="text">
                            <p>${element.tarea}</p>
                        </div>

                    </div>
                </div>
                
            `;



            if (i >= 1) {
                text_info.classList.add('active');
            } else if (i == 0) {
                text_info.classList.remove('active');
            }

        });

    });