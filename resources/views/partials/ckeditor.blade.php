<script src="{{ asset('vendor/ckeditor4/ckeditor.js') }}"></script>
<script src="{{ asset('vendor/ckeditor4/plugins/justify/plugin.js') }}"></script>
<script src="{{ asset('vendor/ckeditor4/plugins/exportpdf/plugin.js') }}"></script>
<script src="{{ asset('vendor/ckeditor4/plugins/uicolor/plugin.js') }}"></script>
<script src="{{ asset('vendor/ckeditor4/plugins/placeholder/plugin.js') }}"></script>
<script src="{{ asset('vendor/ckeditor4/plugins/autogrow/plugin.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

<script>
    CKEDITOR.replace('content', {
        extraPlugins: ['justify', 'editorplaceholder', 'autogrow'],
        editorplaceholder: 'Tulis sesuatu...',
        uiColor: '#FAFAF9',
        filebrowserImageBrowseUrl: '/filemanager?type=Images',
        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/filemanager?type=Files',
        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token=',

        removeButtons: 'JustifyCenter'
    });

    $('#lfm').filemanager('image');
</script>

<script>
    const thumbnail = document.getElementById('thumbnail');
    const imgPreview = document.getElementById('preview');
    const lfm = document.getElementById('lfm');
    const container = document.getElementById('container');

    thumbnail.onchange = function() {
        container.style.maxHeight = '500px';
        imgPreview.setAttribute("src", thumbnail.value);
    }
</script>