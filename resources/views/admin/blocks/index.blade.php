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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yangi {{ucfirst($type)}} blok yaratish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('blocks.store')}}">
                        @csrf
                        <input type="hidden" name="type" value="{{$type}}">
                        <div class="form-group mb-2">
                            <label for="recipient-name" class="form-label">Title - {{config('app.defaultLocaleNative')}}</label>
                            <input type="text" class="form-control" name="title" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="form-label">Description - {{config('app.defaultLocaleNative')}}</label>
                            <textarea name="description" class="form-control" id="recipient-email" rows="2" required></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" class="form-control" name="icon" id="icon" placeholder="fa fa-user">
                        </div>
                        <div class="form-group mb-2">
                            <label for="order" class="form-label">Tartib raqami</label>
                            <input type="number" class="form-control" name="order" id="order" placeholder="1">
                        </div>
                        <div class="form-group mb-2">
                            <label for="url" class="form-label">URL (agar bo'lsa "Sahifa" urlini kiriting)</label>
                            <input type="text" class="form-control" name="url" id="url" placeholder="about-us">
                        </div>
                        <div class="mb-3">
                            <label class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value="1" checked name="status">
                                <span class="form-check-label">Status - aktiv</span>
                            </label>
                        </div>
                        <button class="btn btn-primary mt-4">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
