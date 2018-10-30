import React, { Component } from 'react';
import Navigation from "./assets/navigation/Navigation";
import Logo from "./assets/logo/Logo";

class NavBar extends Component {
    render() {
        return (
            <div className="navbar">
                <Logo />
                <Navigation />
            </div>
        );
    }
}

export default NavBar;