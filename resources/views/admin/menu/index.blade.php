@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">Menu linklari</h2>
                <a href="{{route('menu.create')}}" class="btn btn-primary">Yangi yaratish</a>
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
                            <th>ID</th>
                            <th>№</th>
                            <th>Sarlavha</th>
                            <th>Ona menu</th>
                            <th>URL</th>
                            <th>Yaratilgan</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items->whereNull('parent_id') as $item)
                            @include('admin.menu.table-row')
                        @endforeach
                        @foreach($items->whereNotNull('parent_id') as $item)
                            @include('admin.menu.table-row')
                        @endforeach

                        @if(!count($items))
                            <tr>
                                <td colspan="7" class="text-center">Menu linklari topilmadi</td>
                            </tr>
                        @endif
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
