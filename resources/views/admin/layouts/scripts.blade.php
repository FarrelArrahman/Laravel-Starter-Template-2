<script src="{{ asset('mazer-admin/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('mazer-admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('mazer-admin/js/mazer.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/choices.js/choices.min.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/toastify/toastify.js') }}"></script>
<script src="{{ asset('mazer-admin/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('jqueryui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script>
    $(document).ready(function() {
        // Jquery Datatable
        let jquery_datatable = $("#table").DataTable()

        // Choices.js
        let choices = document.querySelectorAll('.choices');
        let initChoice;
        for(let i=0; i<choices.length;i++) {
            if (choices[i].classList.contains("multiple-remove")) {
                initChoice = new Choices(choices[i],
                {
                    delimiter: ',',
                    editItems: true,
                    maxItemCount: -1,
                    removeItemButton: true,
                });
            } else {
                initChoice = new Choices(choices[i]);
            }
        }

        @if(session()->has('success'))
        setTimeout(function() {
            Toastify({
                text: "{{ session()->get('success') }}",
                duration: 5000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#4fbe87",
            }).showToast();
        }, 500);
        @endif

        @if($errors->any())
        setTimeout(function() {
            Toastify({
                text: "Terdapat input yang tidak valid, silahkan coba lagi.",
                duration: 5000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#f47174",
            }).showToast();
        }, 500);
        @endif

        @if(session()->has('error'))
        setTimeout(function() {
            Toastify({
                text: "{{ session()->get('error') }}",
                duration: 5000,
                close: true,
                gravity: "top",
                position: "right",
                backgroundColor: "#f47174",
            }).showToast();
        }, 500);
        @endif

        $('.money').mask('000.000.000', {reverse: true})
    });
</script>
@yield('js')