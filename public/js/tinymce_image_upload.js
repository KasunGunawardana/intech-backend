$(document).ready(function() {
    tinymce.init({
        selector: "textarea#contentEditor",
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        height: 450,
        image_title: true,
            automatic_uploads: true,
            images_upload_url: '/image-upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            },
        // file_picker_types: "image",
        toolbar:
            "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        // override default upload handler to simulate successful upload
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/image-upload');
            var token = document.getElementsByName("_token")[0].value;
            xhr.setRequestHeader("X-CSRF-Token", token);
        
            xhr.onload = function() {
                var json;
        
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
        
                json = JSON.parse(xhr.responseText);
        
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
        
                success(json.location);
            };
        
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
        
            xhr.send(formData);
        },
        // file_picker_callback: function(cb, value, meta) {
        //     var input = document.createElement("input");
        //     input.setAttribute("type", "file");
        //     input.setAttribute("accept", "image/*");
        //     input.onchange = function() {
        //         var file = this.files[0];

        //         var reader = new FileReader();
        //         reader.readAsDataURL(file);
        //         reader.onload = function() {
        //             var id = "blobid" + new Date().getTime();
        //             var blobCache = tinymce.activeEditor.editorUpload.blobCache;
        //             var base64 = reader.result.split(",")[1];
        //             var blobInfo = blobCache.create(id, file, base64);
        //             blobCache.add(blobInfo);
        //             cb(blobInfo.blobUri(), { title: file.name });
        //         };
        //     };
        //     input.click();
        // }
    });
});
