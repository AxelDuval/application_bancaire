<?php
if ($_SESSION != null) {
} else {
?>
    <script type="text/javascript">
        document.getElementById("logout").style.display = "none";
    </script>
<?php
};
?>