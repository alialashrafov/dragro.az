$(document).ready(function () {
    $('.main-slider .owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        items: 1,
        autoplay: false,
        dots: true,
        navText: ['<span class="fal fa-arrow-left"></span>', '<span class="fal fa-arrow-right"></span>'],
        responsive: {
            992: {
                nav: true,
            }
        }

    });

    $('.main-slider').find('.owl-nav').wrap("<div class='position'><div class='owl-nav-content'><div class='container'></div></div></div>");


    $('.selectpicker').selectpicker();

    $('.bootstrap-select .dropdown-toggle .caret').html('<i class="fal fa-angle-down"></i>');

    $('.navbar-toggle').click(function () {
        $('.collapse-menu').addClass('toggled');
        $('body').addClass('no-scrolling');
    });

    $('.collapse-menu').click(function () {
        $(this).removeClass('toggled');
        $('body').removeClass('no-scrolling');
    });

    $(".collapse-menu .collapse-block").click(function (e) {
        e.stopPropagation();
    });

    $('.datepicker').datepicker({
        language: 'az',
        orientation: "bottom left",
        useCurrent: false,
        format: 'dd/mm/yyyy',
        autoclose: false
    });



    $('.datepicker').datepicker('setDate', new Date);

    $('.pagination li:first-child a, .pagination li:first-child.disabled ').html('<span class="prev flex-center"><i class="fal fa-arrow-left"></i>  Prev</span>');
    $('.pagination li:last-child a , .pagination li:last-child.disabled ').html(' <span class="next flex-center">Next <i class="fal fa-arrow-right"></i></span>');

    $('#phone').inputmask({"mask": "(099)999-99-99"});

    $('#upload').change(function () {
        let file = $('#upload')[0].files[0].name;
        $('.write_msg').val(file)
        $('#file_exist').val(1);
    });

    function getMessages() {
        let div = $(".msg_history");
        div.scrollTop(div.prop('scrollHeight'));
    }

    $(function () {
        getMessages();
    });


    function newArea(expense){
        data = [];
        data.push("","Material Xərci", "Texnika Xərci", "İşçi Xərci", "Digər Xərclər");
        dataq = [];
        dataq.push("", "kq", "ton", "ha", "litr", "ədəd", "dəfə");
        return '<div class="row flex-horizontal-end">' +
            '<div class="col-md-6 col-xs-12">' +
                '<div class="input-group">' +
                    '<input disabled class="form-control" value="' + expense.named + '" />' +
                '</div>' +
            '</div>'  +
            '<div class="col-md-3 col-xs-12">' +
                '<div class="input-group">' +
                    '<input type="text" class="form-control input-bg" type="number" name="quantity" value="'+expense.quantity+'">' +
                    '<span class="input-group-addon" id="basic-addon2">'+ dataq[expense.quantity_type] + '</span>' +
                '</div>'+
            '</div>' +
            '<div class="col-md-3 col-xs-12">' +
                '<div class="flex-center">' +
                    '<div class="input-group">' +
                        '<input type="text" name="price" value="'+expense.pricing  +' " class="form-control input-bg">\n' +
                        '<span class="input-group-addon" id="basic-addon2">AZN</span>' +
                    '</div>' +
                '</div>' +
            '</div>';
        /*$('select').selectpicker('refresh');
        $('.bootstrap-select .dropdown-toggle .caret').html('<i class="fal fa-angle-down"></i>');*/
    }
    $('.admin-calculate .addition .btn-add').click(function () {
        let selectList = $(this).closest('.addition').find('select').html();
        $(this).closest('.addition').append();

    })

    $('body').on('click', '.block-inn .btn-remove', function () {
        $(this).closest('.row').remove();
    })


    $('.total-calculate .btn-effect').click(function () {
        let total = 0;
        $('input[name="price"]').each(function () {
            let inputVal = $(this).val();
            inputVal = inputVal === '' || inputVal === 0 ? '0' : inputVal
            total += parseFloat(inputVal);
        });
        let guess_yield = $('#guess_yield').val();
        let guess_price = $('#guess_price').val();
        let sales_earning = guess_yield * guess_price;
        let income = $('#income').val(sales_earning);
        let one_time_subsidy = $('#crops').find('option:selected').attr('one_time_subsidy');
        let subsidy = $('#subsidy').val();
        if(subsidy)
        {
            if(one_time_subsidy != null && one_time_subsidy != 0)
            {
                subsidy = parseFloat(subsidy) + parseFloat(one_time_subsidy);
            }
        }


        $('#sales_earning').html(parseFloat(sales_earning).toFixed(2) + ' AZN');
        $('#subsidy_earning').html(parseFloat(subsidy).toFixed(2) + ' AZN');
        $('#expenses').html(parseFloat(total).toFixed(2) + ' AZN');
        $('#total_sum').html(parseFloat(sales_earning) + parseFloat(subsidy) - parseFloat(total));

    })

    $('#cropType').on('change', function () {
        let self = $(this);
        let val = self.val();
        let crops = $('#crops');

        $.get('/az/farmer/crops/getCrops/' + val, function (response) {
            let options = '';

            for (let i of response.crops) {
                options += '<option value=' + i.id + '>' + i.name + '</option>';
            }

            crops.html(options);
            $('select').selectpicker('refresh');
            //crops.append(options);
        });
    });
    // expense sehifesi
    let count = 0;
    $('#cropTypeCalc').on('change', function () {
        count++;
        if(count > 1)
        {
            count--;
            $('.form-list .flex-horizontal-end').remove();
            $('#sales_earning').val("");
            $('#subsidy_earning').text("");
            $('#expenses').text("");
            $('#total_sum').text("");
            $('#income').val("");
            $('#guess_price').val("");
            $('#guess_yield').val("");
            $('#subsidy').val("");
            let one_time_subsidy = $('#one_time_subsidy').val("");
            if(one_time_subsidy != null && one_time_subsidy != 0)
            {
                $('.one_time_subsidyy').remove();
            }
        }
        let self = $(this);
        let val = self.val();
        let crops = $('#crops');
        $.get('/az/farmer/crops/getCrops/' + val, function (response) {
            let options = '';
                for (let i of response.crops) {
                    options += '<option value="' + i.id + '" guess_yield="' + i.yield + '" guess_price="' + i.sales_price + '" subsidy="' + i.subsidy + '" one_time_subsidy = "' + i.one_time_subsidy + '" crprice="' + i.price + '">' + i.name + '</option>';
                }
            crops.html(options);
            $('select').selectpicker('refresh');
        });
    });

    $('#cropTypeCalcDragro').on('change', function () {
        let self = $(this);
        let val = self.val();
        console.log(self);
        let crops = $('#crops');
        $.get('/az/dragro/notifications/getCrops/' + val, function (response) {
            let options = '';
            for (let i of response.crops) {
                options += '<option value=' + i.id + ' guess_yield="' + i.yield + '" guess_price="' + i.sales_price + '" subsidy="' + i.subsidy + '" one_time_subsidy = "' + i.one_time_subsidy + '" crprice="' + i.price + '">' + i.name + '</option>';
            }
            crops.html(options);
            $('select').selectpicker('refresh');
        });
    });

    //yeni yaradilmis expense hissesi
    $('#crops').on('change', function () {
        count++;
        if(count > 1)
        {
            count--;
            $('.form-list .flex-horizontal-end').remove();
            $('#sales_earning').val("");
            $('#subsidy_earning').text("");
            $('#expenses').text("");
            $('#total_sum').text("");
            $('#income').val("");
            $('#subsidy').val("");
            $('#guess_price').val("");
            $('#guess_yield').val("");
            let one_time_subsidy = $('#one_time_subsidy').val("");
            if(one_time_subsidy != null && one_time_subsidy != 0)
            {
                $('.one_time_subsidyy').remove();
            }
        }
        let self = $(this);
        let val = self.val();
        let materialExpenses = $('#materialExpenses');
        let technicalExpenses = $('#technicalExpenses');
        let workerExpenses = $('#workerExpenses');
        let otherExpenses = $('#otherExpenses');
        $.get('/az/farmer/crops/getExpense/' + val, function (response) {
            for (let i of response.expenses[1]) {
                let html = newArea(i)
                materialExpenses.append(html);
            }
            for (let i of response.expenses[2]) {
                let html = newArea(i)
                technicalExpenses.append(html);
            }
            for (let i of response.expenses[3]) {
                let html = newArea(i)
                workerExpenses.append(html);
            }
            for (let i of response.expenses[4]) {
                let html = newArea(i)
                otherExpenses.append(html);
            }

            $('select').selectpicker('refresh');

        });
    });
    $('body').on('change', 'select.expense', function(){

        let self = $(this);
        let index = $('select.expense').index(self)
        let quantity = $('option:selected', self).attr('quantity');
        let price = $('option:selected', self).attr('price');
        let quantity_type = $('option:selected', self).attr('quantity_type');
        $("input[name='quantity']").eq(index).val(quantity);
        $("input[name='price']").eq(index).val(price);
    })

    // bitis
    $('.admin-plant .btn-add').click(function () {
        number++;
        let selectList = $(this).closest('.addition').find('select').html();
        let additionBlock = $('.admin-plant .add-part .row').html();
        $('.addition').append('<div class="add-part">' + '<div class="row">\n' +
            '                                                    <div class="col-md-3 col-xs-12">\n' +
            '                                                        <label>\n' +
            '                                                            <input name="named' + number + '" placeholder="Ad" class="form-control">\n' +
            '                                                        </label>\n' +
            '                                                    </div>\n' +
            '                                                    <div class="col-md-3 col-xs-12">\n' +
            '                                                        <label>\n' +
            '                                                            <select class="selectpicker form-control " name="type_expense' + number + '" aria-label="lang" >\n' + selectList +
            '                                                            </select>\n' +
            '                                                        </label>\n' +
            '                                                    </div>\n' +
            '                                                    <div class="col-md-2 col-xs-12">\n' +
            '                                                        <label>\n' +
            '                                                            <input name="quantity' + number + '" placeholder="vendor.quantity" class="form-control">\n' +
            '                                                        </label>\n' +
            '                                                    </div>\n' +
            '                                                    <div class="col-md-2 col-xs-12">\n' +
            '                                                        <label>\n' +
            '                                                            <select class="selectpicker form-control " name="quantity_type' + number + '" aria-label="lang" >\n' +
            '                                                            ' +
            '                                                                <option value="1">kg</option>\n' +
            '                                                                <option value="2">ton</option>\n' +
            '                                                                <option value="3">ha</option>\n' +
            '                                                                <option value="4">litr</option>\n' +
            '                                                                <option value="5">ədəd</option>\n' +
            '                                                                <option value="6">Dəfə</option>\n' +
            '                                                             </select>\n' +
            '                                                        </label>\n' +
            '                                                    </div>\n' +
            '                                            <div class="col-md-2 col-xs-12">\n' +
            '                                                        <label>\n' +
            '                                                            <input name="pricing' + number + '" placeholder="Qiymət" class="form-control">\n' +
            '                                                        </label>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                                <div class="btn-block">\n' +
            '                                                    <button class="btn-remove btn-transparent" type="button">\n' +
            '                                                        <i class="fal fa-minus"></i>\n' +
            '                                                    </button>\n' +
            '                                                </div>' + '</div>');
        $('.forback').val(number);

        $('select').selectpicker('refresh');
        $('.bootstrap-select .dropdown-toggle .caret').html('<i class="fal fa-angle-down"></i>');
    })

    $('body').on('click', '.addition .btn-remove', function () {
        $(this).closest('.add-part').remove();
    })

    $('#crops').on('change', function(){
        count++;
        if(count > 1)
        {
            $('.form-list .flex-horizontal-end').remove();
        }
        let self = $(this);
        let subsidy = $('#subsidy');
        let val = self.find('option:selected').attr('crprice');
        let subsidy_val = self.find('option:selected').attr('subsidy');
        let guess_yield_val = self.find('option:selected').attr('guess_yield');
        let guess_price_val = self.find('option:selected').attr('guess_price');
        let one_time_subsidy_val = self.find('option:selected').attr('one_time_subsidy');

        if(one_time_subsidy_val != null && one_time_subsidy_val != 0)
        {
            $('.one_time_subsidy').append('' +
                '<div class="col-md-5 col-xs-12 one_time_subsidyy">\n' +
                '<label>\n' +
                '<input type="number" id="one_time_subsidy" value="' + one_time_subsidy_val + '"  class="form-control input-bg">\n' +
                '</label>\n' +
                '</div>');
        }

        if(subsidy_val != null && subsidy_val != 0)
        {
            subsidy.val(subsidy_val);
        }


        let income = $('#income');
        let guess_yield = $('#guess_yield');
        let guess_price = $('#guess_price');
        guess_yield.val(guess_yield_val);
        guess_price.val(guess_price_val);
        income.val(val);

    });


});
