import React, { Component } from "react";
import { Link } from "react-router-dom";

class FooterNav extends Component {
  render() {
    return (
      <ul className="containerFooterNav">
        <li>
          <Link to="/">Aléatoire</Link>
        </li>
        <li>
          <Link to="/PageDocList">Doc List</Link>
        </li>
      </ul>
    );
  }
}

export default FooterNav;
