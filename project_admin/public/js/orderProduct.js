$(function(){
    $(".sorting").change(function(){
        $("#formOrder").submit();
        // var collection = $(this).attr("data-collection");
        // var data = "";
        // $.ajax({
        //     data: data,
        //     method: "GET",
        //     url: ""+collection,
        //     dataType: "Json",
        //     success: function(data){
        //         data.forEach(value => { 
        //             // $(".pi-pic").html(data.)
        //             console.log(value);
        //         });
        //     },
        //     error: function(xhr, thrownError){
        //         console.log(xhr.responseText); console.log(xhr.status); console.log(thrownError);
        //     },
        // });
    });
})