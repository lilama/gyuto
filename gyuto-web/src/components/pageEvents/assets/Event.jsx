import React, { Component } from "react";

class Event extends Component {
  render() {
    return (
      <div className="column">
        <h3>{this.props.eventObject.id}</h3>
        <img src={this.props.eventObject.url} alt="la" />
        <p>{this.props.eventObject.place}</p>
      </div>
    );
  }
}

export default Event;

