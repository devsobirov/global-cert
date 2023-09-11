<div class="modal fade" id="employee-{{$item->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$item->id ? $item->title : 'Yangi loyiha kiritish'}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{$item->id ? route('projects.update', $item->id) : route('projects.store')}}" enctype="multipart/form-data">
                    @csrf
                    @if($item->id)
                        @method('PATCH')
                    @endif

                    <div class="form-group mb-2">
                        <label for="title-{{$item->id}}" class="form-label">Nomi</label>
                        <input type="text" class="form-control" name="title" id="title-{{$item->id}}" placeholder="..." value="{{$item->title}}">
                    </div>

                    <div class="form-group mb-2">
                        <div class="form-label">Rasm</div>
                        <input type="file" name="image" class="form-control" @if(!$item->id) required @endif accept="image/*">
                    </div>

                    <div class="form-group mb-2">
                        <label for="order-{{$item->id}}" class="form-label">Tartib raqami</label>
                        <input type="number" class="form-control" name="order" id="order-{{$item->id}}" placeholder="1" value="{{$item->order}}">
                    </div>

                    <button class="btn btn-primary mt-4">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>
