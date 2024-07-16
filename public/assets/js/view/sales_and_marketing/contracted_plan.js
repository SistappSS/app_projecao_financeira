import {deleteBtn, editBtn, viewBtn} from "../../common/button.js";
import {generateCRUD} from "../../common/model.js";

const options = {
    route: route,
    inputId: "contracted_plan_id",
    modalId: "#modalContractedPlan",
    formId: "#formContractedPlan",
    tableId: "#tableContractedPlan",
    createbtn: ".createbtn",
    viewbtn: ".viewbtn",
    editbtn: ".editbtn",
    deletebtn: ".deletebtn",
    createTitle: "de plano",
    viewTitle: "Visualizar plano contratado",
    editTitle: "Editar plano contratado",
    rowTable: function (data) {
        console.log(data)

        return $('<tr class="text-center" data-id="' + data.id + '">' +
            '<td><div class="d-flex justify-content-center"><div class="d-flex flex-column justify-content-center"><h6 class="mb-0 text-sm">' + data.budget.customer.name + '</h6><p class="text-xs text-secondary mb-0">' + data.budget.customer.phone + '</p></div></div></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.budget.total_price + '</span></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.type + '</span></td>' +
            '<td class="text-center align-middle text-sm"><span class="badge badge-sm bg-gradient-' + (data.is_active == 1 ? 'success' : 'dark') + '">' + (data.is_active == 1 ? 'ATIVO' : 'INATIVO') + '</span></td>' +
            '<td class="align-middle"><span class="text-secondary text-xs font-weight-bold">' + data.humansDate + '</span></td>' +
            '<td><div class="dropdown dropdown-table"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" id="tableBtn"><i class="fa-solid fa-ellipsis-vertical fs-5"></i></a><ul class="dropdown-menu" aria-labelledby="tableBtn">' + viewBtn() + editBtn() + deleteBtn() + '</ul></div></td>' +
            '</tr>');
    },
    inputsM: function (data) {
        $("input[name='name']").val(data.name);
        $("textarea[name='description']").val(data.description);
        $("input[name='discount_price']").val(data.discount_price);
        $("input[name='subtotal_price']").val(data.total_price);
        $("input[name='total_price']").val(data.subtotal_price);

        $("#plan_item_id").val(data.plan_item_id);

        return null;
    },
    jsonItems: function() { return null; }
};

generateCRUD(options);


