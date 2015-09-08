Dropzone.options.activityImageUploadForm = {

    dictDefaultMessage: "Trascinare qua le immagini da caricare",
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