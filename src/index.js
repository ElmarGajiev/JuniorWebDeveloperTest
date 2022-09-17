let n = 0;
let list = "";
$(document).ready(function () {
    $.get("/database/product_list.php",
        function (data) {
            let myArr = JSON.parse(data);
            for (let i = 0; i < myArr.length; i++) {
                $(".products").append("<div class='product' id='product" + n + "'></div>");
                if (myArr[i][0] == "Book") {
                    list = myArr[i][1] + "<br>" + myArr[i][2] + "<br>" + myArr[i][3] + "$ <br> Weight: " + myArr[i][4] + "KG";
                }
                else if (myArr[i][0] == "DVD") {
                    list = myArr[i][1] + "<br>" + myArr[i][2] + "<br>" + myArr[i][3] + "$ <br> Size: " + myArr[i][4] + " MB";
                }
                else if (myArr[i][0] == "Furniture") {
                    list = myArr[i][1] + "<br>" + myArr[i][2] + "<br>" + myArr[i][3] + "$ <br> Dimensions: " + myArr[i][4] + "x" + myArr[i][5] + "x" + myArr[i][6];
                }
                $("#product" + n).html(list);
                $("#product" + n).append("<input type='checkbox' class='delete-checkbox' name='check[]' value='" + myArr[i][1] + "'>");
                n++;
                list = "";
            }
        });
});