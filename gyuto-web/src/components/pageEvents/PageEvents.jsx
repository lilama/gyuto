import React, { Component } from "react";
import { events } from "../data";
import Event from "./assets/Event";

class PageEvents extends Component {
  render() {
    const listEvents = events.map(event => {
      return <Event key={event.id} eventObject={event} />;
    });

    return (
      <div className="container">
        <div className="columns is-multiline">{listEvents}</div>
      </div>
    );
  }
}

export default PageEvents;
