import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "product_sub_category_id",
    modalId: "#modalProductSubCategory",
    formId: "#formProductSubCategory",
    tableId: "#tableProductSubCategory",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de sub categoria de produto",
    viewTitle: "Visualizar sub categoria de produto",
    editTitle: "Editar sub categoria de produto",
    categorySelect: true,
    rowTable: function (data) {
        var type = "";
        var color = "";

        console.log(data)
        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 font-weight-bold">' + data.name + '</h6><p class="text-xs text-secondary mb-0">' + data.category.name + '</p></div></div></td>' +
            '<td><span class="badge badge-pill badge-' + (data.is_active == 1 ? 'primary' : 'light') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">' + viewBtn() + editBtn() + deleteBtn() + '</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("#category_id").val(data.category_id).trigger('change');
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


