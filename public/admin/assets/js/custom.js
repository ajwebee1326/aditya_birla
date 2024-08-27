// create slug from a input field in jquery

$(document).ready(function(){
    $("#category_name").keyup(function(){
        var Text = $(this).val().trim();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');

        $("#slug").val(Text);
    });



    $('#subcategory_name').keyup(function(){

        var Text = $(this).val().trim();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $('#slug').val(Text);
    });

    $('#product_name').keyup(function(e) {

        var Text = $(this).val().trim();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slug").val(Text);

    });
});