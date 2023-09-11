<div class="modal fade" id="employee-{{$item->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-number" id="exampleModalLabel">{{$item->id ? $item->number : 'Yangi sertifikat kiritish'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{$item->id ? route('certificates.update', $item->id) : route('certificates.store')}}" enctype="multipart/form-data">
                    @csrf
                    @if($item->id)
                        @method('PATCH')
                    @endif

                    <div class="form-group mb-2">
                        <label for="number-{{$item->id}}" class="form-label">№</label>
                        <input type="text" class="form-control" required name="number" id="number-{{$item->id}}" placeholder="..." value="{{$item->number}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="issue_date-{{$item->id}}" class="form-label">Issue date</label>
                        <input type="date" class="form-control" required name="issue_date" id="issue_date-{{$item->id}}" value="{{$item->issue_date?->format('Y-m-d')}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="expiry_date-{{$item->id}}" class="form-label">Expiry date</label>
                        <input type="date" class="form-control" required name="expiry_date" id="expiry_date-{{$item->id}}" value="{{$item->expiry_date?->format('Y-m-d')}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="address-{{$item->id}}" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address-{{$item->id}}" placeholder="..." value="{{$item->address}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="accreditation-{{$item->id}}" class="form-label">Accreditation</label>
                        <input type="text" class="form-control" name="accreditation" id="accreditation-{{$item->id}}" placeholder="..." value="{{$item->accreditation}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="scope_of_work-{{$item->id}}" class="form-label">Scope of Work</label>
                        <input type="text" class="form-control" name="scope_of_work" id="scope_of_work-{{$item->id}}" placeholder="..." value="{{$item->scope_of_work}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="standard-{{$item->id}}" class="form-label">Standard</label>
                        <input type="text" class="form-control" name="standard" id="standard-{{$item->id}}" placeholder="..." value="{{$item->standard}}">
                    </div>

                    <button class="btn btn-primary mt-4">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>
