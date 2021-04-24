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

    //trigger search form to submit when name input field detects key up
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

    //trigger date form to submit when date input field detects any changes
    $(document).on('change', '.date', function () {
        $('#date_range').submit();
    });

    //this is responsible for displaying available number of pages and no need to submit
    $(document).on('submit', '#pagination_pages', function () {
        return false;
    });

    //pages form
    $(document).on('submit', '#page', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (data) {
            $('table').html(data);
        });
        return false;
    });

    //update the value of hidden input containing the current page number
    $(document).on('click', '.page_number', function () {
        $('#page_number').val($(this).val());
        $('#page').submit();
    });
});
