<?php 
$pageTitle = "Contact Us | MultiTool";
include 'includes/common-header.php';
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1><i class="fas fa-envelope text-primary"></i> Contact Us</h1>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    
                    <div id="contactSuccess" class="alert alert-success mt-3" style="display: none;">
                        Your message has been sent successfully!
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5><i class="fas fa-map-marker-alt"></i> Our Location</h5>
                    <p>123 Calculator Street, Mathville, MV 12345</p>
                    
                    <h5 class="mt-3"><i class="fas fa-phone"></i> Contact Info</h5>
                    <p>Email: info@multitool.com<br>Phone: +1 (123) 456-7890</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // In a real implementation, this would send the form data to a server
    document.getElementById('contactSuccess').style.display = 'block';
    document.getElementById('contactForm').reset();
    
    // Scroll to success message
    document.getElementById('contactSuccess').scrollIntoView({ behavior: 'smooth' });
});
</script>

<?php include 'includes/common-footer.php'; ?>