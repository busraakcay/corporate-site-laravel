$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$(function () {
    const ajaxOptions = {
        type: "GET",
        dataType: "json",
        url: $("#ajax_status_url").val(),
    };
    const toggleInputElement = $(".js-toggle-class-status");

    toggleInputElement.on("change", function () {
        const element = $(this);
        const status = element.prop("checked") ? 1 : 0;
        const id = element.data("id");
        $.ajax({
            ...ajaxOptions,
            data: { id, status },
            success: (data) => {
                $(element).prop("checked", status);
            },
        });
    });
});

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$(function () {
    const ajaxOptions = {
        type: "GET",
        dataType: "json",
        url: $("#ajax_mode_url").val(),
    };
    const toggleInputElement = $(".js-toggle-class-mode");

    toggleInputElement.on("change", function () {
        const element = $(this);
        const mode = element.prop("checked") ? 1 : 0;
        const id = element.data("id");
        $.ajax({
            ...ajaxOptions,
            data: { id, mode },
            success: (data) => {
                $(element).prop("checked", mode);
            },
        });
    });
});


$(function () {
    $("#place").on(
        "focusout",
        "[name=place]",
        function (e) {
            var id = $(this).data("id");
            var place = $(this).val();
            $.ajax({
                method: "GET",
                url: $("#ajax_place_url").val(),
                data: {
                    id: id,
                    place: place,
                    _token: "{{ csrf_token() }}",
                },
                success: function (data) {
                    $(".place_loader").remove();
                },
            });
        }
    );
});
