import {deleteBtn, editBtn, viewBtn} from "../common/button.js";
import {generateCRUD} from "../common/model.js";

const options = {
    route: route,
    inputId: "budget_id",
    modalId: "#modalBudget",
    formId: "#formBudget",
    tableId: "#tableBudget",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de orçamento",
    viewTitle: "Visualizar orçamento",
    editTitle: "Editar orçamento",
    inputDisabled: "subtotal_price",
    inputDisabled2: "total_price",
    planItemSelect: true,
    customerSelect: true,
    partnerSelect: true,
    rowTable: function (data) {
        var color = "";
        var status = "";

        var phone = data.customer.phone.replace(/\D/g, '');

        switch (data.status) {
            case 'open':
                status = 'Em aberto';
                color = 'info';
            break;

            case 'rejected':
                status = 'Rejeitado';
                color = 'danger';
            break;

            case 'accepted':
                status = 'Aceito';
                color = 'success';
                break;
        }

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex justify-content-center"><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">' + data.customer.name + '</h6><p class="text-xs text-secondary mb-0">' + data.customer.phone + '</p></div></div></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.total_budget_price + '</span></td>' +
            '<td class="text-center align-middle text-sm"><span class="badge badge-sm bg-gradient-' + color + '">' + status + '</span></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.humansDate + '</span></td>' +
            '<td>' +
            '<div class="dropdown dropdown-table"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="tableBtn"><i class="fa-solid fa-ellipsis-vertical fs-5"></i></a><ul class="dropdown-menu" aria-labelledby="tableBtn">'
            + '<li><a href="/orcamento/cliente/'+phone+'/'+data.budget_code+'" class="dropdown-item viewbtn" data-toggle="tooltip" title="Visualizar" target="_blank"><i class="fa-solid fa-expand text-gradient text-info fs-5"></i>Visualizar orçamento</a></li>' + '<li><a href="/orcamento/'+data.id+'/editar-orcamento" class="dropdown-item" data-toggle="tooltip" title="Editar"><i class="fa-solid fa-pen-to-square text-gradient text-success fs-5"></i>Editar registro</a></li>' + deleteBtn() + '</ul></div>' +
            '</td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("input[name='name']").val(data.name);
        $("textarea[name='observation']").val(data.observation);
        $("input[name='discount_price']").val(data.discount_price);
        $("input[name='subtotal_price']").val(data.total_price);
        $("input[name='total_price']").val(data.subtotal_price);

        $("#partner_id").val(data.partner_id);
        $("#customer_id").val(data.customer_id);
        $("#plan_item_id").val(data.plan_item_id);
        $("#method_payment").val(data.method_payment);

        return null;
    },
    jsonItems: function() {
        var selectedItems = $('#plan_item_id').val();
        var formData = "";

        selectedItems.forEach(function(itemId) {
            formData += "&plan_item_id[]=" + itemId;
        });

        var subtotal = $("input[name='subtotal_price']").val();
        var total = $("input[name='total_price']").val();
        formData += "&subtotal_price=" + subtotal;
        formData += "&total_price=" + total;

        return formData;
    },
    imageFile: function() { return null; }
};

generateCRUD(options);


