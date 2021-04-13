$(document).ready(function(){
    $(".updateCart").change(function(){
        var id = $(this).attr("id");
        var rowId = $(this).attr("name");
        var qty = $(this).val();
        var data = {id: id, rowId: rowId, qty: qty};
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
                    $(".number_shopping_cart").text(element.countCart);
                    $(".total-price_"+id).text("$"+element.price_total);
                    $(".cart-tax span").text("$"+element.tax);
                    $(".cart-total span").text("$"+element.total);
                    $(".subtotal span").text("$"+element.subTotal);
                });
            },
            error: function(xhr, thrownError){
                console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
            },
        });
    });
});