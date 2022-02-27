$(document).ready(function() {
    $(document).on('submit','#careers_form',function(e){
    e.preventDefault();
        $.ajax({
            url: "jobs.php",
            method: "POST",
            contentType: false,
            cache: false,
            processData:false,
            data:$('#careers_form').serialize(),
            success: function (data) {
                console.log(data);
            }
        });
    });
});
