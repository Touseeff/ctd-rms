<!-- JAVASCRIPT -->
<script src="{{ asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('public/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('public/assets/js/plugins.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--datatable js-->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
{{--  --}}
<!-- dragula init js -->
<script src="{{ asset('public/assets/libs/dragula/dragula.min.js') }}"></script>

<!-- dom autoscroll -->
<script src="{{ asset('public/assets/libs/dom-autoscroller/dom-autoscroller.min.js') }}"></script>

<!--taks-kanban-->
<script src="{{ asset('public/assets/js/pages/tasks-kanban.init.js') }}"></script>
{{--  --}}

<script src="{{ asset('public/assets/js/pages/datatables.init.js') }}"></script>


<!-- password-addon init -->
<script src="{{ asset('public/assets/js/pages/password-addon.init.js') }}"></script>
{{-- alert auto colose --}}


<!-- ckeditor -->
 <script src="{{ asset('public/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

{{-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> --}}
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>


<!-- project-create init -->
<script src="{{ asset('public/assets/js/pages/project-create.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('public/assets/js/app.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="{{ asset('public/assets/js/pages/select2.init.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const alertMessage = document.getElementById("alert-message");
        if (alertMessage) {
            setTimeout(() => {
                alertMessage.style.display = "none";
            }, 3000);
        }
    });
</script>
