import {deleteBtn, editBtn, viewBtn} from "../common/button.js";
import {generateCRUD} from "../common/model.js";

const options = {
    route: route,
    inputId: "task_status_id",
    modalId: "#modalTaskStatus",
    formId: "#formTaskStatus",
    tableId: "#tableTaskStatus",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de usuário",
    viewTitle: "Visualizar usuário",
    editTitle: "Editar usuário",
    userSelect: false,
    planItemSelect: false,
    jsonItems: function() { return null; },
    rowTable: function (data) {
        return $('<tr data-id="' + data.id + '">' +
            '<td class="text-center"><span class="badge text-uppercase" style="border: 1px solid '+ data.color +';">' + data.task_status + '</span></td>' +
            '<td class="text-muted text-center">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">'+ viewBtn() + editBtn() + deleteBtn() +'</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function inputsM(data) {
        $("input[name='task_status']").val(data.task_status);
        $("input[name='color']").val(data.color);

        return "Inputs updated";
    },
    imageFile: function() { return null; },
};

generateCRUD(options);

