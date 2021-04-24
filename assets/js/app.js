$(document).ready(function () {
    const BASE_URL = 'http://localhost/leads-search-and-pagination/';

    //fetch clients
    $.get(BASE_URL + 'leads/index_html', function (data) {
        $('table').html(data);
    });

    //search form
    $(document).on('submit', '#search', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (data) {
            $('table').html(data);
        });
        return false;
    });

    //trigger search form to when name input field detects key up
    $(document).on('keyup', '#inputName', function () {
        $('#search').submit();
    });

    //date form
    $(document).on('submit', '#date_range', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (data) {
            $('table').html(data);
        });
        return false;
    });

    //date
    $(document).on('change', '.date', function () {
        $('#date_range').submit();
    });
});
