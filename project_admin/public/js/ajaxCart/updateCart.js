$(document).ready(function(){
    $(".updateCart").change(function(){
        var id = $(this).attr("id");
        var rowId = $(this).attr("name");
        var max = $(".updateCart").attr("max");
        var qty = $(this).val();
        var data = {id: id, rowId: rowId, qty: qty, max: max};
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });
        $.ajax({
            data: data,
            method: "POST",
            url: "cart/update",
            dataType: "Json",
            success: function(data){
                data.forEach(element => {
                    // if(element.qtyMax > element.qty || element.qtyMax == element.qty){
                    //     alert("Currently this product has max: "+element.qtyMax+" product");
                    // }
                    $(".number_shopping_cart").text(element.countCart);
                    $(".total-price_"+id).text("$"+element.price_total);
                    $(".cart-tax span").text("$"+element.tax);
                    $(".cart-total span").text("$"+element.total);
                    $(".subtotal span").text("$"+element.subTotal)
                    console.log(element);
                });
            },
            error: function(xhr, thrownError){
                console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
            },
        });
    });
});