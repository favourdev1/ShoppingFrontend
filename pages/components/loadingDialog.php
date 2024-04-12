<div
    class="modal d-flex align-items-center   justify-content-center"
    tabindex="-1"
    role="dialog"
    id="loadingDialog"
    data-backdrop="static"
    data-keyboard="false"
    style="background:#ffffff !important"
>
    <div
        class="modal-dialog "
        role="document"
    >
        <div class="modal-content border">
            <img
                src="../assets/images/loader.svg"
                height="100"
                width="100"
                class="img-fluid m-5 "
                alt=""
            >
        </div>
    </div>
</div>

<script>

    // document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById('loadingDialog');
        // hideDialog(true)

       
    // })
    function hideDialog(hide) {
            if (hide) {
                modal.style.cssText = 'display: none !important;';

            } else {
                modal.style.cssText = ' display: flex !important;';

            }

        }


    document.addEventListener("DOMContentLoaded", function() {
        // const modal = document.getElementById('loadingDialog');
        hideDialog(true)

       
    })

</script>