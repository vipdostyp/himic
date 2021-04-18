$(document).ready(function () {
    $('#summernote').summernote({
        lang:'ru-RU',
        fontNames:['Roboto', 'Arial','Times New Roman','Helvetica'],
        toolbar:[
            //[groupname,[list buttons]]
            ['insert',['picture','link','video','table']],
            ['style',['bold','italic','underline']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize','fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph','style']],
            ['height', ['height','codeview']],

        ],
    });
})