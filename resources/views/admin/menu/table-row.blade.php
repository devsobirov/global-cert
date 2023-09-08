<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->order }}</td>
    <td>{{ $item->title }}</td>
    <td>{{ $item->parent?->title ?? '-' }}</td>
    <td>{{ $item->url ?? '-' }}</td>
    <td>{{ $item->created_at }}</td>
    <td>
        <div class="d-flex align-items-center" style="gap:4px">
            <a href="{{route('menu.edit', $item->id)}}" class="btn btn-icon btn-success" title="Tahrirlash">
                <x-svg.pen></x-svg.pen>
            </a>

            <form action="{{route('menu.destroy', $item->id)}}" method="POST">
                @csrf @method('DELETE')
                <button class="btn btn-icon btn-danger" onclick="return confirm('O\'chirishni xoxlaysizmi?')">
                    <x-svg.trash></x-svg.trash>
                </button>
            </form>
        </div>
    </td>
</tr>
