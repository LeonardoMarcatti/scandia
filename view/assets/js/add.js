
//When Save button is clicked this function submits the product form
$('#save').on('click', () => {
    $('#hidden_send').click();
});
    
    //This function changes the html content of #product_area in #product_form as well as the action attribute
$('#productType').on('change', p => {
    switch (p.target.value) {
        case 'dvd':
            $('#product_area').html(`<div class="col-3 mt-3">
            <label for="size" class="form-label">Please provide DVD size(MB):</label>
                <input type="number" class="form-control" placeholder="0" name="size" id="size" required>
                <div class="invalid-feedback">
                    Please, submit required data.
                </div>
                <b>Description:</b>
                <p>DVD is a physical media used to store data</p>
            </div>`);
            break;
        case 'furniture':
            $('#product_area').html(`<div class="row mt-3">
                <p>Please provide dimensions for your furniture.</p>
                <div class="col">
                    <label for="sku" class="form-label">Height(CM):</label>
                    <input type="number" step=0.01 class="form-control" placeholder="0" name="height" id="hight" required>
                    <div class="invalid-feedback">
                        Please, submit required data.
                    </div>
                </div>
                <div class="col">
                    <label for="sku" class="form-label">Width(CM):</label>
                    <input type="number" step=0.01 class="form-control" placeholder="0" name="width" id="width" required>
                    <div class="invalid-feedback">
                        Please, submit required data.
                    </div>
                </div>
                <div class="col">
                    <label for="sku" class="form-label">Length(CM):</label>
                    <input type="number" step=0.01 class="form-control" placeholder="0" name="length" id="length" required>
                    <div class="invalid-feedback">
                        Please, submit required data.
                    </div>
                </div>
                <b>Description:</b>
                <p>Furniture are made out of wood.</p>
            </div>`);
            break;
        case 'book':
            $('#product_area').html(`<div class="col-3 mt-3">
                <label for="size" class="form-label">Please provide book weight(Kg):</label>
                    <input type="number" step=0.01 class="form-control" placeholder="0" name="weight" id="weight" required>
                    <div class="invalid-feedback">
                        Please, submit required data.
                    </div>
                    <b>Description:</b>
                    <p>Reading books is the best way to get smart.</p>
                </div>`);
            break;
        default:
            $('#product_area').html('');
            $('#product_form').removeAttr('action');
            break;
    };

    if (p.target.value != '0') {
        $('#save').removeAttr('disabled').removeClass('btn-light').addClass('btn-success');
    } else {
        $('#save').attr('disabled', '').removeClass('btn-success').addClass('btn-light');
    };
});

const validateForm = () => {
    const forms = document.querySelectorAll('.needs-validation');

   forms.forEach(function (form) {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            };
            form.classList.add('was-validated');
        }, false)
        });
};

validateForm();
