Dropzone.options.activityImageUploadForm = {

    dictDefaultMessage: "<a class='btn btn-primary'>Clicca oppure trascina qua le immagini da caricare</a>",
    dictInvalidFileType: "Non si possono caricare file di questo tipo",
    dictFileTooBig: "Il file è troppo grande. Massimo 2MB.",
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    acceptedFiles: '.jpg,.png,.gif,.bmp',
    init: function() {
        this.on("success", function(file) { 
            this.removeFile(file); 
            getImagesForActivityEditGallery();
        });
    }

};