<?php
$pageTitle = "Contact - Osvaldo Santos";
include 'header.php';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-5">Contact Me</h1>
            <p class="lead">Please use the form below to get in touch. I'll get back to you as soon as possible.</p>
            
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] == 'success') {
                    echo '<div class="alert alert-success">Message sent successfully!</div>';
                } else if ($_GET['status'] == 'error') {
                    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
                    $errorMessage = 'An error occurred. Please try again.';
                    if ($msg == 'invalid_input') {
                        $errorMessage = 'Please fill out all fields correctly.';
                    } else if ($msg == 'mail_failed') {
                        $errorMessage = 'An error occurred while sending your message. Please try again later.';
                    } else if ($msg == 'invalid_token') {
                        $errorMessage = 'Invalid request. Please try submitting the form again.';
                    }
                    echo '<div class="alert alert-danger">' . $errorMessage . '</div>';
                }
            }
            ?>

            <form action="process_contact.php" method="POST" class="mt-4">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
                </div>
                
                <!-- Basic Honeypot for spam prevention -->
                <div style="display:none;">
                    <label for="hp_field">Don't fill this out if you're human:</label>
                    <input type="text" name="hp_field" id="hp_field">
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>