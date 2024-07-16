import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "user_id",
    modalId: "#modalUser",
    formId: "#formUser",
    tableId: "#tableUser",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de usuário",
    viewTitle: "Visualizar usuário",
    editTitle: "Editar usuário",
    jsonItems: function () {
        return null;
    },
    rowTable: function (data) {
        var permission = "";

        switch (data.permissions[0]['name']) {
            case 'admin':
                permission = 'Administrador';
                break;

            case 'plan1':
                permission = 'Plano 01';
                break;

            case 'plan2':
                permission = 'Plano 02';

                break;

            case 'plan3':
                permission = 'Plano 03';

                break;
            case 'plan4':
                permission = 'Plano 04';
                break;
        }

        return $('<tr data-id="' + data.id + '">' +
            '<td><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 font-weight-bold">' + data.name + '</h6><p class="text-xs text-secondary mb-0">' + data.email + '</p></div></div></td>' +
            '<td class="text-center"><span class="badge badge-' + (data.permissions[0]['name'] == 'admin' ? 'primary' : 'light') + ' text-uppercase">' + permission + '</span></td>' +
            '<td class="text-center"><span class="badge badge-' + (data.is_active == 1 ? 'primary' : 'light') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="text-center text-muted">' + data.humansDate + '</td>' +
            '<td class="text-center"><div class=""><div class="btn-group"><button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações</button><div class="dropdown-menu">' + viewBtn() + editBtn() + deleteBtn() + '</div></div></div></td>' +
            '</tr>');
    },
    inputsM: function inputsM(data) {
        $("input[name='name']").val(data.name);
        $("input[name='password']").val('');
        $("input[name='password_confirmation']").val('');

        $("input[name='is_active']").prop('checked', data.is_active == 1);
        $("input[name='permission'][value='" + data.permissionUser + "']").prop("checked", true);

        return null;
    },
    imageFile: function () {
        return null;
    },
};

generateCRUD(options);

