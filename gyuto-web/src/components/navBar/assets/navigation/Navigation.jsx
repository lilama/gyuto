import React, { Component } from "react";
import { Link } from "react-router-dom";
import Media from "react-media";

class Navigation extends Component {

  constructor(props) {
    super(props);

    this.state = {
      menu: false,
    }
  }

  toggleMenu(state) {
    console.log(state)
    this.setState({ menu: !this.state.menu })
  }

  render() {
    return (
      <div>
        <Media query="(max-width: 700px)" render={() => (
          <nav className="nav-mobile">
            <div className={this.state.menu ? 'open' : ''}>
              <label for="menu-toggler-input" class="menu-toggler" onClick={() => this.toggleMenu()}>
                <span class="menu-toggler__line"></span>
                <span class="menu-toggler__line"></span>
                <span class="menu-toggler__line"></span>
              </label>
              <div class="side-bar">
                <ul class="side-menu">
                  <li class="side-menu__item" onClick={() => this.toggleMenu()}><Link to="/PageDocList">Doc List</Link></li>
                  <li class="side-menu__item" onClick={() => this.toggleMenu()}><Link to="/PageInfo">Info</Link></li>
                  <li class="side-menu__item" onClick={() => this.toggleMenu()}><Link to="/PageMusique">Musique</Link></li>
                  <li class="side-menu__item" onClick={() => this.toggleMenu()}><Link to="/PageImages">Images</Link></li>
                  <li class="side-menu__item" onClick={() => this.toggleMenu()}><Link to="/PageEvents">Événements</Link></li>
                </ul>
              </div>
            </div>
            {/* <input type="checkbox" id="menu-toggler-input" class="menu-toggler-input" /> */}

          </nav>
        )} />

        <Media query="(min-width: 701px)" render={() => (
          <nav>
            <ul className="menu">
              <li><Link to="/PageInfo">Info</Link></li>
              <li><Link to="/PageMusique">Musique</Link></li>
              <li><Link to="/PageImages">Images</Link></li>
              <li><Link to="/PageEvents">Événements</Link></li>
              <li><a href="#">FR</a></li>
            </ul>
          </nav>
        )} />
      </div>
    )
  }
}

export default Navigation;
