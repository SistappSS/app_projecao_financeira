import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "product_category_id",
    modalId: "#modalProductCategory",
    formId: "#formProductCategory",
    tableId: "#tableProductCategory",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de serviço",
    viewTitle: "Visualizar categoria de produto",
    editTitle: "Editar categoria de produto",
    rowTable: function (data) {
        var type = "";
        var color = "";

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">' + data.name + '</h6></div></div></td>' +
            '<td><span class="badge badge-pill badge-' + (data.is_active == 1 ? 'primary' : 'light') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">' + viewBtn() + editBtn() + deleteBtn() + '</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("input[name='name']").val(data.name);
        if (data.isActive) $("input[name='is_active']").prop('checked', data.status);

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


