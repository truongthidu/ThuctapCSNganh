// $(document).ready(function(){
    $("#addCart").click(function(){
        var id = $(this).attr("data-id");
        var qty = $("#qty").val();
        var data = {id: id, qty: qty};
        $.ajax({
            data: data,
            method: "get",
            url: "http://localhost/project_websitebanhang/project_user/user/cart/add/"+id,
            dataType: "json",
            success: function(data){
                data.forEach(element => {
                    if(element.showQtyErr == ""){
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Success',
                            width: 300,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $("#showQtyErr").removeClass("showQtyErr");
                        $("#showQtyErr").html(element.showQtyErr);
                        $(".number_shopping_cart").text(element.countCart);
                        console.log(element.cart);
                    }
                    else{
                        $("#showQtyErr").addClass("showQtyErr");
                        $("#showQtyErr").html(element.showQtyErr);
                    }
                });
            },
            error: function(xhr, thrownError){
                console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
            },
        });
    });
// })