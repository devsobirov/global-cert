@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="page-title">Murojatlar</h2>
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
                            <th>Murojat turi</th>
                            <th>Murojatchi</th>
                            <th>Xabar</th>
                            <th>Yaratilgan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            @if($item->subject)
                                @include('admin.messages.message-row')
                            @else
                                @include('admin.messages.callback-row')
                            @endif
                        @endforeach
                        @if(!count($items))
                            <tr>
                                <td colspan="7" class="text-center">Murojatlar topilmadi</td>
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
