<?php
// echo "Akash"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Test</title>
</head>

<body>
    <h3>Enter Product Details</h3>
   <table>
    <tr>
        <td>Product Name</td>
        <td><input placeholder="Enter product name" id="pname"/></td>
    </tr>
    <tr>
        <td>Product Category</td>
        <td><input placeholder="Enter product Category" id="p_cat"/></td>
    </tr>
    <tr>
        <td>Product Sub category</td>
        <td><input placeholder="Enter product sub category" id="p_sub_cat"/></td>
    </tr>
    <tr>
        <td>Product Color</td>
        <td><input placeholder="Enter product color" id="p_color"/></td>
    </tr>
    <tr>
        <td>Product Price</td>
        <td><input placeholder="Enter product price" id="p_price"/></td>
    </tr>
   </table>
   <button id="addbtn">Add</button>
   <input placeholder="search here...."/>
    <table id="producttable"></table>
    <script>
        $(document).ready(function() {
            show();

            function show() {
                $.ajax({
                    url: "server.php",
                    data: {
                        all: true
                    },
                    type: "POST",
                    success: function(result) {
                        let pro = JSON.parse(result);
                        let txt = ' <tr><th >Product Id</th><th >Product Name</th><th >Product Category</th>'+
            '<th >Product Sub Category</th><th >Product Color</th><th>Product Price</th><tr>';

                        pro.forEach(i => {
                            txt += "<tr><td>"+i["product_id"]+"</td><td>"+i["product_name"]+"</td><td>"+i["product_category"]+"</td><td>"+i["product_sub_category"]+"</td><td>"+i["product_color"]+"</td><td>"+i["product_price"]+"</td></tr>"
                        })
                        $("#producttable").html(txt)
                    }

                })
            }
            $("#addbtn").click(function(){
                let p_name = $("#pname").val();
                let p_cat = $("#p_cat").val();
                let p_sub_cat = $("#p_sub_cat").val();
                let p_color = $("#p_color").val();
                let p_price = $("#p_price").val();
                // console.log(p_name,p_cat,p_sub_cat,p_color,p_price)
                $.ajax({
                    url:"server.php",
                    type:"POST",
                    data:{
                        p_name:p_name,
                        p_cat:p_cat,
                        p_sub_cat:p_sub_cat,
                        p_color: p_color,
                        p_price:p_price
                    },
                    success:function(result){
                        show();
                    }
                })
            });
        
        });
    </script>
</body>

</html>