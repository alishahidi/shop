<script type="text/javascript">
    ClassicEditor.create(document.querySelector('{{ $name }}'), {
        ckfinder: {
            uploadUrl: "{{ route('admin.ckeditor.upload', ['_token' => csrf_token() ]) }}",
        }
    }).then(editor => {
        window.editor = editor;
    });
</script>