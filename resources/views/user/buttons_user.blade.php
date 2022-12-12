<form action="{{route('forceDelete',$user)}}" method="post">
    <a href="{{route('edit',$user->id)}}" class="btn btn-primary">Editar</a>
    @csrf
    @if($user->trashed())
        <a href="{{route('restore',$user->id)}}" class="btn btn-info">Habilitar</a>
    @else
        <a href="{{route('destroy',$user->id)}}" class="btn btn-warning" style="color: white">Deshabilitar</a>
@endif
@method('DELETE')
<!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
        Eliminar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="text-align: left">
                    <p>¿Estas seguro de que quieres eliminar a este usuario?<br>Se eliminarán todos sus datos para siempre</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</form>

