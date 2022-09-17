$(document).ready(function () {
    $("select").change(function () {
        let value = $("select option:selected").val();
        $("#" + value).siblings().children("input").attr("required", false);
        $("#" + value).siblings().children("input").val("");
        $("#" + value).siblings().hide();
        $("#" + value).show();
        $("#" + value + " input").attr("required", true);
    });
});

$(document).ready(function () {
    $("input[type='button']").click(function () {
        window.location.assign("/index");
    });
});

$(document).ready(function () {
    $("input[id='sku']").keyup(function () {
        let value = $("#sku").val();
        $.post("/database/check_sku.php", {
            sku: value
        },
            function (data) {
                if (data == "invalid") {
                    $("#check_sku").text("SKU must be unique!");
                    $("input[type='submit']").attr("disabled", true);
                }
                else if (data == "valid") {
                    $("#check_sku").text("");
                    $("input[type='submit']").attr("disabled", false);
                }
            });
    });
});