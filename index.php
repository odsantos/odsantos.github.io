<?php
$pageTitle = "Osvaldo Santos - Portfolio";
include 'header.php';
?>
<div class="hero-section">
    <div class="container">
        <h1 class="display-4">Welcome to My Portfolio</h1>
        <p class="lead">
            I'm a passionate developer building web applications.
        </p>
        <hr class="my-4">
        <p>
            This portfolio is a showcase of my skills and projects.
        </p>
        <a class="btn btn-primary btn-lg" href="#projects">
            View My Work
        </a>
    </div>
</div>

<!-- About Section -->
<div id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="display-5">About Me</h2>
                <p class="lead">
                    I am a software developer with a passion for creating elegant and efficient solutions. My journey in the world of programming
                    started with a curiosity for how things work, and it has grown
                    into a fulfilling career.
                </p>
                <p>
                    I have experience with JavaScript, PHP, and I am currently learning
                    React and Node.js to expand my skills. I am always eager to
                    learn new things and take on new challenges.
                </p>
                <a href="https://www.linkedin.com/in/osvaldods/" target="_blank" rel="noopener noreferrer" class="btn btn-info mt-3">
                    View LinkedIn Profile
                </a>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div style="max-width: 250px;">
                    <img src="assets/images/profile-photo.jpg" alt="Osvaldo Santos" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Projects Section -->
<div id="projects" class="projects-section">
    <div class="container">
        <h2 class="display-5 text-center mb-5">My Projects</h2>
        <div class="row align-items-stretch">
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm d-flex flex-column">
                    <img src="assets/images/file-organizer.jpg" alt="File Organizer" class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">File Organizer</h5>
                        <p class="card-text">
                            A simple yet powerful Python script to automatically organize files in a directory based on their extension. A practical tool designed for ease of use.
                        </p>
                        <a href="https://fileorganizer.odsantos.com/" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-auto">
                            View Project
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card mb-4 shadow-sm d-flex flex-column">
                    <img src="assets/images/text-cleaner.jpeg" alt="Text Cleaner" class="card-img-top">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Text Cleaner</h5>
                        <p class="card-text">
                            A simple and efficient web tool to clean up text. It can remove extra spaces, line breaks, and other unwanted characters, making it easy to format text for different uses.
                        </p>
                        <a href="https://odsantos.github.io/text-cleaner/" target="_blank" rel="noopener noreferrer" class="btn btn-primary mt-auto">
                            View Project
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
