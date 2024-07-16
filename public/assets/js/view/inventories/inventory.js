import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "inventory_id",
    modalId: "#modalInventory",
    formId: "#formInventory",
    tableId: "#tableInventory",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: " inventário",
    viewTitle: "Visualizar inventário",
    editTitle: "Editar inventário",
    productSelect: true,
    rowTable: function (data) {
        var imagemHtml = data.image ? '<img class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" src="data:image/png;base64,' + data.image + '" alt="Imagem do projeto">' : 'Sem imagem';

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">' + data.product.name + '</h6></div></div></td>' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">'+ data.user.name +'</h6></div></div></td>' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">'+ data.qty +'</h6></div></div></td>' +
            '<td><span class="badge badge-' + (data.transaction_type == 'stock_in' ? 'success' : 'danger') + '"><span class="px-2">'+(data.transaction_type == 'stock_in' ? 'ENTRADA' : 'SAÍDA')+'</span></span></td>' +
            '<td class="text-center text-muted">'+data.description+'</td>' +
            '<td class="text-center text-muted">'+ data.humansDate +'</td>' +
            '</tr>');
    },
    inputsM: function (data) {
        return null;
    },
    jsonItems: function () {
        return null;
    },
    imageFile: function () {
        return null;
    },
};

generateCRUD(options);


