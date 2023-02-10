<form action="{{$action}}" method="POST" class="inline">
    @method('DELETE')
    @csrf
    <input type="submit" value="Supprimer" class="btn-delete cursor-pointer">
</form>
