$('.add-post').on('click', function (e) {
    e.preventDefault();
    var title = $.trim($('.title').text());
    var body = $.trim($('.body').text());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/posts/add/ajax',
        type: 'POST',
        data: {
            title: title,
            body: body
        },
        success: function (data) {
            //
        }
    });
});