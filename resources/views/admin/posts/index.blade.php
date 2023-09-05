@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">Yangiliklar ro'yhati</h2>
                <a href="{{route('posts.create')}}" class="btn btn-primary">Yangi yaratish</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Rasm</th>
                            <th>Sarlavha</th>
                            <th>Yaratilgan</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" style="display: block; width: 125px" alt="">
                                </td>
                                <td>
                                    <p>{{ $item->title}}</p>
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap:4px">
                                        <a href="{{route('posts.edit', $item->id)}}" class="btn btn-icon btn-success" title="Tahrirlash">
                                            <x-svg.pen></x-svg.pen>
                                        </a>

                                        <form action="{{route('posts.destroy', $item->id)}}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-icon btn-danger" onclick="return confirm('O\'chirishni xoxlaysizmi?')">
                                                <x-svg.trash></x-svg.trash>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Yangiliklar topilmadi</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @if( $items->hasPages() )
                    <div class="card-footer pb-0">
                        {{ $items->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
