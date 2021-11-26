let cont_linea_prod = 1;
function agregarProducto(){
    let div_linea_prod = document.getElementById("linea_producto");
    var div = document.createElement('div');
    div.innerHTML = `
        <hr>
        <div class="form-group">
            <label>Producto</label>
            <select class="form-control" id ="pedido_productos" name="pedido_productos_${cont_linea_prod}" require>
                <option value="Prod 2">Prod 1</option>
                <option value="Prod 2">Prod 2</option>
                <option value="Prod 3">Prod 3</option>
                <option value="Prod 4">Prod 4</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Cantidad</label>
            <div>
                <input type="text" class="form-control input-lg" name="pedido_prod_cant_${cont_linea_prod}" require>
            </div>
        </div>
    `;
    div_linea_prod.appendChild(div);
    cont_linea_prod++;

}