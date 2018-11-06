import React, { Component } from "react";
import { Link } from "react-router-dom";

class Logo extends Component {
  render() {
    return (
      <div className="containerLogo">
        <div className="logo">
          <Link to="/">Gyuto</Link>
        </div>
        <div className="pageName">Événements</div>
      </div>
    );
  }
}

export default Logo;
