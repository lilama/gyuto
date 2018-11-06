import React, { Component } from "react";
import { Link } from "react-router-dom";

class Navigation extends Component {
  render() {
    return (
      <ul className="menu">
        <li>
          <Link to="/PageInfo">Info</Link>
        </li>
        <li>
          <Link to="/PageMusique">Musique</Link>
        </li>
        <li>
          <Link to="/PageImages">Images</Link>
        </li>
        <li>
          <Link to="/PageEvents">Événements</Link>
        </li>
        <li>
          <a href="#">FR</a>
        </li>
      </ul>
    );
  }
}

export default Navigation;
