const getAll = (p) =>{
    $.ajax({
        type: "post",
        url: p,
        data: null,
        success: response => {
            let products = '';
            $.each(JSON.parse(response), (key, val) => { 
                    products += `<div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="form-check mylabel">
                            <input class="delete-checkbox" type="checkbox">
                            
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

$(document).ready( () => { 
    getAll("../controller/getProducts.php");
});

$('#delete-product-btn').on('click', (p) => { 
    const del = $('input[type=checkbox]:checked').closest('.card').find('p[hidden]');
    $.each(del, (i, el) => {
        $.ajax({
            type: "post",
            url: "../controller/del_product.php",
            data: 'del=' + Number(el.innerText)
        });
    });
    document.location.reload(true);
});