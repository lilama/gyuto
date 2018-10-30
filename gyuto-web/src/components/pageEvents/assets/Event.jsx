import React, { Component } from "react";

class Event extends Component {
  render() {
    return (
      <div className="column is-4">
        <div className="parent">
          <a href="#">
            <div
              className="child"
              style={{
                backgroundImage: `url("${this.props.eventObject.url}")`
              }}
            >
              <p>{this.props.eventObject.title[0].fr}</p>
              <p>{this.props.eventObject.date}</p>
              <p>{this.props.eventObject.hour}</p>
              <p>{this.props.eventObject.place}</p>
            </div>
          </a>
        </div>
      </div>
    );
  }
}
export default Event;
