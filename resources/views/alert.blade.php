@if($message=Session::get('success'))

<div class="alert alert-success alert-dismissible fade show">
    
    <strong> {{$message}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif
@if($message=Session::get('successupdate'))

<div class="alert alert-success alert-dismissible fade show">
    
    <strong> {{$message}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


@endif
@if($message=Session::get('successdelete'))
    <div class="alert alert-success alert-block">
    <strong> {{$message}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
