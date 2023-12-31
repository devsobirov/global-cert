@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">{{ucfirst($type)}} bloklari ({{$items->total()}})</h2>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Yangi yaratish</a>
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
                            <th>Title</th>
                            <th>Description</th>
                            <th>Icon</th>
                            <th>URL</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $item->order }}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->icon}}</td>
                                <td>
                                    @if($item->url)
                                        <a href="/{{$item->getUrl()}}" class="btn btn-primary" target="_blank">{{$item->url}}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap:4px">
                                        <a href="{{route('blocks.edit', $item->id)}}" class="btn btn-icon btn-success" title="Tahrirlash">
                                            <x-svg.pen></x-svg.pen>
                                        </a>

                                        <form action="{{route('blocks.destroy', $item->id)}}" method="POST">
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
                                <td colspan="6" class="text-center">{{ucfirst($type)}} bloklari topilmadi</td>
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

    @include('admin.blocks.create-modal')

@endsection
