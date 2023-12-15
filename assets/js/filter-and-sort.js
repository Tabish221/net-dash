
// FILTER WORKING START
/// In dropdown input search
$(document).on('keyup', '[data-searchlistinput]', function () {
    var input, filter, ul, li, a, i, txtValue, target;

    input = $(this);
    filter = $(this).val().toUpperCase();
    target = $(this).data('searchlistinput');
    ul = $(`.${target}`);
    li = ul.find('li');

    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
});

// Filter Box Show & Hide
$(".main-filter").click(function () {
    let btnList = $(".addMoreFillerTab ul").find("li");

    if (btnList.length > 0) {
        $(".tableMoreOption__filter .dropdown-menu").addClass("forHide");
        if ($(".tablecard-filter").is(":visible")) {
            $(".tablecard-filter").hide();
        } else {
            $(".tablecard-filter").show();
        }

    } else {
        $(".tableMoreOption__filter .dropdown-menu").removeClass("forHide");
        $(".tablecard-filter").hide();
    }
});

// MAKE FILTER LIST
$(document).on('click', ".filterData__copy.top li a", function () {
    $(this).parent().find(".dropdownClone").children().removeClass("show");
    var el = `
        <li>
            <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="filterbutton">
                <em style="display: flex;align-items: center;">${$(this).html()}</em>
                <span class="material-symbols-outlined">
                    expand_more
                </span>
            </div>
            <div class="redropdownClone">
                ${$(this).parent().find(".dropdownClone").html()}
            </div>
        </li>
    `;

    $('.addMoreFillerTab ul').append(el);
    date_picker_caller();
    $(el).find(".dropdown-menu").addClass('show');

    let btnList2 = $(".addMoreFillerTab ul").find("li");

    if (btnList2.length > 0) {
        $(".tablecard-filter").show();
    }

    var taget = $(this).find('span').html();

    var z = $.trim(taget);

    $(".filterData__copy.bottom li a").each(function (i, data) {
        var x = $(this).find('span').html();
        var o = $.trim(x);

        if (x == taget) {
            $(this).parent().remove();
            console.log("data");
        }
    });
});

$(document).on('click', ".filterData__copy.bottom li a", function () {
    $(this).parent().find(".dropdownClone").children().removeClass("show");
    var el = `
        <li>
            <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="filterbutton">
                <em style="display: flex;align-items: center;">${$(this).html()}</em>
                <span class="material-symbols-outlined">
                    expand_more
                </span>
            </div>
            <div class="redropdownClone">
                ${$(this).parent().find(".dropdownClone").html()}
            </div>
        </li>
    `;

    $('.addMoreFillerTab ul').append(el);
    date_picker_caller();
    $(el).find(".dropdown-menu").addClass('show');

    if ($(this).parent().parent().find('li').length <= 1) {
        $(".addbtnDropPanel").hide();
    }

    $(this).parent().remove();
});

// FILTER DELETED FUNCTION
$(document).on('click', '.findFilterClosed', function () {
    $('.filterData__copy.bottom').append(`
        <li>
            <a href="#">
            ${$(this).closest("li").find(".filterbutton").find("em").html()}
            </a>
            <div class="dropdownClone">
            ${$(this).closest("li").find(".redropdownClone").html()}
            </div>
        </li>
    `);

    $(this).closest("li").remove();

    if ($('.filterData__copy').find('li').length >= 1) {
        $(".addbtnDropPanel").show();
    }
});



// SORT WORKING START
$('.sortData__copy.bottom [data-sortindex]').click(function () {
    var x = [];

    $(".sortData__copy.bottom").children(`li:visible`).each(function (index, data) {
        x[index] = data;
    });

    console.log(x.length);

    if (x.length == 1) {
        $('.sort-modal-btn-group .addbutton').hide()
    } else {
        $('.sort-modal-btn-group .addbutton').show()
    }
});

