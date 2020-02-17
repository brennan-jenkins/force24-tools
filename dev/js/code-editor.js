// Hide URL bar on mobile devices
$(document).ready(function () {
    $(this).scrollTop(0);
    if ($("body").hasClass("code-editor")) {
        var delay;
        var codeEditor = document.getElementById('code-editor');
        var editor = CodeMirror.fromTextArea(codeEditor, {
            mode: 'xml',
            tabMode: 'indent',
            htmlMode: true,
            lineNumbers: true,
            lineWrapping: true,
            autoCloseTags: true,
            theme: "xq-dark"
        });
        editor.on("change", function() {
            clearTimeout(delay);
            delay = setTimeout(updatePreview, 300);
        });
        function updatePreview() {
            var previewFrame = document.getElementById('preview');
            var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
            preview.open();
            preview.write(editor.getValue());
            preview.close();
        }
        setTimeout(updatePreview, 300);
        $('.code-fill-screen').click(function(){
            console.log('test');
            $('.code-editor-container').css({
                'background-color': '#ffffff',
                'position': 'fixed',
                'z-index': '99',
                'top': '0',
                'left': '0',
                'bottom': '0',
                'right': '0',
                'padding': '5vh 0'
            })
        });
    }
});