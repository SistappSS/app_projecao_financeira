import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "supplier_id",
    modalId: "#modalSupplier",
    formId: "#formSupplier",
    tableId: "#tableSupplier",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de fornecedor",
    viewTitle: "Visualizar fornecedor",
    editTitle: "Editar fornecedor",
    stateSelect: true,
    rowTable: function (data) {
        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 font-weight-bold">' + data.name + '</h6><p class="text-xs text-secondary mb-0">' + data.document + '</p></div></div></td>' +
            '<td class="text-center">' + data.phone + '</td>' +
            '<td class="text-center"><span class="badge badge-' + (data.is_active == 1 ? 'primary' : 'light') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">' + viewBtn() + editBtn() + deleteBtn() + '</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("input[name='name']").val(data.name);
        $("input[name='document']").val(data.document);
        $("input[name='phone']").val(data.phone);
        $("input[name='address']").val(data.address);
        $("input[name='city']").val(data.city);
        $("input[name='postal_code']").val(data.postal_code);

        $("#state_id").val(data.state_id).trigger('change');

        $("input[name='is_active']").prop('checked', data.is_active == 1);

        return null;
    },
    jsonItems: function() { return null; },
    inputFile: function() { return null; },
};

generateCRUD(options);


