$(function () {
    $(".sortline").change(function (event) {
        event.preventDefault();
        var form = $(this).closest('form')[0];
        var formData = new FormData(form);
        $.ajax({
            url: form.action,
            type: form.method,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                $('.update_ajax_sortline').load(location.href + ' .update_ajax_sortline');
            },
            error: function () {
                console_log("Произошла ошибка при отправке запроса.");
            }
        });
    });
});
