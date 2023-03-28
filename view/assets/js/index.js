const getAll = (p) =>{
    $.ajax({
        type: "post",
        url: p,
        data: null,
        success: function (response) {
            let products = '';
            $.each(JSON.parse(response), function (key, val) { 
                    products += `<div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="form-check mylabel">
                            <input class="form-check-input delete-checkbox" type="checkbox">
                            <label class="form-check-label " for="delete_me" id="mylabel">Delete me</label>
                        </div>
                        <div class="card-body text-center">
                        <p hidden>${val.id}</p>
                        <h5 class="card-title">${val.sku}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${val.name}</h6>
                        <p class="card-text">$${val.price}</p>`;
                        if ((val.size)) {
                            products += `<p class="card-text">Size:<br/>${val.size}GB</p>`;
                        } else if((val.weight)){
                            products += `<p class="card-text">Weight:<br/> ${val.weight} Kg</p>`;
                        } else{
                            products += `<p class="card-text">Dimensions(HxWxL):<br/>${val.height}cmx${val.width}cmx${val.length}cm</p>`;
                        };
                        products += `</div>
                    </div>
                </div>`;
            });

            $('#itens_area').html('');
            $('#itens_area').hide(250);
            $('#itens_area').html(products);
            $('#itens_area').fadeIn(250);
        }
    });
};

$(document).ready(function (param) { 
    getAll("../controller/getProducts.php");
});

$('#delete-product-btn').on('click', (p) => { 
    let del = $('input[type=checkbox]:checked').closest('.card').find('p[hidden]');
    $.each(del, function (i, el) {
        $.ajax({
            type: "post",
            url: "../controller/del_product.php",
            data: 'del=' + Number(el.innerText)
        });
    });
    document.location.reload(true);
});