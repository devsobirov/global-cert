@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">Hodimlar</h2>
                <a href="#" data-bs-toggle="modal" data-bs-target="#employee-{{null}}" class="btn btn-primary">Yangi yaratish</a>
                @include('admin.employees.create-modal', ['item' => new \App\Models\Employee()])
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
                            <th>FIO</th>
                            <th>Lavozimi</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $item->order }}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" style="display: block; width: 200px" alt="">
                                </td>
                                <td>
                                    {{$item->name}} <br> Phone: {{$item->phone}} <br> Email: {{$item->email}}
                                </td>
                                <td>{{$item->position}}</td>
                                <td>{{$item->status ? "Aktiv" : "O'chirilgan"}}</td>
                                <td>
                                    <div class="d-flex align-items-center" style="gap:4px">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#employee-{{$item->id}}" class="btn btn-icon btn-success" title="Tahrirlash">
                                            <x-svg.pen></x-svg.pen>
                                        </a>
                                        @include('admin.employees.create-modal', ['item' => $item])
                                        <form action="{{route('employees.destroy', $item->id)}}" method="POST">
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
                                <td colspan="6" class="text-center">Hodimlar topilmadi</td>
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
