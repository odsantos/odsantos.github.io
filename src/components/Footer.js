import { Container } from 'react-bootstrap';

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-dark text-white mt-5 p-4 text-center">
      <Container>
        <p>&copy; {currentYear} Osvaldo Santos. All Rights Reserved.</p>
      </Container>
    </footer>
  );
}