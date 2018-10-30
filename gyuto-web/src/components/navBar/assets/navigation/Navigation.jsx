import React, { Component } from 'react';

class Navigation extends Component {
    render() {
        return (
            <ul className="menu">
                <li>Info</li>
                <li>Musique</li>
                <li>Images</li>
                <li>Événements</li>
                <li className="language">FR</li>
            </ul>
        );
    }
}

export default Navigation;