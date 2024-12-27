@if (session('success'))
    <div class="alert alert-success alert-dismissible" id="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><i class="fa-solid fa-circle-check"></i></strong> {{ session('success') }}
    </div>
@elseif (session('warning'))
    <div class="alert alert-warning alert-dismissible" id="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><i class="fa-solid fa-triangle-exclamation"></i></strong> {{ session('warning') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger alert-dismissible" id="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><i class="fa-solid fa-triangle-exclamation"></i></strong> {{ session('error') }}
    </div>
@elseif (session('info'))
    <div class="alert alert-info alert-dismissible" id="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong><i class="fa-solid fa-circle-info"></i></strong> {{ session('info') }}
    </div>
@endif
