@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">Sertifikatlar ({{$items->total()}})</h2>
                </div>

                <div class="col-auto ms-auto d-print-none">
                    @include('admin.certificates.filters')
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="card">
                <div class="table-responsive">
                    @include('admin.certificates.table')
                </div>
                @if( $items->hasPages() )
                    <div class="card-footer pb-0">
                        {{ $items->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('admin.certificates.create-modal', ['item' => new \App\Models\Certificate()])
@endsection
