import { Container } from 'react-bootstrap';

export default function Home() {
  return (
    <main>
      <div className="bg-light p-5 rounded-lg m-3">
        <Container>
          <h1 className="display-4">Welcome to My Portfolio</h1>
          <p className="lead">
            I&apos;m a passionate developer building web applications.
          </p>
          <hr className="my-4" />
          <p>
            This portfolio is a showcase of my skills and projects.
          </p>
          <a className="btn btn-primary btn-lg" href="#projects">
            View My Work
          </a>
        </Container>
      </div>

      {/* About Section */}
      <div id="about" className="py-5">
        <Container>
          <div className="row">
            <div className="col-lg-6">
              <h2 className="display-5">About Me</h2>
              <p className="lead">
                I am a software developer with a passion for creating elegant and efficient solutions. My journey in the world of programming
                started with a curiosity for how things work, and it has grown
                into a fulfilling career.
              </p>
              <p>
                I have experience with JavaScript, PHP, and I am currently learning
                React and Node.js to expand my skills. I am always eager to
                learn new things and take on new challenges.
              </p>
              <a href="https://www.linkedin.com/in/osvaldods/" target="_blank" rel="noopener noreferrer" className="btn btn-info mt-3">
                View LinkedIn Profile
              </a>
            </div>
            <div className="col-lg-6 d-flex align-items-center justify-content-center">
              <div style={{ maxWidth: '250px' }}>
                <img
                  src="/profile-photo.jpg"
                  alt="Osvaldo Santos"
                  className="img-fluid rounded-circle"
                />
              </div>
            </div>
          </div>
        </Container>
      </div>

      {/* Projects Section */}
      <div id="projects" className="py-5 bg-light">
        <Container>
          <h2 className="display-5 text-center mb-5">My Projects</h2>
          <div className="row align-items-stretch">
            <div className="col-md-4 d-flex">
              <div className="card mb-4 shadow-sm d-flex flex-column">
                <img
                  src="/file-organizer-pro.jpg"
                  alt="File Organizer Pro"
                  className="card-img-top"
                />
                <div className="card-body d-flex flex-column justify-content-between">
                  <h5 className="card-title">File Organizer Pro</h5>
                  <p className="card-text">
                    A simple yet powerful Python script to automatically organize files in a directory based on their extension. A practical tool designed for ease of use.
                  </p>
                  <a href="https://odsantos.github.io/file-organizer-script" target="_blank" rel="noopener noreferrer" className="btn btn-primary mt-auto">
                    View Project
                  </a>
                </div>
              </div>
            </div>
            <div className="col-md-4 d-flex">
              <div className="card mb-4 shadow-sm d-flex flex-column">
                <img
                  src="/text-cleaner.jpeg"
                  alt="Text Cleaner"
                  className="card-img-top"
                />
                <div className="card-body d-flex flex-column justify-content-between">
                  <h5 className="card-title">Text Cleaner</h5>
                  <p className="card-text">
                    A simple and efficient web tool to clean up text. It can remove extra spaces, line breaks, and other unwanted characters, making it easy to format text for different uses.
                  </p>
                  <a href="https://odsantos.github.io/text-cleaner/" target=
     "_blank" rel="noopener noreferrer" className="btn btn-primary mt-auto">
                    View Project
                  </a>
                </div>
              </div>
            </div>
            <div className="col-md-4 d-flex">
              <div className="card mb-4 shadow-sm d-flex flex-column">
                <img
                  src="/bookmark-cleaner.jpeg"
                  alt="Bookmark Cleaner"
                  className="card-img-top"
                />
                <div className="card-body d-flex flex-column justify-content-between">
                  <h5 className="card-title">Bookmark Cleaner</h5>
                  <p className="card-text">
                    A web application that checks a list of bookmarks for broken
                    or redirected links. It features a clean user interface and a PHP-based API to process the links.
                  </p>
                  <a href="https://bookmark-cleaner.netlify.app/" target="_blank" rel="noopener noreferrer" className="btn btn-primary mt-auto">
                    View Project
                  </a>
                </div>
              </div>
            </div>
          </div>
        </Container>
      </div>

      {/* Contact Section */}
      <div id="contact" className="py-5">
        <Container>
          <div className="row justify-content-center">
            <div className="col-lg-6">
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc-TAzxFemO5a39d3PDdIRrsqzq50TxJ-bNICVgu9_tXxphSg/viewform?embedded=true" width="640" height="850" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
          </div>
        </Container>
      </div>
    </main>
  );
}