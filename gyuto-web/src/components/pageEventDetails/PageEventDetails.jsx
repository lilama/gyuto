import React, { Component } from "react";
import { events } from "../data";
import EventDetails from "./assets/eventDetails/EventDetails";

class PageEventDetails extends Component {
  render() {
    return <EventDetails events={events} />;
  }
}

export default PageEventDetails;
