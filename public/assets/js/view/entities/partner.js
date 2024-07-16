import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "partner_id",
    modalId: "#modalPartner",
    formId: "#formPartner",
    tableId: "#tablePartner",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de sócio",
    viewTitle: "Visualizar sócio",
    editTitle: "Editar sócio",
    userSelect: true,
    jsonItems: function() { return null; },
    rowTable: function (data) {
        return $('<tr data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">' + data.user.name + '</h6><p class="text-xs text-secondary mb-0">' + data.user.email + '</p></div></div></td>' +
            '<td class="text-center text-muted">' + data.salary_percent + ' %' + '</td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">'+ viewBtn() + editBtn() + deleteBtn() +'</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("#user_id").val(data.user.id).trigger('change');
        $("input[name='salary_percent']").val(data.salary_percent);

        return null;
    },
    imageFile: function() { return null; },
};

generateCRUD(options);


