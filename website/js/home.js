function buscar_producto() {
    let input = document.getElementById('search-input').value
    input = input.toLowerCase();
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


$(".anadir-a-carrito").click(function(){
    var clickedBtnID = $(this).parent().attr('id');
    clickedBtnID = clickedBtnID.substring(5);
    $.post("add-to-cart.php",
    {
      id: clickedBtnID
    },
    function(data, status){
        if(status = 'success'){
            alert("Producto añadido al carrito.");
            console.log(data)
        } else{
            alert("Error al añadir producto al carrito.");
        }
    });
  });

