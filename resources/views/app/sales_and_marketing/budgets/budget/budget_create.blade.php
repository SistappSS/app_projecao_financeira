<x-app-layout>
    @section('content')
        <form class="table-responsive p-0" method="post" id="budget_form">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card p-0">
                        <span id="result"></span>
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Novo orçamento</h5>
                                <div class="d-flex text-end">
                                    <a href="{{route('orcamento-web.index')}}"
                                       class="btn btn-sm bg-gradient-primary">Voltar</a>
                                </div>
                            </div>
                            <div class="row">
                                <x-select col="4" set="" id="customer_id" name="customer_id" label="Selecionar cliente">
                                </x-select>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table align-items-center mb-0" id="budget_table">
                                <thead>
                                <tr>
                                    <th>Item do Plano</th>
                                    <th>Método de Pagamento</th>
                                    <th>Preço</th>
                                    <th>Desconto (%)</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody id="budget_tbody"></tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4" align="right">&nbsp;</td>
                                    <td class="text-center">
                                        <button type="submit" name="save" id="save" class="btn bg-gradient-success"><i
                                                class='fa-solid fa-floppy-disk'></i></button>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-4">
                    <div class="card h-100 p-0">
                        <div class="card-body">
                            <div class="row">
                                <x-input col="12" set="" id="payment_date" name="payment_date" label="Pagamento em"
                                         type="date"></x-input>
                                <x-input col="12 my-3" set="" id="deadline" name="deadline" label="Prazo de entrega"
                                         type="number" min="0"></x-input>
                                <x-input col="12" set="" id="signal" name="signal" label="Sinal (%)" type="number"
                                         min="0"
                                         max="100"></x-input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card h-100 p-0">
                        <div class="card-body">
                            <div class="row">
                                <x-input col="12" set="" id="avista" name="avista" label="À vista" type="text"
                                         read="1"></x-input>
                                <x-input col="12 my-3" set="" id="subtotal_price" name="subtotal_price" label="Subtotal"
                                         type="text" read="1"></x-input>
                                <x-input col="12" set="" id="signal_price" name="signal_price"
                                         label="Valor do sinal (%)"
                                         type="text" read="1"></x-input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card h-100 p-0">
                        <div class="card-body">
                            <div id="installment_fields"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card h-100 p-0">
                        <div class="card-body">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0" id="payment_schedule">
                                    <thead>
                                    <tr>
                                        <th>Próximos pagamentos</th>
                                        <th>Valor</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endsection
</x-app-layout>

