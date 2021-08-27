
@props(['status'])

@if ($status)

    <div class="alert alert-success alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{--<h3 class="alert-heading font-size-h4 font-w400">Success</h3>--}}
        <p class="mb-0">{{ $status }} <a class="alert-link" href="javascript:void(0)"></a></p>
    </div>
@endif

