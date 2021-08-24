@if(session()->has('success'))
<!-- Success Alert -->
<div class="alert alert-success alert-dismissable" role="alert">
    {!! session()->get('success') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
    <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
</div>
@endif
<!-- END Success Alert -->

