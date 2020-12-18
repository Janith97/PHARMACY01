

$('#table2 tbody').on( 'click', '#remove', function (){
    var ID = $(this).closest('tr').find('#hiddenID').val();
    var params = {
        key: $("#hiddenID").val(),
    }
    $.ajax({
        url: BASE + '/grn/' + ID,
        type: 'DELETE' ,
        dataType: 'JSON' ,
        data: $.param(params),
        success: function (response) {

            $.notify({
                // options
                icon: 'fas fa-check-circle' ,
                message: response.message,
            },{
                // settings
                type: 'success' ,
                showProgressbar: false,
                animate: {
                    enter   : 'animated fadeInRight' ,
                    exit    : 'animated fadeOutRight'
                },
            });
        }

    });



