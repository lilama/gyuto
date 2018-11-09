import React, { Component } from "react";
import { images } from "../data";
import { Row, Col } from "react-flexbox-grid";

class PageImagesDetails extends Component {
  render() {
    const id = `${this.props.match.params.id}`; // the match.params.id props fetch the id from the URL
    return (
      <Row>
        <Col xs={0} sm={0} md={1} lg={1} />
        <Col xs={12} sm={12} md={10} lg={10}>
          <div className="pageImageWrapper">
            <div className="imageContainer">
              <img src={images[id].galery.image[0].url} alt="image" />
              <h2>{images[id].galery.image[0].title.fr}</h2>
              <p>{images[id].galery.image[0].legend.fr}</p>
            </div>
          </div>
        </Col>
        <Col xs={0} sm={0} md={1} lg={1} />
      </Row>
    );
  }
}

export default PageImagesDetails;
