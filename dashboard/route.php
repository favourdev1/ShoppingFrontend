<?php

$apiUrl = $API_URL.'/admin';
?>
<script>
const apiRoute = '<?= $apiUrl ?>';

</script>


<script>
    /**
     * Displays an alert message.
     * @param {string} message - The message to be displayed in the alert.
     * @param {string} status - The status of the alert ('success' or 'error').
     * @param {number} [time=5]
     */
    function showAlert(message, status, time = 8) {
        const alertHub = new AlertHub();
        alertHub.showAlert({
            title: "",
            description: message + "    ",
            position: "top-right",
            type: status === 'success' ? 'success' : 'danger',
            timeout: time,
            closeButton: false,
            closeButtonSize: 20,
            animation: "fade-in",
        });
    }

  
    
  
    </script>