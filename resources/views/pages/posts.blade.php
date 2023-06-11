@foreach ($posts as $post)
<div class="row caja" id="post-{{ $post->id }}">
    <!-- ? Comentario 1 -->
    <div class="espacio"></div>
    <!-- Avatar -->
    <div class="post-contenedor">
        <div class="col-2 me-2">
            <picture>
                <img src="{{ asset('storage/'.$post->user->avatar) }}"
                alt="{{ $post->user->name . ' Avatar' }}"class="foro-avatar">
            </picture>
        </div>
        <div class="col post-box">
            <div>
                <p class="post post-info">
                    <strong>{{ '@' . $post->user->name }}</strong>, <span>{{ $post->tiempo() }}</span>
                </p>
            </div>
            <!-- Contenido del post -->
            <div>
                <p class="post">
                    {{ $post->contenido }}
                </p>
            </div>
        <!-- Iconos de interacción -->
            <div class="caja-icons justify-content-around">
                <!-- Compartir y comentar -->
                {{-- <div>
                    <i class="fa-solid fa-share-nodes"></i>
                </div> --}}
                <!-- Likes -->
                <div>
                    <form onsubmit="valorarPost(event)"
                    data-post-id="{{ $post->id }}">
                    @csrf
                        <button type="submit" class="vacio">
                            @if ($post->fans()->where('user_id',
                                auth()->user()->id)->exists())
                            <i class="fa-solid fa-heart"></i>
                            @else
                            <i class="fa-regular fa-heart"></i>
                            @endif
                            {{ $post->fans()->count() }}
                        </button>
                    </form>
                </div>
                {{-- Eliminar --}}
                @if (($post->user_id == auth()->user()->id) || auth()->user()->admin)
                <form onsubmit="confirmarBorrado(event)"
                    id="confirmarBorradoForm"
                    data-post-id="{{ $post->id }}">
                    @csrf
                    <button type="submit" class="vacio">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    {{-- <button type="submit" class="btn btn-danger">
                        &times;
                    </button> --}}
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="espacio"></div>
@endforeach
