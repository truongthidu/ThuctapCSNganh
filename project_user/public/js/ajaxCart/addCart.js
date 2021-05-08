// $(document).ready(function(){
    $("#addCart").click(function(){
        var id = $(this).attr("data-id");
        var data = {id: id};
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Success !!!',
            width: 300,
            showConfirmButton: false,
            timer: 1500
        });
        $.ajax({
            data: data,
            method: "get",
            url: "http://localhost/project_websitebanhang/project_user/user/cart/add/"+id,
            dataType: "json",
            success: function(data){
                data.forEach(element => {
                    $(".number_shopping_cart").text(element.countCart);
                    $(".alert-add-cart").html(element.alertAddCart);
                    // $("body").click(function(){
                    //     $("div.alert-add-cart").addClass("display-none");
                    // });
                    // if($(".alert-add-cart").hasClass("display-none")) {
                    //     $(".alert-add-cart").removeClass("display-none");
                    // }
                });
            },
            error: function(xhr, thrownError){
                console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
            },
        });
    });
// })