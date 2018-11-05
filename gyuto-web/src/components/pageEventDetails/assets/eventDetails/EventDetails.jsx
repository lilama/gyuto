import React, { Component } from "react";

class EventDetails extends Component {
  render() {
    return <p>{this.props.events[1].id}</p>;
  }
}

export default EventDetails;
