import React, { Component } from "react";
import { events } from "../data";
import Event from "./assets/Event";
import { Row, Col } from 'react-flexbox-grid';

class PageEvents extends Component {
  render() {
    const listEvents = events.map(event => {
      return (
        <Col xs={12} sm={6} md={6} lg={4}>
          <Event key={event.id} eventObject={event} />
        </Col>
      )
    });

    return (
      <Row>
        {listEvents}
      </Row>
    )
  }
}


export default PageEvents;