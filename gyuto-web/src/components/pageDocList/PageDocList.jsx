import React, { Component, Fragment } from "react";
import { videos } from "../data";
import { Row, Col, Grid } from "react-flexbox-grid";
import DocList from "./assets/DocList/DocList"
import Preview from "./assets/Preview/Preview"
class PageDoclist extends Component {
  constructor(props) {
    super(props);
    this.state = {
      selectedId: 'introduction'
    }
  }

  docHover(selectedId) {
    this.setState({
      selectedId
    })
  }

  render() {
    const listVideos = videos.map(video => {
      return (
        <Col className="docListCol" xs={12} sm={12} md={12} lg={12}>
          <DocList key={video.id} videoObject={video} docHover={this.docHover.bind(this)} />
        </Col>
      );
    });

    return (
      <div className="docListPageContainer">
        <div className="docListContainer">
          {listVideos}
        </div>
        <Preview
          videoData={videos[this.state.selectedId - 1]}
          selected={this.state.selectedId}
        />
      </div>
    );
  }
}

export default PageDoclist;
