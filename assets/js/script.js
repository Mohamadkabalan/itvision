$(document).ready(function() {
    $(document).on('submit','#careers_form',function(e){
    alert('hello');
        e.preventDefault();
    $('#career_submit_button').prop('disabled', true);
        $.ajax({
            url: "jobs.php",
            method: "POST",
            contentType: false,
            cache: false,
            processData:false,
            data: new FormData(this),
            dataType: "json",
            success: function (data) {
                if(data.status=='200'){
                    $('#careers_form')[0].reset();
                    alert('sent successfully');
                }
            }
        });
    });
});
