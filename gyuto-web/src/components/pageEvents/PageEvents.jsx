import React, { Component } from "react";
import { events } from "../data";
import Event from "./Event";

class PageEvents extends Component {
  render() {
    const listEvents = events.map(event => {
      return <Event key={event.id} eventObject={event} />;
    });

    return <div className="columns">{listEvents}</div>;
  }
}

export default PageEvents;
