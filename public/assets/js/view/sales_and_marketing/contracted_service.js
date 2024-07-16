import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "contracted_service_id",
    modalId: "#modalContractedService",
    formId: "#formContractedService",
    tableId: "#tableContractedService",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de serviço",
    viewTitle: "Visualizar serviço contratado",
    editTitle: "Editar serviço contratado",
    userSelect: true,
    rowTable: function (data) {
        var type = "";
        var color = "";

        switch (data.type) {
            case 'monthly':
                type = 'MENSAL';
                color = 'info';
                break;

            case 'yearly':
                type = 'ANUAL';
                color = 'danger';
                break;

            case 'lifetime':
                type = 'ÚNICA VEZ';
                color = 'success';
                break;
        }

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column"><h6 class="mb-0 font-weight-bold">' + data.name + '</h6><p class="text-xs text-secondary mb-0">' + data.description + '</p></div></div></td>' +
            '<td class="text-center text-muted">' + data.brlPrice + '</td>' +
            '<td><span class="badge badge-pill badge-' + color + '">' + type + '</span></td>' +
            '<td><span class="badge badge-pill badge-' + (data.is_active == 1 ? 'primary' : 'light') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">' + viewBtn() + editBtn() + deleteBtn() + '</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("input[name='name']").val(data.name);
        $("input[name='price']").val(data.price);
        $("textarea[name='description']").val(data.description);

        $("input[name='hiring_date']").val(data.hiring_date);
        $("input[name='renewal_date']").val(data.renewal_date);

        $("input[name='type'][value='" + data.type + "']").prop("checked", true);
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


