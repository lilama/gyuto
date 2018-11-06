import React, { Component } from 'react';

class Navigation extends Component {
    render() {
        return (
            <ul className="menu">
                <li><a href="#">Info</a></li>
                <li><a href="#">Musique</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Événements</a></li>
                <li><a href="#">FR</a></li>
            </ul>
        );
    }
}

export default Navigation;