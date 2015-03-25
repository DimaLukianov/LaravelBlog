$(document).ready(function() {
    $('#keyword').on('input', function() {
        var searchKeyword = $(this).val();
        if (searchKeyword.length >= 1) {
            $.post('/search.php', { keywords: searchKeyword }, function(data) {
                $('ul#content').empty()
                $.each(data, function() {
                    $('ul#content').append('<li><a href="/posts/' + this.id + '">' + this.title + '</a></li>');
                });
            }, "json");
        }
        else{
            $('ul#content').empty()
        }
    });
});