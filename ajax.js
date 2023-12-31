const formulariosAjax = document.querySelectorAll(".FormularioAjax");

function enviar_formulario_ajax(e){
    e.preventdefault();

    let enviar = confirm("Quieres enviar el formulario");

    if(enviar == true){
        let data = new FormData(this);
        let method = this.getAttribute("method");
        let action = this.getAttribute("action");

        let encabezados = new Headers();

        let config={
            method: method,
            headers: encabezados,
            mode: "cors",
            cache: "no-cache",
            body: data,
        }

        fetch(action,config)
        .then(res => res.text())
        .then(res => { alert(res)
        });
    }
}

formulariosAjax.forEach(formularios =>{
    formularios.addEventListener("submit", enviar_formulario_ajax);
});