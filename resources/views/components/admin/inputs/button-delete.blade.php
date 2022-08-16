<form class="d-inline" action="{{ $href }}" method="post" onclick="return confirm('آیا مایلید حذف شود؟')">
    @method('DELETE')
    @csrf
    <button {{ $attributes->class('btn btn-danger') }}>حذف <i class="bi bi-trash"></i></button>
</form>