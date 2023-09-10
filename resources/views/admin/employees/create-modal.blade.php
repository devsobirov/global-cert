<div class="modal fade" id="employee-{{$item->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$item->id ? $item->name : 'Yangi hodim kiritish'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{$item->id ? route('employees.update', $item->id) : route('employees.store')}}" enctype="multipart/form-data">
                    @csrf
                    @if($item->id)
                        @method('PATCH')
                    @endif
                    @foreach(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalesOrder() as $locale => $data)
                        <div class="form-group mb-2">
                            <label for="recipient-name-{{$item->id}}" class="form-label">FIO - {{$data['native']}}</label>
                            <input type="text" class="form-control" name="name[{{$locale}}]" id="recipient-name-{{$item->id}}" required value="{{$item->getTranslation('name', $locale, false)}}">
                        </div>

                        <div class="form-group mb-2">
                            <label for="recipient-position-{{$item->id}}" class="form-label">Lavozimi - {{$data['native']}}</label>
                            <input type="text" class="form-control" name="position[{{$locale}}]" id="recipient-position-{{$item->id}}" required value="{{$item->getTranslation('name', $locale, false)}}">
                        </div>
                    @endforeach

                    <div class="form-group mb-2">
                        <div class="form-label">Rasm</div>
                        <input type="file" name="image" class="form-control" @if(!$item->id) required @endif accept="image/*">
                    </div>

                    <div class="form-group mb-2">
                        <label for="order-{{$item->id}}" class="form-label">Tartib raqami</label>
                        <input type="number" class="form-control" name="order" id="order-{{$item->id}}" placeholder="1" value="{{$item->order}}">
                    </div>

                    <div class="form-group mb-2">
                        <label for="icon-{{$item->id}}" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email-{{$item->id}}" placeholder="..." value="{{$item->email}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone-{{$item->id}}" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone-{{$item->id}}" placeholder="..." value="{{$item->phone}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="1" @if(!$item->id || $item->status) checked @endif name="status">
                            <span class="form-check-label">Status - aktiv</span>
                        </label>
                    </div>
                    <button class="btn btn-primary mt-4">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>
