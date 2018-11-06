import React, { Component } from "react";
import { Link } from "react-router-dom";

class FooterNav extends Component {
  render() {
    return (
      <ul className="containerFooterNav">
        <li>
          <a href="">Aléatoire</a>
        </li>
        <li>
          <Link to="/PageDocList">Doc List</Link>
        </li>
      </ul>
    );
  }
}

export default FooterNav;
