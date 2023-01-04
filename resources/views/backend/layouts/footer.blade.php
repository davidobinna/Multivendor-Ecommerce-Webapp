<!-- Javascript -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('backend/assets/bundles/morrisscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/knob.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/js/pages/ui/sortable-nestable.js')}}"></script>
<script src="{{ asset('backend/assets/js/index.js')}}"></script>
<!-- Jquery DataTable Plugin Js --> 

<script src="{{ asset('backend/assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/tables/jquery-datatable.js') }}"></script>

 <!-- Summernote --->
<script  src ="{{ asset('backend/assets/summernote/summernote.js') }}"></script>

<!---Switch Button --->
<script src="{{ asset('backend/assets/vendor/switch-button-bootstrap/src/bootstrap-switch-button.js') }}"></script>

@yield('scripts')
<script>
    const timeout = {
        value:4000,
    };
    setTimeout(() => {
        $('#alert').slideUp();
    }, timeout.value );
</script>