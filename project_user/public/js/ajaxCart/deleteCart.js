$(document).ready(function(){
    $(".deleteCart").click(function(){
        var id = $(this).attr("id");
        var rowId = $(this).attr("rowId");
        var data = {rowId: rowId};
        var thisDelete = $(this);
        if(confirm('Do you want to delete this product ?') == true){
            $.ajax({
                data: data,
                method: "get",
                url: "cart/remove/"+rowId,
                success: function(countCart){
                    $(".number_shopping_cart").text(countCart);
                    thisDelete.closest(".cartPage").remove();
                    $("#payPrice").load(location.href + " .proceed-checkout");
                    if(countCart == 0){
                        $(".reloadCart").load(location.href + " .empty_product");
                    }
                },
                error: function(xhr, thrownError){
                    console.log(xhr.status); console.log(xhr.responseText); console.log(thrownError);
                },
            });
        }
    });
});