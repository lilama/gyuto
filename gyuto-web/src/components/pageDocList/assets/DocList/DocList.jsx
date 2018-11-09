import React, { Component } from 'react';
import { Col } from "react-flexbox-grid";
import { introduction } from '../../../data';

class DocList extends Component {
    render() {
        return (
            <div className="videoTitle"
                onMouseEnter={() => this.props.docHover(this.props.videoObject.id)}
                onMouseLeave={() => this.props.docHover("introduction")}
            >
                <h3><a href="#">{this.props.videoObject.title.fr}</a></h3>
                <p>{this.props.videoObject.duration}</p>
            </div>
        );
    }
}

export default DocList;