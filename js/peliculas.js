"use strict";

    let app = new Vue({
        el: "#template-vue-comentarios",
        data: {
            subtitle: "Comentando",
            loading: false,
            comentarios: [],
            auth: true
        }
    });
    
    function GetComentario() {
        fetch("api/comentarios")
        .then(response => response.json())
        .then(comentarios => {
            app.comentarios = comentarios;
        })
        .catch(error => console.log(error));
    }
    
GetComentario();