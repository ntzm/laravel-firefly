<tr>
    <td class="col-xs-12 col-sm-3 user">
        {{ $post->user->name }}
    </td>

    <td class="col-xs-12 col-sm-9">
        <div class="pull-right">
            <div class="panel-options">
                <a href="{{ route('forum.posts.edit', $post->id) }}" class="btn btn-xs btn-success pull-right">Edit</a>
            </div>

            <form action="{{ route('forum.posts.destroy', $post->id) }}" method="POST" class="panel-options">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <input type="submit" value="{{ trans('firefly::forum.delete') }}" class="btn btn-xs btn-danger pull-right">
            </form>
        </div>

        {{ $post->content }}
    </td>
</tr>
