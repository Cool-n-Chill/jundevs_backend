$(document).ready(() => {

    $('#summernote').summernote({
        toolbar: [
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']]
        ],
        callbacks: {
            onChange: function (contents) {
                if($('#summernote').summernote('isEmpty')){
                    $("#summernote").html(''); 
                }
            }
        }
    });

    $(function () {
        bsCustomFileInput.init();
    });

    $('#skill-select').select2();

});