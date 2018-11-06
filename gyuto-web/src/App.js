import React, { Component } from "react";
import { Grid } from 'react-flexbox-grid';
import PageEvents from "./components/pageEvents/PageEvents";
import NavBar from "./components/navBar/NavBar";
import Footer from "./components/footer/Footer";


class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      color: "white"
    };
  }
  render() {
    const backgroundColor = {
      background: this.state.color
    };
    return (
      <div className="App" style={backgroundColor}  >
        <Grid fluid>
          <NavBar />
          <PageEvents />
          <div style={backgroundColor} >
            <Footer />
          </div>
        </Grid>
      </div >
    );
  }
}

export default App;
