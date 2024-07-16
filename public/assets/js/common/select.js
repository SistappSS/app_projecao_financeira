export function selectUser(partnerId = null) {
    var partnerIds = [];

    $.ajax({
        type: "GET",
        url: "/api/sociedade",
        success: function (response) {
            if (Array.isArray(response.data)) {
                response.data.forEach(function (item) {
                    if (item.partner && item.partner.id) {
                        partnerIds.push(item.partner.id);
                    }
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }

            fetchPartners(partnerId, partnerIds);
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        },
        async: false
    });
}

function fetchPartners(partnerId, partnerIds) {
    $.ajax({
        type: "GET",
        url: "/api/usuario",
        success: function (response) {
            var select = $("#user_id");

            select.empty();

            if (Array.isArray(response.data)) {
                select.append('<optgroup label="Usuários cadastrados"></optgroup>');
                response.data.forEach(function (user) {
                    // Verifica se o usuário não é um sócio
                    if (user.permissions && user.permissions[0] && user.permissions[0].name === 'admin' && !partnerIds.includes(user.id)) {

                        var option = $('<option></option>').attr('value', user.id).text(user.name);
                        select.append(option);

                    }
                });

                if (partnerId) {
                    select.val(partnerId).trigger('change');
                }

                select.select2({
                    width: '100%',
                    theme: 'bootstrap'
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectService() {
    var selectedItems = [];
    var discount = 0;
    var response;

    $.ajax({
        type: "GET",
        url: "/api/servico",
        success: function (responseData) {
            response = responseData;
            var select = $("#service_id");

            select.empty();

            if (Array.isArray(response.data)) {
                response.data.forEach(function (item) {
                    var option = $('<option></option>').attr('value', item.id).text(item.name);
                    select.append(option);
                });

                new MultiSelectTag('service_id', {
                    rounded: true,
                    placeholder: 'Selecionar serviço',
                    tagColor: {
                        textColor: '#327b2c',
                        borderColor: '#92e681',
                        bgColor: '#eaffe6',
                    },
                    onChange: function (values) {
                        selectedItems = values;
                        updatePrice();
                    }
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });

    function updatePrice() {
        if (!response || !Array.isArray(response.data)) {
            console.error("Resposta inválida da API:", response);
            return;
        }

        var subtotal = 0;
        selectedItems.forEach(function (selectedItem) {
            var itemId = selectedItem.value;

            if (typeof itemId !== 'number' && typeof itemId !== 'string') {
                console.error("ItemId inválido:", itemId);
                return;
            }

            var foundItem = response.data.find(item => item.id == itemId);
            if (foundItem) {
                subtotal += parseFloat(foundItem.price);
            } else {
                console.error("Item com id " + itemId + " não encontrado na resposta da API.");
            }
        });

        var discountValue = parseFloat($("#discount_price").val()) || 0;
        var total = subtotal - (subtotal * discountValue / 100);

        $("#subtotal_price").val(subtotal.toFixed(2));
        $("#total_price").val(total.toFixed(2));
    }

    $("#discount_price").on('input', updatePrice);
}

export function selectCustomer() {
    $.ajax({
        type: "GET",
        url: "/api/cliente",
        success: function (response) {
            var select = $("#customer_id");

            select.empty();

            if (Array.isArray(response.data)) {
                select.append('<option selected disabled>Selecionar cliente</option>');
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.name);
                    select.append(option);
                });

            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectPartner() {
    $.ajax({
        type: "GET",
        url: "/api/sociedade",
        success: function (response) {
            var select = $("#partner_id");

            select.empty();

            if (Array.isArray(response.data)) {
                select.append('<option selected disabled>Seleciona representante</option>');
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.user.name);
                    select.append(option);
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectState() {
    $.ajax({
        type: "GET",
        url: "/api/state",
        success: function (response) {
            var select = $("#state_id");

            select.empty();

            if (Array.isArray(response.data)) {
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.uf + ' - ' + data.state);
                    select.append(option);
                });

                if (response.data.id) {
                    select.val(response.data.id).trigger('change');
                }

                select.select2({
                    width: '100%',
                    theme: 'bootstrap'
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectCategory() {
    $.ajax({
        type: "GET",
        url: "/api/categoria-de-produto",
        success: function (response) {
            var select = $("#category_id");

            select.empty();

            if (Array.isArray(response.data)) {
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.name);
                    select.append(option);
                });

                if (response.data.id) {
                    select.val(response.data.id).trigger('change');
                }

                select.select2({
                    width: '100%',
                    theme: 'bootstrap'
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectProduct() {
    $.ajax({
        type: "GET",
        url: "/api/produto",
        success: function (response) {
            var select = $("#product_id");

            select.empty();

            if (Array.isArray(response.data)) {
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.name);
                    select.append(option);
                });

                if (response.data.id) {
                    select.val(response.data.id).trigger('change');
                }

                select.select2({
                    width: '100%',
                    theme: 'bootstrap'
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}

export function selectSubCategory() {
    $.ajax({
        type: "GET",
        url: "/api/sub-categoria-de-produto",
        success: function (response) {
            var select = $("#sub_category_id");

            select.empty();

            if (Array.isArray(response.data)) {
                response.data.forEach(function (data) {
                    var option = $('<option></option>').attr('value', data.id).text(data.name);
                    select.append(option);
                });

                if (response.data.id) {
                    select.val(response.data.id).trigger('change');
                }

                select.select2({
                    width: '100%',
                    theme: 'bootstrap'
                });
            } else {
                console.error("A propriedade 'data' não é um array na resposta da API:", response);
            }
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
}
