function buscar_producto() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('nombre-producto');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            y = document.getElementById('list-'+ String(i));
            y.style.display="none";
        }
        else {
            y = document.getElementById('list-'+ String(i));
            y.style.display="table-row";  
        }
    }
}
