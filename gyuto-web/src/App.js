import React, { Component } from "react";
import { Switch, Route } from "react-router-dom";
import { Grid } from "react-flexbox-grid";
import PageHome from "./components/pageHome/PageHome";
import PageEvents from "./components/pageEvents/PageEvents";
import NavBar from "./components/navBar/NavBar";
import Footer from "./components/footer/Footer";
import PageImages from "./components/pageImages/PageImages";
import PageInfo from "./components/pageInfo/PageInfo";
import PageMusique from "./components/pageMusique/PageMusique";
import PageDoclist from "./components/pageDocList/PageDocList";

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
      <div className="App" style={backgroundColor}>
        <Grid fluid>
          <NavBar />
          <Switch>
            <Route exact path="/" component={PageHome} />
            <Route path="/pageInfo" component={PageInfo} />
            <Route path="/pageMusique" component={PageMusique} />
            <Route path="/pageEvents" component={PageEvents} />
            <Route path="/pageImages" component={PageImages} />
            <Route path="/pageDocList" component={PageDoclist} />
          </Switch>
          <div style={backgroundColor}>
            <Footer />
          </div>
        </Grid>
      </div>
    );
  }
}

export default App;
