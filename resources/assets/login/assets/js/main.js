$(document).ready(function () {
    ////////////////////////////////////////////////////////////////////////////
    // Numbers of keywords
    // 01. Calendar
    // 02. Arrow down & Arrow Up
    // 03. Clicking to Upload file part
    // 04. Time Picker Start
    // 05. Box edit
    // 06. Checkbox click slide up or down about car
    // 07. Add active class to left menu & navbar for responsive
    // 08. Flag in Modal like select box
    // 09. Seperate days for selectbox
    // 10. preventDefault to Charts
    // 11. click to info img open passport img
    // 12. TIR page (click "cixish" button converts to div and added a time and clock)
    // 13. Sumo select
    // 14. Delete gorup
    ////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////
    // 01. calendar
    function c() {
        p();
        var e = h();
        var r = 0;
        var u = false;
        l.empty();
        while (!u) {
            if (s[r] == e[0].weekday) {
                u = true
            } else {
                l.append('<div class="blank"></div>');
                r++
            }
        }
        for (var c = 0; c < 42 - r; c++) {
            if (c >= e.length) {
                l.append('<div class="blank"></div>')
            } else {
                var v = e[c].day;
                var m = g(new Date(t, n - 1, v)) ? '<div class="today">' : "<div>";
                l.append(m + "" + v + "</div>")
            }
        }
        var y = o[n - 1];
        a.css("background-color", y).find("h1").text(i[n - 1]);
        f.find("div").css("color", y);
        l.find(".today").css("background-color", y);
        d()
    }

    function h() {
        var e = [];
        for (var r = 1; r < v(t, n) + 1; r++) {
            e.push({
                day: r,
                weekday: s[m(t, n, r)]
            })
        }
        return e
    }

    function p() {
        f.empty();
        for (var e = 0; e < 7; e++) {
            f.append("<div>" + s[e].substring(0, 3) + "</div>")
        }
    }

    function d() {
        var t;
        var n = $("#calendar").css("width", e + "px");
        n.find(t = "#calendar_weekdays, #calendar_content").css("width", e + "px").find("div").css({
            width: e / 7 + "px",
            height: e / 7 + "px",
            "line-height": e / 7 + "px"
        });
        n.find("#calendar_header").css({
            height: e * (1 / 7) + "px"
        }).find('i[class^="icon-chevron"]').css("line-height", e * (1 / 7) + "px")
    }

    function v(e, t) {
        return (new Date(e, t, 0)).getDate()
    }

    function m(e, t, n) {
        return (new Date(e, t - 1, n)).getDay()
    }

    function g(e) {
        return y(new Date) == y(e)
    }

    function y(e) {
        return e.getFullYear() + "/" + (e.getMonth() + 1) + "/" + e.getDate()
    }

    function b() {
        var e = new Date;
        t = e.getFullYear();
        n = e.getMonth() + 1
    }
    var e = 480;
    var t = 2013;
    var n = 9;
    var r = [];
    var i = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];
    var s = ["S", "M", "T", "W", "T", "F", "S"];
    var o = ["#16a085", "#1abc9c", "#c0392b", "#27ae60", "#FF6860", "#f39c12", "#f1c40f", "#e67e22", "#2ecc71", "#e74c3c", "#d35400", "#2c3e50"];
    var u = $("#calendar");
    var a = u.find("#calendar_header");
    var f = u.find("#calendar_weekdays");
    var l = u.find("#calendar_content");
    b();
    c();
    a.find('i[class^="icon-chevron"]').on("click", function () {
        var e = $(this);
        var r = function (e) {
            n = e == "next" ? n + 1 : n - 1;
            if (n < 1) {
                n = 12;
                t--
            } else if (n > 12) {
                n = 1;
                t++
            }
            c()
        };
        if (e.attr("class").indexOf("left") != -1) {
            r("previous")
        } else {
            r("next")
        }
    })

    ////////////////////////////////////////////////////////////////////////////
    // 02. Arrow down & Arrow Up
    var arrowDown = $("#boxes .box .arrowDown a");
    arrowDown.on("click", function (e) {
        e.preventDefault();
        $(this).parent().prev().children().last().slideToggle()
        $(this).children().toggleClass("goUpArrow")
    })
    
    $(document).mouseup(function (e) {
        if (!$("#boxes .box .arrowDown a img").is(e.target) && $("#boxes .box .arrowDown a img").has(e.target).length === 0) {
            $("#boxes .box .arrowDown a img.goUpArrow").parent().parent().prev().children().last().slideUp();
            $("#boxes .box .arrowDown a img.goUpArrow").parent().children().removeClass("goUpArrow")
        }
    });

    ////////////////////////////////////////////////////////////////////////////
    // 03. Clicking to Upload file part

    $('.logoMainPerson .nonevisible').click(function () {
        $(".logoMainPerson input[type='file']").trigger('click');
    })

    $(".logoMainPerson input[type='file']").change(function () {
        $('.logoMainPerson #val').text(this.value.replace(/C:\\fakepath\\/i, ''))
        $('.logoMainPerson #button').hide();
    });

    function readURL06(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#personalPhoto').attr('src', e.target.result);
                $('#personalPhoto').show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".logoImgFileMainPerson").change(function () {
        readURL06(this);
    });

    function readURL02(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#logoImgFirst').attr('src', e.target.result);
                $('#logoImgFirst').show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // inside Form Add image Iname to Input 01 image name
    $('.add-file-form .nonevisible').click(function () {
        $(".add-file-form input[type='file']").trigger('click');
    })
    $(".add-file-form input[type='file']").change(function () {
        $('.add-file-form .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    // inside Form Add image Iname to Input 02 Passport name

    $('.add-file-form-passport .nonevisible').click(function () {
        $(".add-file-form-passport input[type='file']").trigger('click');
    })
    $(".add-file-form-passport input[type='file']").change(function () {
        $('.add-file-form-passport .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    // inside Form Add File name to Input 03 File name

    $('.add-file-form-ship .nonevisible').click(function () {
        $(".add-file-form-ship input[type='file']").trigger('click');
    })
    $(".add-file-form-ship input[type='file']").change(function () {
        $('.add-file-form-ship .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    // inside Form Add image Iname to Input 04 Black list

    $('.add-file-form-blackList .nonevisible').click(function () {
        $(".add-file-form-blackList input[type='file']").trigger('click');
    })
    $(".add-file-form-blackList input[type='file']").change(function () {
        $('.add-file-form-blackList .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    // inside Form Add image Iname to Input 05 Black list
    $('.add-file-blackList .nonevisible').click(function () {
        $(".add-file-blackList input[type='file']").trigger('click');
    })
    $(".add-file-blackList input[type='file']").change(function () {
        $('.add-file-blackList .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    // inside Form Add passport name to Input 06 constant visitors page
    $('.add-file-form-passport-copy .nonevisible').click(function () {
        $(".add-file-form-passport-copy input[type='file']").trigger('click');
    })
    $(".add-file-form-passport-copy input[type='file']").change(function () {
        $('.add-file-form-passport-copy .textInput').text(this.value.replace(/C:\\fakepath\\/i, ''))
    });

    ////////////////////////////////////////////////////////////////////////////
    // 04. Time Picker Start
    $('#calendarForm').datetimepicker({
        format: 'd/m/Y'
    });

    $('#whenArrived').datetimepicker({
        format: 'd/m/Y',
        minDate: new Date()
    });;

    $('#probableArrivalTime').datetimepicker({
        // format: 'd/m/Y/h',
        minDate: new Date()
    });;

    ////////////////////////////////////////////////////////////////////////////
    // 05. Box edit
    $("#boxes .box .edit img").on("click", function () {
        $(this).next().slideToggle();
    })

    $(document).mouseup(function (e) {
        if (!$("#boxes .box .edit img").is(e.target) && $("#boxes .box .edit img").has(e.target).length === 0) {
            $("#boxes .box .edit .editPart").slideUp();
        }
    });

    $("#boxes .box .edit .editPart input").on("click", function () {
        $(this).parent().stop()
    })

    $(".group-guest-part .box .edit .editPart").mouseout(function () {
        $(this).addClass("mouseOut-editPart")
    })

    var lastCompact = $("#addPartClick .modal-dialog .modal-content .modal-body form .allForm .last-compact");

    ////////////////////////////////////////////////////////////////////////////
    // 06. Checkbox click slide up or down about car
    $('#addPartClick .modal-dialog .modal-content .modal-body form .allForm .checkCar .labelCheck input[type="checkbox"]').click(function () {
        if ($(this).is(":checked")) {
            lastCompact.slideDown();
        }
        else if ($(this).is(":not(:checked)")) {
            lastCompact.slideUp();
        }
    })

    ////////////////////////////////////////////////////////////////////////////
    // 07. Add active class to left menu & navbar for responsive
    var current_left_side = $("#page .page-container .row .col-lg-2 .left .parts .part a")
    var resNav = $("#navbar .container-fluid .row .col-md-12 nav .myNavbarCollapse ul.myNavbarNav li.myNavItem a.myNavLink")

    current_left_side.each(function () {
        if ($(this).attr('href') == "index.html") {
            $(this).parent().addClass('active_left_nav');
        }
    });
    resNav.each(function () {
        if ($(this).attr('href') == "index.html") {
            $(this).parent().addClass('active_nav_res');
        }
    });

    ////////////////////////////////////////////////////////////////////////////
    // 08. Flag in Modal like select box
    var flags = $("#addPartClick .modal-dialog .modal-content .modal-body form .allForm .compact .form-group.select_picker .flags ul li");
    var mainFlag = $("#addPartClick .modal-dialog .modal-content .modal-body form .allForm .compact .form-group.select_picker .flags .top img")

    flags.each(function () {
        $(this).on("click", function () {
            var imgPath = $(this).children().attr('src');
            mainFlag.attr('src', imgPath)
        })
    });

    $("#addPartClick .modal-dialog .modal-content .modal-body form .allForm .compact .form-group.select_picker .flags").on("click", function () {
        $("#addPartClick .modal-dialog .modal-content .modal-body form .allForm .compact .form-group.select_picker .flags ul").slideToggle();
    })

    ////////////////////////////////////////////////////////////////////////////
    // 09. Seperate days for selectbox
    var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];// index => month [0-11]
    var option = '<option value=""></option>';
    var selectedDay = "";
    for (var i = 1; i <= Days[0]; i++) { //add option days
        option += '<option value="' + i + '">' + i + '</option>';
    }
    $('#day').append(option);
    $('#day').val(selectedDay);
    // $('#day').find("option").eq(0).remove();

    var option = '<option value=""></option>';
    var selectedMon = "";
    for (var i = 1; i <= 12; i++) {
        option += '<option value="' + i + '">' + i + '</option>';
    }
    $('#month').append(option);
    $('#month').val(selectedMon);

    var option = '<option value=""></option>';
    var selectedMon = "";
    for (var i = 1; i <= 12; i++) {
        option += '<option value="' + i + '">' + i + '</option>';
    }
    $('#month2').append(option);
    $('#month2').val(selectedMon);

    var d = new Date();
    var option = '<option value=""></option>';
    selectedYear = "";
    for (var i = 1930; i <= d.getFullYear(); i++) {// years start i
        option += '<option value="' + i + '">' + i + '</option>';
    }
    $('#year').append(option);
    $('#year').val(selectedYear);

    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }

    function change_year(select) {
        if (isLeapYear($(select).val())) {
            Days[1] = 29;

        }
        else {
            Days[1] = 28;
        }
        if ($("#month").val() == 2) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="day">day</option>';
            for (var i = 1; i <= Days[1]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);
        }
    }

    function change_month(select) {
        var day = $('#day');
        var val = $(day).val();
        $(day).empty();
        var option = '<option value="day">day</option>';
        var month = parseInt($(select).val()) - 1;
        for (var i = 1; i <= Days[month]; i++) { //add option days
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $(day).append(option);
        if (val > Days[month]) {
            val = 1;
        }
        $(day).val(val);
    }

    ////////////////////////////////////////////////////////////////////////////
    // 10. preventDefault to Charts
    $("#allCahrts .singleChart").on("click", (e) => {
        e.preventDefault()
    })

    ////////////////////////////////////////////////////////////////////////////
    // 11. click to info img open passport img
    $(".addPartClickMain .modal-dialog .modal-content .modal-body form .allForm .compact .form-group .info-input").on("click", function () {
        $(".addPartClickMain .modal-dialog .modal-content .modal-body form .allForm .compact .form-group .passport-img").slideToggle()
    })

    $('#docType').change(function () {
        if ($(this).val() == 'personalPassport') {
            $(".addPartClickMain .modal-dialog .modal-content .modal-body form .allForm .compact .form-group .passport-img img")
                .attr("src", "../assets/img/id-pin.png")
        }
        if ($(this).val() == 'foreignPassport') {
            $(".addPartClickMain .modal-dialog .modal-content .modal-body form .allForm .compact .form-group .passport-img img")
                .attr("src", "../assets/img/foregnPassport.jpg")
        }
    });

    ////////////////////////////////////////////////////////////////////////////
    // 12. TIR page (click "cixish" button converts to div and added a time and clock)
    var truckClick = $("#boxes .box .top .right .buttons.buttons-trucks .full .tackTime");
    var trailerClick = $("#boxes .box .top .right .buttons.buttons-trucks .full .trailerTime");

    truckClick.on("click", function () {
        $(this).addClass("clicked");
        $(this).children().first().addClass("show-track-time");
        $(this).children().first().html("01.09.19");

        $(this).children().last().addClass("show-track-clock");
        $(this).children().last().html("22:05");

    })
    trailerClick.on("click", function () {
        $(this).addClass("clicked");
        $(this).children().first().addClass("show-track-time");
        $(this).children().first().html("01.09.19");

        $(this).children().last().addClass("show-track-clock");
        $(this).children().last().html("22:05");

    })

    ////////////////////////////////////////////////////////////////////////////
    // 13. Sumo select
    $('.search_test').SumoSelect({ search: true, searchText: 'Enter here.' });

    ////////////////////////////////////////////////////////////////////////////
    // 14. Delete gorup
    delete_group_button = $(".group-guest-part .top-group-head .right_button button");
    delete_group_button.on("click", function(){
        $(this).parent().parent().parent().remove();
    })
})