$('[data-sortindex]').click(function () {
    var taget = $(this).data('sortindex');

    $('.modal-cont').find(`[data-accdcsort="${taget}"]`).show();

    $(".tablecard-filter").show();
    $(".main-sortbutton").show();


    $('.sortData__copy.bottom').find(`[data-sortindex="${taget}"]`).hide();

    var liArray = [];
    $(".modal-cont").children("li:visible").each(function (index, data) {
        liArray[index] = data;
    });

    if (liArray.length >= 2) {
        $(".main-sortbutton .sortbutton").text("");
        $(".main-sortbutton .sortbutton").append(
            `
                <span class="material-symbols-outlined">
                    swap_vert
                </span>
                ${liArray.length} sorts
                <span class="material-symbols-outlined">
                    expand_more
                </span>
            `
        );
    } else {
        $(".main-sortbutton .sortbutton").text("");
        $(".sortbutton").append(
            `
                ${$(this).find('a').html()}
                <span class="material-symbols-outlined">expand_more</span>
            `
        );
    }
});

$(".sortbutton").click(function () {
    $(".sort-dropdown").toggleClass("open");
    $(".sort-dropdownoverlay").toggleClass("show");
});

$(".tableMoreOption__sort").click(function(){
    let tableCard = $('.tablecard-filter').is(":visible");
    let mainBtn = $(".main-sortbutton").css("display");
    if( mainBtn != "none" && !tableCard ){
       $('.tablecard-filter').show()
    }
    
    let btnList = $(".sortbutton span");
    if (btnList.length >= 1) {
        $(".sort-dropdown").toggleClass("open");
        $(".sort-dropdownoverlay").toggleClass("show");
        $(".sort-filter-btn .dropdown-menu").addClass('showhide');
    } else {
        $(".sort-filter-btn .dropdown-menu").removeClass("showhide");
    }
 });

$(document).on("click", '[data-sortaction]', function () {
    let text1 = $(this).text();
    $(this).closest('.main-ascenButton').find('.ascenButton').html("");
    $(this).closest('.main-ascenButton').find('.ascenButton').append(
        `
            ${text1}
            <span class="material-symbols-outlined">
            expand_more
            </span>
        `
    );
})

$(".sort-dropdown .sortBtn-modal .deletebutton").click(function () {
    $(".modal-cont>li").hide();
    $(".main-sortbutton .sort-dropdown").removeClass("open");
    $(".main-sortbutton .sortbutton").html("");
    $(".main-sortbutton").css("display", "none");
    $('.sort-modal-btn-group .addbutton').show();
    $('.bottom.sortData__copy').find('li').show();
    $(".tablecard-filter").hide();
    $(".sort-dropdownoverlay").removeClass("show");
});

$(document).on("click", ".modal-cont li .crossButton", function () {
    $(this).closest("li").hide();

    var taget = $(this).closest("li").data("accdcsort");

    $('.sortData__copy.bottom').find(`[data-sortindex="${taget}"]`).show();

    var liArray2 = [];
    var innerHtml;
    $(".modal-cont").children("li:visible").each(function (index, data) {
        liArray2[index] = data;
        innerHtml = $(data).find(".taskButton").html();
    });

    if (liArray2.length == 1) {
        $(".main-sortbutton .sortbutton").text("");
        $(".main-sortbutton .sortbutton").append(
            `
                ${innerHtml}
                <span class="material-symbols-outlined">expand_more</span>
            `
        );
    } else {
        $(".main-sortbutton .sortbutton").text("");
        $(".main-sortbutton .sortbutton").append(
            `
                <span class="material-symbols-outlined">
                    swap_vert
                </span>
                ${liArray2.length} sorts
                <span class="material-symbols-outlined">
                    expand_more
                </span>
            `
        );
    }

    var x = [];

    $(".sortData__copy.bottom").children(`li:visible`).each(function (index, data) {
        x[index] = data;
    });

    console.log(x.length);

    if (x.length == 1) {
        $('.sort-modal-btn-group .addbutton').hide()
    } else {
        $('.sort-modal-btn-group .addbutton').show()
    }
});


$('.sort-dropdownoverlay, .main-filterBt').click(function(){
    $('.sort-dropdown').removeClass('open');
    $(this).removeClass('show');
    
 });
