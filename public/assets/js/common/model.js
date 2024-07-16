import {openModalCreate} from "../common/modal.js";
import {alert, alertEmpty, alertError, removeErrorModal} from "../common/alert.js";
import {
    selectCustomer,
    selectPartner,
    selectService,
    selectUser,
    selectState,
    selectCategory,
    selectSubCategory, selectProduct
} from "../common/select.js";

export function generateCRUD(options) {
    const {
        route,
        inputId,
        modalId,
        formId,
        tableId,
        createbtn,
        viewbtn,
        editbtn,
        deletebtn,
        createTitle,
        viewTitle,
        editTitle,
        rowTable,
        inputsM,
        inputDisabled,
        inputDisabled2,
        userSelect,
        serviceSelect,
        customerSelect,
        partnerSelect,
        stateSelect,
        categorySelect,
        subCategorySelect,
        productSelect,
        jsonItems,
        imageFile
    } = options;

    /* Start: Table */
    function loadTable() {
        $.ajax({
            type: "GET",
            url: route,
            success: function (response) {
                if ($.fn.DataTable.isDataTable(tableId)) {
                    $(tableId).DataTable().clear().destroy();
                }

                $(tableId + " tbody").empty();

                if (Array.isArray(response.data)) {
                    response.data.forEach(function (data) {
                        if (rowTable) {
                            const newRow = rowTable(data);
                            $(tableId + " tbody").append(newRow);
                        }
                    });

                    var table = $(tableId).DataTable({
                        "paging": true,
                        "language": {
                            "info": "Listando _START_ até _END_ de _TOTAL_ registros",
                            "sInfoFiltered": "<br> Total de _MAX_ registros cadastrados",
                            "sInfoEmpty": "Listando 0 até 0 de 0 registros",
                            "sZeroRecords": "Nenhum registro encontrado!",
                            "paginate": {
                                "next": "<i class='iconsminds-arrow-right'></i>",
                                "previous": "<i class='iconsminds-arrow-left'></i>"
                            }
                        },
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "dom": 'Bfrtip',
                        "buttons": [
                            {
                                extend: 'copy',
                                text: 'Copy',
                                className: 'd-none'
                            },
                            {
                                extend: 'csv',
                                text: 'CSV',
                                className: 'd-none'
                            },
                            {
                                extend: 'excel',
                                text: 'Excel',
                                className: 'd-none'
                            },
                            {
                                extend: 'pdf',
                                text: 'PDF',
                                className: 'd-none'
                            }
                        ]
                    });

                    $('#dataTablesCopy').on('click', function () {
                        table.button('.buttons-copy').trigger();
                    });

                    $('#dataTablesExcel').on('click', function () {
                        table.button('.buttons-excel').trigger();
                    });

                    $('#dataTablesCsv').on('click', function () {
                        table.button('.buttons-csv').trigger();
                    });

                    $('#dataTablesPdf').on('click', function () {
                        table.button('.buttons-pdf').trigger();
                    });

                    $('#searchDatatable').on('keyup', function () {
                        table.search(this.value).draw();
                    });

                    $('#pageCountDatatable .dropdown-item').on('click', function () {
                        var length = $(this).text();
                        table.page.len(length).draw();
                        $('#pageCountDatatable button').text(length);
                    });
                } else {
                    console.error("A propriedade 'data' não é um array na resposta da API:", response);
                }
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    /* Start: Modal create */
    function storeModal() {
        if (userSelect) {
            selectUser()
        }

        if (serviceSelect) {
            selectService()
        }

        if (customerSelect) {
            selectCustomer()
        }

        if (partnerSelect) {
            selectPartner()
        }

        if (stateSelect) {
            selectState()
        }

        if (categorySelect) {
            selectCategory()
        }

        if (subCategorySelect) {
            selectSubCategory()
        }

        if (productSelect) {
            selectProduct()
        }

        if (serviceSelect) {
            selectService()
        }

        openModalCreate(inputId, "", createTitle, formId, modalId, inputDisabled, inputDisabled2);
    }

    /* Start: Modal view */
    function viewModal() {
        alertEmpty();

        var $row = $(this).closest("tr");
        var dataId = $row.data("id");

        openModalView(dataId);
    }

    function openModalView(dataId) {
        $.ajax({
            type: "GET",
            url: route + "/" + dataId,
            success: function (response) {
                var data = response.data;

                $(formId)[0].reset();

                $("input[name=inputId]").val(data.id);

                const viewModal = inputsM(data);
                $(formId).append(viewModal);

                $(formId + " input").prop('disabled', true);
                $(formId + " select").prop('disabled', true);
                $(formId + " textarea").prop('disabled', true);

                $(modalId + " .modal-title").text(viewTitle);
                $(modalId + " button[type='submit']").hide();

                $(modalId).modal("show");
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    /* Start: Modal edit */
    function editModal() {
        alertEmpty();

        var $row = $(this).closest("tr");
        var dataId = $row.data("id");

        if (userSelect) {
            selectUser()
        }

        if (customerSelect) {
            selectCustomer()
        }

        if (partnerSelect) {
            selectPartner()
        }

        if (stateSelect) {
            selectState()
        }

        if (categorySelect) {
            selectCategory()
        }

        openModalEdit(dataId);
    }

    function openModalEdit(dataId) {
        $.ajax({
            type: "GET",
            url: route + "/" + dataId,
            success: function (response) {
                var data = response.data;

                $(formId)[0].reset();
                $(formId + " input").prop('disabled', false);

                $("input[name='" + inputId + "']").val(data.id);

                const inputModal = inputsM(data);

                if (userSelect) {
                    selectUser(data.user.id);
                }

                $(formId).append(inputModal);

                $(modalId + " .modal-title").text(editTitle);
                $(modalId + " button[type='submit']").text("Atualizar");

                $(modalId).modal("show");
            }, error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    $(document).on("submit", formId, function (e) {
        e.preventDefault();

        var formData = new FormData($(this)[0]);

        var dataId = $("input[name='"+inputId+"']").val();

        var ajaxConfig = {
            type: "POST",
            url: dataId ? route + "/" + dataId : route,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                $(modalId).modal('hide');
                alert(dataId ? "alert-info" : "alert-success", response.message);
                loadTable();

                if (userSelect) {
                    selectUser();
                }

                if (stateSelect) {
                    selectState();
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    alertError(xhr.responseJSON.errors);
                } else {
                    alert("alert-danger", "Ocorreu um erro na operação!");
                }
            }
        };

        if (dataId > 0) {
            ajaxConfig.headers = {
                'X-HTTP-Method-Override': 'PUT'
            };
        }

        $.ajax(ajaxConfig);
    });

    /* Start: Delete */
    function deleteData() {
        var dataId = $(this).closest("tr").data("id");
        var token = $('meta[name="csrf-token"]').attr('content');
        var $this = $(this);

        $('#confirmationModal').modal('show');

        $('#confirmDelete').on('click', function () {
            $('#confirmationModal').modal('hide');

            $.ajax({
                type: "DELETE",
                url: route + "/" + dataId,
                headers: {
                    'X-CSRF-TOKEN': token
                },
                success: function (response) {
                    $this.closest("tr").remove();
                    alert("alert-danger", response.message);
                    loadTable();
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        alertError(xhr.responseJSON.errors);
                    } else {
                        alert("alert-danger", "Ocorreu um erro na operação!");
                    }
                }
            });
        });
    }

    $(document).ready(function () {
        loadTable();

        $(document).on("click", createbtn, storeModal);
        $(tableId).on("click", viewbtn, viewModal);
        $(tableId).on("click", editbtn, editModal);
        $(tableId).on("click", deletebtn, deleteData);
    });

    $(modalId).on("hidden.bs.modal", function () {
        removeErrorModal(modalId)
    });
}
