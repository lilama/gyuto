import React, { Component } from "react";
import PageEvents from "./components/pageEvents/PageEvents";
import NavBar from "./components/navBar/NavBar";


class App extends Component {
  render() {
    return (
      <div className="App">
        <NavBar />
        <PageEvents />
      </div >
    );
  }
}

export default App;
