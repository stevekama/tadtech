$(document).ready(function(){
    $('#newCategoryBtn').click(function(e){
        e.preventDefault();
        $('#newCategoryModal').modal('show');
    });

    $('#newCategoryForm').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url:'/categories',
            type:"POST",
            data:formData,
            dataType:"json",
            beforeSend:function(){
                $('#newCategorySubmitBtn').html('Saving...');
            },
            success:function(data){
                $('#newCategorySubmitBtn').html('Save');
                console.log(data);

            }
        });
    });


;})