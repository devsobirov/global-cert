<form action="{{route('certificates.index')}}" class="d-md-flex d-sm-block">
    <input type="search" class="form-control d-inline-block w-9 me-1 mb-1" placeholder="Certificate Number" name="search" value="{{request('search')}}">
    <select name="status" id="" class="form-control d-inline-block w-9 me-1 mb-1">
        <option value="" selected>All Statuses</option>
        <option @if(request('status') == 'active') selected @endif value="active">Active</option>
        <option @if(request('status') == 'expired') selected @endif value="expired">Expired</option>
    </select>
    <button class="btn me-1 btn-azure mb-1" title="Izlash"><x-svg.search></x-svg.search> Search</button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#employee-{{null}}" class="btn btn-primary mb-1">Yangi yaratish</button>
</form>
