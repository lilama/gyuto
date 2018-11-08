import React, { Component } from "react";
import { events } from "../data";
import Event from "./assets/Event";
import { Row, Col } from "react-flexbox-grid";
import { Link } from "react-router-dom";

class PageEvents extends Component {
  render() {
    const listEvents = events.map(event => {
      return (
        <Col xs={12} sm={6} md={6} lg={4}>
          <Link to={`/PageEvents/${event.id}`}>
            <Event key={event.id} eventObject={event} />
          </Link>
        </Col>
      );
    });

    return <Row className="eventsRow">{listEvents}</Row>;
  }
}

export default PageEvents;
