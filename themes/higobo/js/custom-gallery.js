jQuery(document).ready(function($) {
    var mediaUploader;
    $('#faq_image_button').on('click', function(e) {
        e.preventDefault();
        if( mediaUploader ) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: "Choose an Image",
            button: {
                text: "Choose Image"
            },
            multiple: false
        });
        mediaUploader.on('select', function() {
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#faq_image').val(attachment.url);
        });
        mediaUploader.open();
    });
});