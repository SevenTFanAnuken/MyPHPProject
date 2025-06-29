<?php
$title = "Information Page";
ob_start();
?>

<div class="mb-3">
    <h2>Information</h2>
        <p>This is the information page content. You can add more details here.</p>
            <p>Current Date and Time: <?php echo date('h:i A T, l, F d, Y'); // Outputs 09:04 AM +07, Sunday, June 29, 2025 ?></p>
            </div>

            <?php
            $content = ob_get_clean();
            include 'header.php';
            echo $content;
            include 'footer.php';
            ?>