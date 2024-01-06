<?php
include_once('components/loadingDialog.php');
$arr = $_SESSION;
// print_r($arr);
if (isset($_SESSION['status']) && !empty($_SESSION['message'])) { ?>

<script>
const alertHub = new AlertHub();

alertHub.showAlert({
    title: "",
    description: "<?php echo $_SESSION['message'] . " "; ?>",
    position: "top-right",
    type: "<?php echo $_SESSION['status']; ?>",
    timeout: 7,
    closeButton: false,
    closeButtonSize: 20,
    animation: "fade-in",
});
</script>

<?php
                unset($_SESSION['status'], $_SESSION['message'], $_SESSION['error']);
}





?>