import React, { Component } from "react";

class Event extends Component {
  render() {
    return (
      <div className="column is-3">
        <h3>{this.props.eventObject.title[0].fr}</h3>
        <img src={this.props.eventObject.url} alt="picture" />
        <p>{this.props.eventObject.date}</p>
        <p>{this.props.eventObject.hour}</p>
        <p>{this.props.eventObject.place}</p>
      </div>
    );
  }
}
export default Event;
