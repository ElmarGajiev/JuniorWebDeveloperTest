<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Product List</title>
</head>
<body>
<form action="database_deleteproduct.php" method="POST">
<div class="header">
<div class="pr_list">Product List</div>
<input type="submit" value="MASS DELETE">
<button><a href="addproduct.php">ADD</a></button>
</div>
<br><br>
<hr class="hr_line"></hr>
<div class="products">
</div>
</form>

<script>
let n=0;
let list="";
$(document).ready(function(){
    $.get("database_productlist.php",
    function(data){
        let myArr = JSON.parse(data);
        for(let i=0; i<myArr.length; i++){
            $(".products").append("<div class='product' id='product"+n+"'></div>");
            if(myArr[i][0]=="Book"){
                list=myArr[i][1]+"<br>"+myArr[i][2]+"<br>"+myArr[i][3]+"$ <br> Weight: "+myArr[i][4]+"KG";
            }
            else if(myArr[i][0]=="DVD"){
                list=myArr[i][1]+"<br>"+myArr[i][2]+"<br>"+myArr[i][3]+"$ <br> Size: "+myArr[i][4]+" MB";
            }
            else if(myArr[i][0]=="Furniture"){
                list=myArr[i][1]+"<br>"+myArr[i][2]+"<br>"+myArr[i][3]+"$ <br> Dimensions: "+myArr[i][4]+"x"+myArr[i][5]+"x"+myArr[i][6];
            }
            $("#product"+n).html(list);
            $("#product"+n).append("<input type='checkbox' class='delete-checkbox' name='check[]' value='"+myArr[i][1]+"'>");
            n++;
            list="";
        }
    });
});

</script>

</body>
</html>