<script>
    $(document).ready(function () {
        var count = 1;
        var planItems = [];

        function fetchClients() {
            $.ajax({
                type: "GET",
                url: "/api/cliente",
                success: function (response) {
                    var select = $("#customer_id");

                    select.empty();

                    if (Array.isArray(response.data)) {
                        response.data.forEach(function (data) {
                            var option = $('<option></option>').attr('value', data.id).text(data.name);
                            select.append(option);
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

        fetchClients();

        function fetchPlanItems() {
            $.ajax({
                url: '/api/servico',
                method: 'GET',
                dataType: 'json',
                success: function (response) {
                    if (Array.isArray(response.data)) {
                        planItems = response.data;
                    } else {
                        console.error('API response data is not an array');
                    }
                    dynamic_field(count);
                },
                error: function () {
                    console.error('Error fetching plan items');
                }
            });
        }

        fetchPlanItems();

        function dynamic_field(number) {
            let options = planItems.map(item => `<option value="${item.id}" data-price="${item.price}">${item.name}</option>`).join('');
            let html = '<tr class="text-center">';
            html += `<td><select name="plan_item_id[]" class="form-control form-control-sm plan_item">
                        <option selected disabled>Selecionar item de plano</option>
                        ${options}
                     </select>
                 </td>`;
            html += `<td>
                    <select name="payment_method[]" class="form-control form-control-sm payment_method">
                        <option selected disabled>Forma de pagamento</option>
                        <option value="1">À vista</option>
                        <option value="2">2 vezes</option>
                        <option value="3">3 vezes</option>
                        <option value="4">4 vezes</option>
                        <option value="5">5 vezes</option>
                        <option value="6">6 vezes</option>
                    </select>
                </td>`;
            html += `<td><input type="number" name="price[]" class="form-control form-control-sm price" readonly /></td>`;
            html += `<td><input type="number" name="discount_price[]" class="form-control form-control-sm discount_price" min="0" max="100" /></td>`;
            if (number > 1) {
                html += '<td><button type="button" name="remove" class="btn bg-gradient-warning remove"><i class="fa-solid fa-xmark"></i></button></td></tr>';
                $('#budget_tbody').append(html);
            } else {
                html += '<td><button type="button" name="add" id="add" class="btn bg-gradient-info"><i class="fa-solid fa-plus-minus"></i></button></td></tr>';
                $('#budget_tbody').html(html);
            }
        }

        $(document).on('click', '#add', function () {
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '.remove', function () {
            count--;
            $(this).closest("tr").remove();
            calculateSubtotal();
            updateInstallments();
        });

        $(document).on('change', '.plan_item, .payment_method, .discount_price', function () {
            let row = $(this).closest('tr');
            let price = parseFloat(row.find('.plan_item option:selected').data('price')) || 0;
            row.find('.price').val(price.toFixed(2));
            calculateSubtotal();
            updateInstallments();
        });

        function calculateSubtotal() {
            let subtotal = 0;
            let avistaTotal = 0;
            let installmentTotal = 0;

            $('tbody tr').each(function () {
                let price = parseFloat($(this).find('.plan_item option:selected').data('price')) || 0;
                let discount = parseFloat($(this).find('.discount_price').val()) || 0;
                let paymentMethod = parseInt($(this).find('.payment_method').val());

                let discountedPrice = price - (price * (discount / 100));

                if (paymentMethod === 1) {
                    avistaTotal += discountedPrice;
                } else if (paymentMethod > 1) {
                    installmentTotal += discountedPrice / paymentMethod;
                }
            });

            subtotal = avistaTotal + installmentTotal;

            let signalPercentage = parseFloat($('#signal').val()) || 0;
            let signalPrice = (subtotal * (signalPercentage / 100)).toFixed(2);

            $('#avista').val(avistaTotal.toFixed(2));
            $('#subtotal_price').val(subtotal.toFixed(2));
            $('#signal_price').val(signalPrice);
        }

        function updateInstallments() {
            let installmentIndex = 1;

            $('#installment_fields').empty();

            $('tbody tr').each(function () {
                let price = parseFloat($(this).find('.plan_item option:selected').data('price')) || 0;
                let discount = parseFloat($(this).find('.discount_price').val()) || 0;
                let paymentMethod = parseInt($(this).find('.payment_method').val());

                if (paymentMethod && paymentMethod > 1) {
                    let discountedPrice = price - (price * (discount / 100));
                    let installmentValue = (discountedPrice / paymentMethod).toFixed(2);

                    $('#installment_fields').append(`
                        <div class="row mb-3">
                            <x-input col="6" set="" id="installment_price_${installmentIndex}" name="installments_price[]" label="Parcelado em ${paymentMethod}x" type="text" value="R$ ${discountedPrice.toFixed(2)}" read="1"></x-input>
                            <x-input col="6" set="" id="installment_value_${installmentIndex}" name="installments_value[]" label="Parcelas" type="text" value="${paymentMethod}x - R$ ${installmentValue}" read="1"></x-input>
                        </div>
                    `);
                    installmentIndex++;
                }
            });
        }

        function calculateSignalPrice() {
            let subtotal = parseFloat($('#subtotal_price').val()) || 0;
            let signalPercentage = parseFloat($('#signal').val()) || 0;
            let signalPrice = (subtotal * signalPercentage) / 100;

            $('#signal_price').val(signalPrice.toFixed(2));
        }

        function calculatePaymentSchedule() {
            let paymentDate = $('#payment_date').val();
            let deadline = parseInt($('#deadline').val()) || 0;
            let signalPercentage = parseFloat($('#signal').val()) || 0;

            $('#payment_schedule tbody').empty();

            let subtotal = parseFloat($('#subtotal_price').val()) || 0;
            let signalPrice = (subtotal * (signalPercentage / 100)).toFixed(2);

            let remainingAmount = (subtotal - signalPrice).toFixed(2);

            let firstPaymentDate = new Date(paymentDate);
            firstPaymentDate.setDate(firstPaymentDate.getDate() + deadline);

            $('#payment_schedule tbody').append(`
                <tr>
                    <td>${formatDate(firstPaymentDate)}</td>
                    <td>R$ ${remainingAmount}</td>
                </tr>
            `);

            let installmentGroups = {};

            $('tbody tr').each(function () {
                let price = parseFloat($(this).find('.plan_item option:selected').data('price')) || 0;
                let discount = parseFloat($(this).find('.discount_price').val()) || 0;
                let paymentMethod = parseInt($(this).find('.payment_method').val());

                if (paymentMethod && paymentMethod > 1) {
                    let discountedPrice = price - (price * (discount / 100));
                    let installmentValue = (discountedPrice / paymentMethod).toFixed(2);

                    for (let i = 0; i < paymentMethod - 1; i++) {
                        let installmentDate = new Date(paymentDate);
                        installmentDate.setMonth(installmentDate.getMonth() + i + 1);

                        if (!installmentGroups[formatDate(installmentDate)]) {
                            installmentGroups[formatDate(installmentDate)] = parseFloat(installmentValue);
                        } else {
                            installmentGroups[formatDate(installmentDate)] += parseFloat(installmentValue);
                        }
                    }
                }
            });

            Object.keys(installmentGroups).forEach(date => {
                $('#payment_schedule tbody').append(`
            <tr>
                <td>${date}</td>
                <td>R$ ${installmentGroups[date]}</td>
            </tr>
        `);
            });
        }

        function formatDate(date) {
            let day = date.getDate();
            let month = date.getMonth() + 1;
            let year = date.getFullYear();
            return `${day < 10 ? '0' + day : day}/${month < 10 ? '0' + month : month}/${year}`;
        }

        $(document).on('change', '#signal', function () {
            calculateSignalPrice();
            calculatePaymentSchedule();
        });

        $(document).on('change', '#deadline, #subtotal_price', function () {
            calculatePaymentSchedule();
        });

        $('#budget_form').on('submit', function (event) {
            event.preventDefault();

            $.ajax({
                url: '/api/orcamento',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $('#save').attr('disabled', 'disabled');
                },
                success: function (data) {
                    $('#save').attr('disabled', false);
                    $('#result').html('');
                    if (data.error) {
                        var error_html = '';
                        for (var count = 0; count < data.error.length; count++) {
                            error_html += '<p>' + data.error[count] + '</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                    } else {
                        dynamic_field(1);

                        window.location = '/orcamento';
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#save').attr('disabled', false);
                    $('#result').html('<div class="alert alert-danger">Erro ao enviar os dados. Por favor, tente novamente.</div>');
                }
            });
        });
    });

</script>
