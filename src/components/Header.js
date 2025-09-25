'use client';

import { Navbar, Nav, Container } from 'react-bootstrap';

export default function Header() {
  return (
    <Navbar bg="dark" variant="dark" expand="lg" collapseOnSelect>
      <Container>
        <Navbar.Brand href="#home">Osvaldo Santos</Navbar.Brand>
           <Navbar.Toggle aria-controls="responsive-navbar-nav" />
           <Navbar.Collapse id="responsive-navbar-nav">
             <Nav className="ms-auto">
               <Nav.Link href="#home">Home</Nav.Link>
               <Nav.Link href="#about">About</Nav.Link>
               <Nav.Link href="#projects">Projects</Nav.Link>
               <Nav.Link href="#contact">Contact</Nav.Link>
             </Nav>
           </Navbar.Collapse>
         </Container>
       </Navbar>
    );
}