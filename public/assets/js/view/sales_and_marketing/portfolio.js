import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "portfolio_id",
    modalId: "#modalPortfolio",
    formId: "#formPortfolio",
    tableId: "#tablePortfolio",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de portfólio",
    viewTitle: "Visualizar portfólio",
    editTitle: "Editar portfólio",
    jsonItems: function() { return null; },
    rowTable: function (data) {
        var imagemHtml = data.image ? '<img class="avatar avatar-sm me-3" src="data:image/png;base64,' + data.image + '" alt="Imagem do projeto">' : 'Sem imagem';

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex justify-content-center"><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">' + data.customer + '</h6><p class="text-xs text-secondary mb-0">' + data.name + '</p></div></div></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + imagemHtml + '</span></td>' +
            '<td class="text-center align-middle text-sm"><span class="badge badge-sm bg-gradient-' + (data.is_active == 1 ? 'success' : 'dark') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.humansDate + '</span></td>' +
            '<td><div class="dropdown dropdown-table"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="tableBtn"><i class="fa-solid fa-ellipsis-vertical fs-5"></i></a><ul class="dropdown-menu" aria-labelledby="tableBtn">' + viewBtn() + editBtn() + deleteBtn() + '</ul></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        console.log(data)

        $("input[name='title']").val(data.title);
        $("input[name='name']").val(data.name);
        $("input[name='image']").val(data.image);
        $("input[name='customer']").val(data.customer);
        $("input[name='duration']").val(data.duration);
        $("input[name='languages']").val(data.languages);
        $("input[name='access_link']").val(data.access_link);

        if (data.is_active == 1) $("input[name='is_active']").prop('checked', data.is_active);

        return null;
    },
    imageFile: function() {
        var imageFile = $('#image')[0].files[0];

        return imageFile;
    }
};

generateCRUD(options);


