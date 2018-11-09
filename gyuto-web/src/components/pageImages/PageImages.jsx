import React, { Component } from "react";
import { images } from "../data";
import { Row, Col } from "react-flexbox-grid";
import { Link } from "react-router-dom";
import Image from "./assets/Image";

class PageImages extends Component {
  render() {
    const listGaleries = images.map(i => {
      return (
        <Col xs={12} sm={6} md={6} lg={4}>
          <Link to={`/PageImages/${i.id}`}>
            <Image key={i.id} imagesObject={i} />
          </Link>
        </Col>
      );
    });
    return <Row className="imagesRow">{listGaleries}</Row>;
  }
}

export default PageImages;
