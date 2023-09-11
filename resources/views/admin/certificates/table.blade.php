<table class="table" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>№ / Dates</th>
        <th>Status</th>
        <th>Address/Accred.</th>
        <th>Scope of W./Standard</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse($items as $item)
        <tr>
            <td>
                №: {{ $item->number }} <br>
                Issued: {{$item->issue_date?->format('Y-m-d')}} <br>
                Expires: {{$item->expiry_date?->format('Y-m-d')}}
            </td>
            <td>{{$item->getStatus()}}</td>
            <td>
                Address: {{$item->address}}<br>
                Accreditation: {{$item->accreditation}}
            </td>
            <td>
                Scope of Work: {{$item->address}}<br>
                Standard: {{$item->accreditation}}
            </td>
            <td>
                <div class="d-flex align-items-center" style="gap:4px">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#employee-{{$item->id}}" class="btn btn-icon btn-success" title="Tahrirlash">
                        <x-svg.pen></x-svg.pen>
                    </a>
                    @include('admin.certificates.create-modal', ['item' => $item])
                    <form action="{{route('projects.destroy', $item->id)}}" method="POST">
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
            <td colspan="4" class="text-center">Sertifikatlar topilmadi</td>
        </tr>
    @endforelse
    </tbody>
</table>
