jQuery(document).ready(function ($) {
    $('#caseStudyFilter').on('change', function () {
        var category = $(this).val();

        $.ajax({
            url: caseStudyAjax.ajaxurl, // localized from functions.php
            type: 'POST',
            data: {
                action: 'filter_case_studies',
                category: category
            },
            beforeSend: function () {
                $('#caseStudyResults').html('<p>Loading...</p>');
            },
            success: function (response) {
                $('#caseStudyResults').html(response);
            }
        });
    });
});
